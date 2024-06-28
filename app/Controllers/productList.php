<?php

namespace App\Controllers;

use App\Models\ModelItems;

class ProductList extends BaseController
{
    protected $model;

    function __construct()
    {
        $this->model = new ModelItems();
    }

    public function repairIndex(): string
    {
        // Ambil data dari model dan urutkan berdasarkan 'item_id' secara descending
        $data['dataItem'] = $this->model->where('category', 'Repair')->orderBy('item_id', 'desc')->findAll();

        // Tampilkan view dengan data yang telah diambil
        return view('productList_view', $data);
    }

    public function repaintIndex(): string
    {
        // Ambil data dari model dan urutkan berdasarkan 'item_id' secara descending
        $data['dataItem'] = $this->model->where('category', 'Repaint')->orderBy('item_id', 'desc')->findAll();

        // Tampilkan view dengan data yang telah diambil
        return view('productList_view', $data);
    }

    public function cleaningIndex(): string
    {
        // Ambil data dari model dan urutkan berdasarkan 'item_id' secara descending
        $data['dataItem'] = $this->model->where('category', 'Cleaning')->orderBy('item_id', 'desc')->findAll();

        // Tampilkan view dengan data yang telah diambil
        return view('productList_view', $data);
    }
    public function index(): string
    {
        // Ambil data dari model dan urutkan berdasarkan 'item_id' secara descending
        $data['dataItem'] = $this->model->orderBy('item_id', 'desc')->findAll();

        
        // Tampilkan view dengan data yang telah diambil
        return view('productList_view', $data);
    }
}
