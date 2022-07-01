<?php namespace App\Models;
   use CodeIgniter\Model;

   class Usuarios extends Model{
    protected $table = 't_usuario';
    protected $primaryKey = 'id_usuario';

    protected $allowedFields= [
        'usuario',
        'password',
        'type',
    ];

       public function obtenerUsuario($data) {
           $Usuario = $this->db->table('t_usuario');
           $Usuario->where($data);
           return $Usuario->get()->getResultArray();
    }


}