<?php

namespace App\Controllers;

use App\Models\ModelItems;
use App\Models\ModelOrders;
class ProductDetail extends BaseController
{
    protected $model;
    protected $orderModel;

    function __construct()
    {
        $this->model = new ModelItems();
        $this->orderModel = new ModelOrders();
    }

    public function index($item_id): string
    {
        // Ambil data berdasarkan 'item_id'
        $data['dataItem'] = $this->model->where('item_id', $item_id)->first();

        // Tampilkan view dengan data yang telah diambil
        return view('productDetail_view', $data);
    }
    public function order()
    {
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'item_id' => $this->request->getPost('item_id'),
            'total_amount' => $this->request->getPost('total_amount')
        ];

        if ($this->orderModel->insert($data)) {
            $order_id = $this->orderModel->insertID();
            return redirect()->to('history-orders');
        } else {
            return redirect()->back()->with('error', 'Gagal melakukan pemesanan.');
        }
    }
}
