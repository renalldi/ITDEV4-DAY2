<?php
require_once __DIR__ . '/../core/controller.php';
require_once __DIR__ . '/../models/Product.php';

class HomeController extends Controller
{
    public function index()
    {
        $products = new Product();
        $data = $products->limit(2);

        return $this->view('home/index', [
            'products' => $data,
        ]);
    }
}
