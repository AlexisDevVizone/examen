<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion', 'precio', 'cantidad'];

    public function get_all_products()
    {
        return $this->findAll();
    }

    public function get_product_by_id($id)
    {
        return $this->find($id);
    }

    public function create_product($data)
    {
        return $this->insert($data);
    }

    public function update_product($id, $data)
    {
        return $this->update($id, $data);
    }

    public function delete_product($id)
    {
        return $this->delete($id);
    }
}

