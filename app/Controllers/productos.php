<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\producto;

class productos extends Controller{
    $producto = new producto();
    $datos['productos']= $producto->orderBy('id_producto','nombre','descripcion','cantidad')->findAll();

    return view('crear',$datos);
}