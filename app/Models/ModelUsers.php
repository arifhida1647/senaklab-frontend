<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model
{
    protected $table = "users";
    protected $primaryKey = "user_id";
    protected $allowedFields = ['username', 'password', 'full_name', 'email', 'phone_number', 'address','state','city','street','zip_code'];

    function cari($katakunci)
    {
        $builder = $this->table("users");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('username', $arr_katakunci[$x]);
            $builder->orLike('full_name', $arr_katakunci[$x]);
            $builder->orLike('email', $arr_katakunci[$x]);
            $builder->orLike('phone_number', $arr_katakunci[$x]);
            $builder->orLike('address', $arr_katakunci[$x]);
        }
        return $builder;
    }

    public function isUniqueUsername($username)
    {
        return $this->where('username', $username)->countAllResults() === 0;
    }

    public function isUniqueEmail($email)
    {
        return $this->where('email', $email)->countAllResults() === 0;
    }
}
