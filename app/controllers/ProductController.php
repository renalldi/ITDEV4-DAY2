<?php
require_once __DIR__ . '/../core/controller.php';
require_once __DIR__ . '/../models/Product.php';

class ProductController extends Controller
{
    public function index()
    {
        $products = new Product();
        $data = $products->all();

        return $this->view('products/index', [
            'products' => $data,
        ]);
    }

    public function detail($id)
    {
        $products = new Product();
        $data = $products->find($id);

        return $this->view('products/detail', [
            'product' => $data
        ]);
    }

    public function create()
    {
        return $this->view('products/create');
    }

    public function store()
    {
        $data = $_POST;
        // var_dump($data);

        $column = ['title', 'description', 'price'];
        $value = array_values($data);

        $products = new Product();
        $data = $products->store($column, $value);

        header("Location: http://localhost/pertemuan_2/public/product");
        exit();
    }

    public function edit($id)
    {

        $products = new Product();
        $data = $products->find($id);

        return $this->view('products/edit', [
            'product' => $data
        ]);
    }

    public function update($id)
    {
        $data = $_POST;
        // var_dump($data);

        $column = ['title', 'description', 'price'];
        $value = array_values($data);

        $products = new Product();
        $data = $products->update($id,$column, $value);

        header("Location: http://localhost/pertemuan_2/public/product");
        exit();
    }

    public function delete($id)
    {
        $data = $_POST;

        $products = new Product();
        $data = $products->delete($id);

        header("Location: http://localhost/pertemuan_2/public/product");
        exit();

    }
}
