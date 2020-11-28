<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hotel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_hotel'		=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'auto_increment'	=> true,
			],
			'nama_hotel'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '255',
			],
			'alamat_hotel'	=> [
				'type'				=> 'VARCHAR',
				'constraint'     	=> '255',
			],
			'created_at'	=> [
				'type'			 	=> 'DATETIME',
				'null'				=> TRUE,
			],
			'updated_at'	=> [
				'type'			 	=> 'DATETIME',
				'null'				=> TRUE,
			]
		]);
		$this->forge->addKey('id_hotel', true);
		$this->forge->createTable('Hotel');
	}

	public function down()
	{
		$this->forge->dropTable('Hotel');
	}
}
