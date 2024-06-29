<?php

namespace App\Controllers;

use App\Models\ModelOrders;
use App\Models\ModelUsers;
use App\Models\ModelItems;

class confirmation extends BaseController
{
    protected $orderModel;
    protected $itemModel;
    protected $userModel;

    function __construct()
    {
        $this->orderModel = new ModelOrders();
        $this->itemModel = new ModelItems();
        $this->userModel = new ModelUsers();
    }

    public function index($id): string
    {
        // Ambil data berdasarkan 'item_id'
        // Join antara tabel orders, items, dan users berdasarkan item_id dan user_id
        $data['dataOrders'] = $this->orderModel
            ->select('orders.*, laundry_items.*, users.*')
            ->join('laundry_items', 'orders.item_id = laundry_items.item_id')
            ->join('users', 'orders.user_id = users.user_id')
            ->where('orders.order_id', $id)
            ->orderBy('orders.order_date', 'DESC')
            ->findAll();

        // Tampilkan view dengan data yang telah diambil
        return view('confirmation_view', $data);
    }
    public function cancel_order()
    {
        // Dapatkan order_id dari POST request
        $order_id = $this->request->getPost('order_id');

        // Hapus order berdasarkan order_id
        $this->orderModel->where('order_id', $order_id)->delete();

        // Redirect ke halaman sebelumnya atau halaman lain
        return redirect()->to(base_url('/history-orders'));
    }
}
