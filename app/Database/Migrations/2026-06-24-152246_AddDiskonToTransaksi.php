<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDiskonToTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('transaction', [
            'diskon' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'    => 0.00,
                'null'       => true,
                'after'      => 'total_harga' 
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('transaction', 'diskon');
    }
}