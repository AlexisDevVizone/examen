<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use CodeIgniter\Controller;

class Productos extends Controller
{
    public function index()
    {
        $model = new ProductoModel();
        $data['productos'] = $model->get_all_products();
        return view('productos/index', $data);
    }

    public function crear()
    {
        return view('productos/crear');
    }

    public function guardar()
    {
        $model = new ProductoModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'cantidad' => $this->request->getPost('cantidad'),
        ];
        $model->create_product($data);
        return redirect()->to('/productos');
    }

    public function editar($id)
    {
        $model = new ProductoModel();
        $data['producto'] = $model->get_product_by_id($id);
        return view('productos/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new ProductoModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'cantidad' => $this->request->getPost('cantidad'),
        ];
        $model->update_product($id, $data);
        return redirect()->to('/productos');
    }

    public function eliminar($id)
    {
        $model = new ProductoModel();
        $model->delete_product($id);
        return redirect()->to('/productos');
    }
}
