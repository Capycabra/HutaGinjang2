<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DestinasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('destinasis')->truncate();

        $destinasi = [
            // ─── KATEGORI ALAM ────────────────────────────────────────────
            [
                'nama'        => 'Goa Marlakkop',
                'lokasi'      => 'Tomok, Samosir',
                'deskripsi'   => 'Goa Marlakkop adalah goa batu alam yang tersembunyi di balik pepohonan tropis Pulau Samosir. Di dalamnya terdapat stalaktit dan stalagmit yang terbentuk selama ribuan tahun, dengan lorong-lorong alami yang menakjubkan. Goa ini menjadi salah satu fenomena geologi penting di Geosite Danau Toba dan menarik perhatian para peneliti serta wisatawan petualang.',
                'gambar_utama'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Goa_Belanda_Bandung.jpg/1280px-Goa_Belanda_Bandung.jpg',
                'tags'        => json_encode(['geologi', 'petualangan', 'alam']),
                'kategori'    => 'Alam',
                'status'      => true,
            ],
            [
                'nama'        => 'Air Terjun Situmurun',
                'lokasi'      => 'Lumban Julu, Toba',
                'deskripsi'   => 'Air Terjun Situmurun atau dikenal juga sebagai Air Terjun Binangalom adalah air terjun yang langsung jatuh ke perairan Danau Toba. Dengan ketinggian sekitar 50 meter, air terjun ini menjadi salah satu pemandangan paling dramatis di kawasan Geopark Kaldera Toba. Pengunjung dapat menikmati keindahannya dari perahu atau berenang di kolam alami di bawahnya.',
                'gambar_utama'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Sipiso-piso_waterfall.jpg/800px-Sipiso-piso_waterfall.jpg',
                'tags'        => json_encode(['air terjun', 'danau toba', 'alam']),
                'kategori'    => 'Alam',
                'status'      => true,
            ],
            [
                'nama'        => 'Batu Gantung',
                'lokasi'      => 'Parapat, Simalungun',
                'deskripsi'   => 'Batu Gantung adalah fenomena geologi unik berupa batu besar yang seolah-olah menggantung di tebing curam di tepi Danau Toba. Legenda setempat menceritakan batu ini sebagai jelmaan seorang gadis Batak. Dari kapal yang melintas di Danau Toba, Batu Gantung terlihat sangat dramatis dengan latar belakang tebing hijau dan air danau biru jernih.',
                'gambar_utama'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Lake_Toba_from_above.jpg/1280px-Lake_Toba_from_above.jpg',
                'tags'        => json_encode(['geologi', 'legenda', 'danau toba']),
                'kategori'    => 'Alam',
                'status'      => true,
            ],

            // ─── KATEGORI BUATAN ──────────────────────────────────────────
           [
               'nama'        => 'Paralayang Huta Ginjang',
               'lokasi'      => 'Huta Ginjang, Tapanuli Utara',
               'deskripsi'   => 'Paralayang Huta Ginjang adalah tempat wisata paralayang yang terletak di tepi Danau Toba. Dari atas bukit Huta Ginjang, pengunjung bisa menikmati pemandangan Danau Toba yang indah dari ketinggian. Tempat ini cocok untuk wisatawan yang suka petualangan dan sering dijadikan lokasi kejuaraan paralayang.',
               'gambar_utama'=> 'https://heppitrip.com/wp-content/uploads/Bukit-Paralayang-Watugupit.jpg',
               'tags'        => json_encode(['paralayang', 'petualangan', 'alam']),
               'kategori'    => 'Buatan', 
               'status'      => true,
            ],
            [
               'nama'        => 'Bukit Doa Huta Ginjang',
               'lokasi'      => 'Huta Ginjang, Tapanuli Utara',
               'deskripsi'   => 'Bukit Doa Huta Ginjang adalah tempat wisata rohani yang terletak di ketinggian dengan pemandangan Danau Toba yang indah. Di sini terdapat patung Yesus dan area doa yang sering dikunjungi wisatawan untuk berdoa sambil menikmati keindahan alam. Tempat ini cocok untuk wisatawan yang ingin mencari ketenangan dan menikmati panorama Danau Toba dari atas bukit.',
               'gambar_utama'=> 'https://calderatobageopark.org/wp-content/uploads/2025/06/DJI_0476-scaled.jpg',
               'tags'        => json_encode(['rohani', 'panorama', 'bukit']),
               'kategori'    => 'Buatan',
               'status'      => true,
    ],
            [
               'nama'        => 'Spot Foto Instagramable Huta Ginjang',
               'lokasi'      => 'Huta Ginjang, Tapanuli Utara',
               'deskripsi'   => 'Spot Foto Instagramable Huta Ginjang adalah tempat wisata yang menawarkan berbagai spot foto menarik dengan latar belakang Danau Toba yang indah. Tempat ini sangat cocok untuk wisatawan yang suka berfoto dengan pemandangan alam yang memukau. Banyak pengunjung datang untuk mengabadikan momen di sini karena viewnya yang bagus dan cocok untuk konten media sosial.',
               'gambar_utama'=> 'https://www.switour.com/wp-content/uploads/2022/08/Huta-Ginjang-4.jpg',
               'tags'        => json_encode(['foto', 'instagram', 'panorama']),
               'kategori'    => 'Buatan',
               'status'      => true,
          ],
            [
               'nama'        => 'Tugu Aritonang',
               'lokasi'      => 'Muara, Tapanuli Utara',
               'deskripsi'   => 'Tugu dengan ketinggian 33 meter ini, diresmikan pada tanggal 11-12 Maret 2014. Maksud dibangun Monumen Aritonang ini untuk mengingatkan generasi saat ini tentang nilai-nilai yang sudah diwariskan dari para leluhur. Para leluhur sangat menghormati keseimbangan hidup dan nilai-nilai kehidupan yang dipegang teguh sebagai pedoman dalam menjalani hidup. Selain sebagai pengingat, Monumen Artitonang dibangun untuk menghormati para terdahulu..',
               'gambar_utama'=> 'https://ik.imagekit.io/tvlk/blog/2020/03/wisata-di-tapanuli-utara-7-Wikipedia.jpg?tr=dpr-2,w-675',
               'tags'        => json_encode(['foto', 'instagram', 'panorama']),
               'kategori'    => 'Buatan',
               'status'      => true,
          ],
                      [
               'nama'        => 'Tugu Sinaga',
               'lokasi'      => 'Muara, Tapanuli Utara',
               'deskripsi'   => 'Tugu dengan ketinggian 33 meter ini, diresmikan pada tanggal 11-12 Maret 2014. Maksud dibangun Monumen Aritonang ini untuk mengingatkan generasi saat ini tentang nilai-nilai yang sudah diwariskan dari para leluhur. Para leluhur sangat menghormati keseimbangan hidup dan nilai-nilai kehidupan yang dipegang teguh sebagai pedoman dalam menjalani hidup. Selain sebagai pengingat, Monumen Artitonang dibangun untuk menghormati para terdahulu..',
               'gambar_utama'=> 'https://ik.imagekit.io/tvlk/blog/2020/03/wisata-di-tapanuli-utara-7-Wikipedia.jpg?tr=dpr-2,w-675',
               'tags'        => json_encode(['foto', 'instagram', 'panorama']),
               'kategori'    => 'Buatan',
               'status'      => true,
          ],

            // ─── KATEGORI BUDAYA ──────────────────────────────────────────
            [
                'nama'        => 'Makam Raja Sidabutar',
                'lokasi'      => 'Tomok, Samosir',
                'deskripsi'   => 'Makam Raja Sidabutar adalah kompleks pemakaman raja-raja Batak yang berusia lebih dari 500 tahun di Desa Tomok. Makam ini terbuat dari batu monolit besar yang diukir dengan ornamen Batak yang indah. Di sekitar makam terdapat pohon-pohon besar yang berusia ratusan tahun, menciptakan suasana sakral dan penuh sejarah yang menjadi warisan budaya tak ternilai.',
                'gambar_utama'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Tomok_king_sarcophagus.jpg/800px-Tomok_king_sarcophagus.jpg',
                'tags'        => json_encode(['sejarah', 'kerajaan', 'warisan budaya']),
                'kategori'    => 'Budaya',
                'status'      => true,
            ],
            [
                'nama'        => 'Museum Huta Bolon Simanindo',
                'lokasi'      => 'Simanindo, Samosir',
                'deskripsi'   => 'Museum Huta Bolon Simanindo adalah museum rumah adat Batak yang menyimpan koleksi benda-benda bersejarah dan artefak budaya Batak Toba. Di sini pengunjung dapat menyaksikan pertunjukan tari tradisional Tor-Tor dan musik gondang yang autentik setiap harinya. Arsitektur rumah adat Batak yang khas dengan ukiran gorga (ornamen Batak) menjadikan museum ini destinasi wajib.',
                'gambar_utama'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Batak_traditional_house.jpg/1280px-Batak_traditional_house.jpg',
                'tags'        => json_encode(['museum', 'tor-tor', 'adat batak']),
                'kategori'    => 'Budaya',
                'status'      => true,
            ],
            [
                'nama'        => 'Desa Ambarita',
                'lokasi'      => 'Ambarita, Samosir',
                'deskripsi'   => 'Desa Ambarita terkenal dengan kompleks batu megalitik peninggalan Raja Laga Siallagan yang berusia ratusan tahun. Di sini terdapat kursi batu, meja batu, dan tempat hukuman yang digunakan dalam sistem peradilan adat Batak kuno. Selain itu, desa ini juga merupakan pusat kerajinan tenun ulos yang masih dikerjakan secara tradisional oleh masyarakat setempat.',
                'gambar_utama'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Ambarita_stone_chairs.jpg/1280px-Ambarita_stone_chairs.jpg',
                'tags'        => json_encode(['megalitik', 'ulos', 'budaya batak']),
                'kategori'    => 'Budaya',
                'status'      => true,
            ],
        ];

        foreach ($destinasi as $item) {
            $item['slug']       = Str::slug($item['nama']);
            $item['admin_id']   = 1;
            $item['created_at'] = now();
            $item['updated_at'] = now();
            DB::table('destinasis')->insert($item);
        }

        $this->command->info('✅ DestinasiSeeder: ' . count($destinasi) . ' destinasi berhasil ditambahkan.');
    }
}
