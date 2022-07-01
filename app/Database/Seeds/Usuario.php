<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario = 'admin';
        $password = password_hash("123", PASSWORD_DEFAULT);
        $type = 'admin';

        $data = [
                       'usuario'  => $usuario,
                       'password' => $password,
                       'type'     => $type
        ];
        $this->db->table('t_usuario')->insert($data);
    }

    public function run_usuario()
    {
        $usuario = '';
        $password = password_hash("", PASSWORD_DEFAULT);
        $type = '';

        $data = [
                       'usuario'  => $usuario,
                       'password' => $password,
                       'type'     => $type
        ];
        $this->db->table('t_usuario')->insert($data);
    }
}
