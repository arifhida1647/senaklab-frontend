<?php

namespace App\Controllers;

use App\Models\ModelUsers;

class Profiles extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ModelUsers();
    }

    public function index(): string
    {
        // Ambil user_id dari session
        $user_id = session()->get('user_id');

        // Ambil data pengguna dari model berdasarkan user_id
        $userData = $this->model->find($user_id);

        // Cek apakah data pengguna ditemukan
        if (!$userData) {
            // Jika tidak ditemukan, arahkan ke halaman error atau tampilkan pesan error
            return redirect()->to('/login')->with('error','User not found');
        }

        // Kirim data pengguna ke view
        return view('profiles_view', ['userData' => $userData]);
    }

    public function update()
    {
        // Ambil user_id dari session
        $user_id = session()->get('user_id');

        // Ambil data dari form
        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'phone_number' => $this->request->getPost('phone_number'),
            'street' => $this->request->getPost('street'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'zip_code' => $this->request->getPost('zip_code')
        ];

        // Update data pengguna
        $this->model->update($user_id, $data);

        // Redirect kembali ke halaman profile dengan pesan sukses
        return redirect()->to('/profiles')->with('success', 'Profile updated successfully');
    }
}
