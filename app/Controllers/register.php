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
            'member_fullName' => 'required|min_length[3]',
            'member_email'    => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'is_unique' => 'This email is already registered.'
                ]
            ],
            'member_username' => [
                'rules' => 'required|min_length[3]|is_unique[users.username]',
                'errors' => [
                    'is_unique' => 'This username is already taken.'
                ]
            ],
            'member_password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $session->setFlashdata('error', $validation->listErrors());
            return redirect()->back()->withInput();
        }

        $data = [
            'full_name' => $this->request->getPost('member_fullName'),
            'email' => $this->request->getPost('member_email'),
            'username' => $this->request->getPost('member_username'),
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
