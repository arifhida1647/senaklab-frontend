<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrders extends Model
{
    protected $table = "orders";
    protected $primaryKey = "order_id";
    protected $allowedFields = ['user_id','item_id','order_date','order_address','status', 'total_amount','payment_proof_path'];

}
