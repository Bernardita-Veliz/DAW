<?php namespace App\Models;

use CodeIgniter\Model;

class InventarioModel extends Model{
    public function listadoproducto(){
        $id_producto = $this->db->query("SELECT * FROM t_productos");
        return $id_producto->getResult();
    }

    
}