<?php

namespace App\Controllers;

use App\Models\ModelUsers;

class login extends BaseController
{
    protected $model;

    function __construct()
    {
        $this->model = new ModelUsers();
    }

    public function index()
    {
        $login = $this->request->getPost('login');
        $err = null; // Inisialisasi variabel error

        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if (empty($member_username) || empty($member_password)) {
                $err = "Silahkan masukan username dan password";
            } else {
                // Cari user berdasarkan username
                $dataUser = $this->model->where('username', $member_username)->first();

                // Cek apakah data user ditemukan
                if (!$dataUser) {
                    $err = "Username tidak ditemukan";
                } else {
                    // Verifikasi password
                    if (!password_verify($member_password, $dataUser['password'])) {
                        $err = "Password salah";
                    }
                }

                // Jika tidak ada error, buat sesi dan redirect ke product-list
                if (empty($err)) {
                    $dataSesi = [
                        'user_id' => $dataUser['user_id']
                    ];
                    session()->set($dataSesi);
                    return redirect()->to(base_url());
                }
            }

            // Set flashdata untuk error dan username
            if ($err) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url('login'));
            }
        }

        return view('login_view');
    }
}
