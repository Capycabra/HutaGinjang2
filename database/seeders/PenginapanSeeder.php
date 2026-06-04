<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenginapanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penginapan')->truncate();

        $data = [
            // hutaginjang
            [
             
            ],
        ];

        foreach ($data as $item) {
            $item['admin_id']   = 1;
            $item['created_at'] = now();
            $item['updated_at'] = now();
            DB::table('penginapan')->insert($item);
        }

        $this->command->info('✅ PenginapanSeeder: ' . count($data) . ' penginapan berhasil ditambahkan.');
    }
}
