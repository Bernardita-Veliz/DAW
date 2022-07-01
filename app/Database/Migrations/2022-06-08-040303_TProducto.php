<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TProducto extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_producto'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'descripcion'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'cantidad'       => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                        ],
                ]);
                $this->forge->addKey('id_producto', true);
                $this->forge->createTable('t_productos');
        }

        public function down()
        {
                $this->forge->dropTable('t_productos');
        }
}

