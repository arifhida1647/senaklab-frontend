<?php

namespace App\Controllers;

use App\Models\ModelUsers;

class register extends BaseController
{
    protected $model;

    function __construct()
    {
        $this->model = new ModelUsers();
    }

    public function index()
    {
        return view('register_view');
    }

    public function submit()
    {
        $session = session();
        $validation = \Config\Services::validation();

        // Custom rules for username and email uniqueness
        $validation->setRules([
            'member_fullName' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Full Name is required.',
                    'min_length' => 'Full Name must be at least 3 characters long.'
                ]
            ],
            'member_email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please enter a valid email address.',
                    'is_unique' => 'This email is already registered.'
                ]
            ],
            'member_username' => [
                'rules' => 'required|min_length[3]|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username is required.',
                    'min_length' => 'Username must be at least 3 characters long.',
                    'is_unique' => 'This username is already taken.'
                ]
            ],
            'phone_number' => [
                'rules' => 'required|numeric|min_length[10]',
                'errors' => [
                    'required' => 'Phone Number is required.',
                    'numeric' => 'Phone Number must be a valid number.',
                    'min_length' => 'Phone Number must be at least 10 digits long.'
                ]
            ],
            'street' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Street is required.'
                ]
            ],
            'city' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'City is required.'
                ]
            ],
            'state' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'State is required.'
                ]
            ],
            'zip_code' => [
                'rules' => 'required|numeric|min_length[5]|max_length[10]',
                'errors' => [
                    'required' => 'Zip Code is required.',
                    'numeric' => 'Zip Code must be a valid number.',
                    'min_length' => 'Zip Code must be at least 5 digits long.',
                    'max_length' => 'Zip Code must not exceed 10 digits.'
                ]
            ],
            'member_password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must be at least 6 characters long.'
                ]
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $session->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        }

        $data = [
            'full_name' => $this->request->getPost('member_fullName'),
            'email' => $this->request->getPost('member_email'),
            'username' => $this->request->getPost('member_username'),
            'phone_number' => $this->request->getPost('phone_number'),
            'street' => $this->request->getPost('street'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'zip_code' => $this->request->getPost('zip_code'),
            'password' => password_hash($this->request->getPost('member_password'), PASSWORD_DEFAULT),
        ];

        if ($this->model->insert($data)) {
            $session->setFlashdata('success', 'Registration successful!');
            return redirect()->to('/login');
        } else {
            $session->setFlashdata('error', 'Failed to register. Please try again.');
            return redirect()->back()->withInput();
        }
    }
}
