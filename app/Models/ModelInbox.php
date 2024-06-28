<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInbox extends Model
{
    protected $table = 'inbox';
    protected $primaryKey = 'inbox_id';
    protected $allowedFields = ['email', 'name', 'pesan', 'subject'];

    function cari($katakunci)
    {
        $builder = $this->table("inbox");
        $arr_katakunci = explode(" ", $katakunci);
        foreach ($arr_katakunci as $keyword) {
            $builder->orLike('email', $keyword);
            $builder->orLike('pesan', $keyword);
            $builder->orLike('name', $keyword);
            $builder->orLike('subject', $keyword);
        }
        return $builder;
    }
}
