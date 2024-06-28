<?php

namespace App\Controllers;

use App\Models\ModelOrders;
use App\Models\ModelItems;

class historyOrders extends BaseController
{
    protected $orderModel;
    protected $itemModel;

    function __construct()
    {
        $this->orderModel = new ModelOrders();
        $this->itemModel = new ModelItems();
    }
    public function edit($id)
    {
        return json_encode($this->orderModel->find($id));
    }

    public function simpan()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'user_id' => [
                'label' => 'User ID',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'item_id' => [
                'label' => 'Item ID',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'status' => [
                'label' => 'Status',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'payment_proof_path' => [
                'label' => 'Image',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'total_amount' => [
                'label' => 'Total Amount',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka'
                ]
            ],
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {
            $order_id = $this->request->getPost('order_id');
            $item_id = $this->request->getPost('item_id');
            $user_id = $this->request->getPost('user_id');
            $status = $this->request->getPost('status');
            $total_amount = $this->request->getPost('total_amount');
            $payment_proof_path = $this->request->getPost('payment_proof_path');

            $data = [
                'order_id' => $order_id,
                'item_id' => $item_id,
                'user_id' => $user_id,
                'status' => "In Progress",
                'total_amount' => $total_amount,
                'payment_proof_path' => $payment_proof_path
            ];

            $this->orderModel->save($data);

            $hasil['sukses'] = "Berhasil memasukkan data";
            $hasil['error'] = false;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }

        return json_encode($hasil);
    }

    public function index(): string
    {
        // Ambil data berdasarkan 'item_id'
        // Join antara tabel orders dan items berdasarkan item_id
        $data['dataOrders'] = $this->orderModel
            ->select('orders.*, laundry_items.item_name, laundry_items.description, laundry_items.price')
            ->join('laundry_items', 'orders.item_id = laundry_items.item_id')
            ->where('orders.user_id', session()->get('user_id'))
            ->orderBy('orders.order_date', 'DESC')
            ->findAll();

        // Tampilkan view dengan data yang telah diambil
        return view('historyOrder_view', $data);
    }
}
