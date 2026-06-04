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
            [
                'nama' => 'Huta Ginjang Resort',
                'deskripsi' => 'Resort eksklusif di tepi Danau Toba dengan pemandangan spektakuler dan fasilitas lengkap.',
                'harga' => '500000',
                'kontak' => '+62-821-1234-5678',
                'geosite' => 'huta-ginjang',
                'status' => true,
            ],
            [
                'nama' => 'Penginapan Tradisional Batak',
                'deskripsi' => 'Penginapan dengan arsitektur tradisional Batak yang autentik dan nyaman untuk keluarga.',
                'harga' => '250000',
                'kontak' => '+62-821-8765-4321',
                'geosite' => 'huta-ginjang',
                'status' => true,
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
