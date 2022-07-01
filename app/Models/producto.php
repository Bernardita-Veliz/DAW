<?php namespace App\Models;
use CodeIgniter\Model;

class producto extends Model{
    protected $table  = 't_productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFilds= [
        'nombre',
        'Código',
        'descripcion',
        'cantidad',
    ];

    public function add($dato){
        return $this->save($dato);
    }


}


?>