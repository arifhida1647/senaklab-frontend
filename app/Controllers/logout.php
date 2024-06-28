<?php

namespace App\Controllers;

use App\Models\ModelItems;

class logout extends BaseController
{
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
