<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Senam di pagi hari',
            'description'    => 'Diet pemula untuk Ramadhan',
            'finished_at'    => "2022-04-06-11:00",
        ];

        // Simple Queries
        $this->db->table('todo')->insert($data);
        
        $data = [
            'title' => 'Bootcamp Copywriting',
            'description'    => 'Menyicil skill untuk karir digital marketing',
            'finished_at'    => "2022-04-06-11:00",
        ];
        // Using Query Builder
        $this->db->table('todo')->insert($data);
    }
}