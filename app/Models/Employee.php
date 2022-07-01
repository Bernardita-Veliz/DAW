<?php namespace App\Models;
use CodeIgniter\Model;
// defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends Model
{
    protected $table = 't_productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFields= [
        'nombre',
        'descripcion',
        'cantidad',
    ];

    // function __construct()
    // {
    //     parent::construct();
    // }

    // public function getEmployees()
	// {
	// 	return $this->db->query("SELECT id_producto, nombre, descripcion, cantidad FROM t_productos")->result();
	// }
    // public function setEmployee(string $nombre, string $descripcion, string $cantidad)
	// {
	// 	return $this->db->query("INSERT INTO employees (nombre, descripcion, cantidad) values ({$nombre}, {$descripcion}, {$cantidad})");
	// }
}
?>