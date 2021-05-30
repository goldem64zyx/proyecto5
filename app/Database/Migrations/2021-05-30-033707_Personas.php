<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Personas extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '200',
                        ],
						'a_paterno'       => [
							'type'       => 'VARCHAR',
							'constraint' => '200',
						],
						'a_materno'       => [
							'type'       => 'VARCHAR',
							'constraint' => '200',
						],
                        
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('persona');
        }

        public function down()
        {
                $this->forge->dropTable('persona');
        }
}
