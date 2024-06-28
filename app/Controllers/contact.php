<?php

namespace App\Controllers;

use App\Models\ModelInbox;

class contact extends BaseController
{
    public function index(): string
    {
        return view('contact_view');
    }

    public function sendMessage()
    {
        $session = session();

        // Load the ModelInbox model
        $inboxModel = new ModelInbox();

        // Define validation rules
        $validationRules = [
            'email' => 'required|valid_email',
            'name' => 'required',
            'message' => 'required',
            'subject' => 'required'
        ];

        // Set custom error messages
        $validationMessages = [
            'email' => [
                'required' => 'Please enter your email address.',
                'valid_email' => 'Please enter a valid email address.'
            ],
            'name' => [
                'required' => 'Please enter your name.'
            ],
            'message' => [
                'required' => 'Please enter your message.'
            ],
            'subject' => [
                'required' => 'Please enter the subject.'
            ]
        ];

        // Perform validation
        if (!$this->validate($validationRules, $validationMessages)) {
            // If validation fails, set validation errors in session flash data
            $session->setFlashdata('validation_errors', $this->validator->getErrors());

            // Redirect back to the contact form with input data
            return redirect()->back()->withInput();
        }

        // If validation passes, proceed to save data
        $data = [
            'email' => $this->request->getPost('email'),
            'name' => $this->request->getPost('name'),
            'pesan' => $this->request->getPost('message'),
            'subject' => $this->request->getPost('subject')
        ];

        // Insert data into the database
        if ($inboxModel->insert($data)) {
            // Set success message
            $session->setFlashdata('success', 'Message sent successfully.');

            // Redirect back to the contact form
            return redirect()->to('/contact');
        } else {
            // Set error message if insertion fails
            $session->setFlashdata('error', 'Failed to send message.');

            // Redirect back to the contact form with input data
            return redirect()->back()->withInput();
        }
    }


}
