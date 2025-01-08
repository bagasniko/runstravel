<?php

class PaketController extends Controller {
    public function index() {
        // Data dummy paket wisata
        $paket_wisata = [
            1 => [
                'nama' => 'Paket Hemat Bali',
                'deskripsi' => '3 Hari 2 Malam di Bali dengan akomodasi hotel bintang 3',
                'harga' => 2500000,
                'durasi' => '3 Hari 2 Malam',
                'destinasi' => 'Bali',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree_74190-7454.jpg'
            ],
            2 => [
                'nama' => 'Paket Premium Raja Ampat', 
                'deskripsi' => '5 Hari 4 Malam di Raja Ampat dengan diving dan snorkeling',
                'harga' => 8500000,
                'durasi' => '5 Hari 4 Malam',
                'destinasi' => 'Raja Ampat',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-paradise-island-with-beach-sea_74190-1023.jpg'
            ],
            3 => [
                'nama' => 'Paket Wisata Budaya Yogyakarta',
                'deskripsi' => '4 Hari 3 Malam mengunjungi situs bersejarah di Yogyakarta',
                'harga' => 3000000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Yogyakarta',
                'gambar' => 'https://img.freepik.com/free-photo/sunrise-borobudur-temple-yogyakarta-indonesia_335224-367.jpg'
            ],
            4 => [
                'nama' => 'Paket Petualangan Bromo',
                'deskripsi' => '2 Hari 1 Malam menikmati sunrise dan hiking di Gunung Bromo',
                'harga' => 1500000,
                'durasi' => '2 Hari 1 Malam',
                'destinasi' => 'Gunung Bromo',
                'gambar' => 'https://img.freepik.com/free-photo/bromo-volcano-mountain-sunrise-east-java-indonesia_335224-357.jpg'
            ],
            5 => [
                'nama' => 'Paket Eksplorasi Komodo',
                'deskripsi' => '4 Hari 3 Malam menjelajahi Pulau Komodo dan sekitarnya',
                'harga' => 6000000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Pulau Komodo',
                'gambar' => 'https://img.freepik.com/free-photo/komodo-dragon-komodo-national-park-indonesia_335224-351.jpg'
            ],
            6 => [
                'nama' => 'Paket Wisata Danau Toba',
                'deskripsi' => '3 Hari 2 Malam menikmati keindahan Danau Toba',
                'harga' => 2800000,
                'durasi' => '3 Hari 2 Malam',
                'destinasi' => 'Danau Toba',
                'gambar' => 'https://img.freepik.com/free-photo/lake-toba-medan-indonesia_335224-378.jpg'
            ],
            7 => [
                'nama' => 'Paket Diving Wakatobi',
                'deskripsi' => '5 Hari 4 Malam diving di spot terbaik Wakatobi',
                'harga' => 7500000,
                'durasi' => '5 Hari 4 Malam',
                'destinasi' => 'Wakatobi',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-beach-railay-thailand_335224-1233.jpg'
            ],
            8 => [
                'nama' => 'Paket Eksotis Derawan',
                'deskripsi' => '4 Hari 3 Malam menjelajahi keindahan Kepulauan Derawan',
                'harga' => 5500000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Kepulauan Derawan',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-shot-traditional-wooden-houses-water-indonesia_181624-19516.jpg'
            ],
            9 => [
                'nama' => 'Paket Pesona Belitung',
                'deskripsi' => '3 Hari 2 Malam mengunjungi pantai-pantai eksotis Belitung',
                'harga' => 3500000,
                'durasi' => '3 Hari 2 Malam',
                'destinasi' => 'Pulau Belitung',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-tropical-beach_74190-6772.jpg'
            ],
            10 => [
                'nama' => 'Paket Wisata Toraja',
                'deskripsi' => '4 Hari 3 Malam mengenal budaya unik Tana Toraja',
                'harga' => 4000000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Tana Toraja',
                'gambar' => 'https://img.freepik.com/free-photo/traditional-village-kete-kesu-tana-toraja-indonesia_335224-344.jpg'
            ]
        ];

        $this->view('paket', [
            'paket_wisata' => $paket_wisata
        ]);
    }

    public function detail($id) {
        // Data dummy paket wisata (sama seperti di atas)
        $paket_wisata = [
            1 => [
                'nama' => 'Paket Hemat Bali',
                'deskripsi' => '3 Hari 2 Malam di Bali dengan akomodasi hotel bintang 3',
                'harga' => 2500000,
                'durasi' => '3 Hari 2 Malam',
                'destinasi' => 'Bali',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree_74190-7454.jpg'
            ],
            2 => [
                'nama' => 'Paket Premium Raja Ampat',
                'deskripsi' => '5 Hari 4 Malam di Raja Ampat dengan diving dan snorkeling', 
                'harga' => 8500000,
                'durasi' => '5 Hari 4 Malam',
                'destinasi' => 'Raja Ampat',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-paradise-island-with-beach-sea_74190-1023.jpg'
            ],
            3 => [
                'nama' => 'Paket Wisata Budaya Yogyakarta',
                'deskripsi' => '4 Hari 3 Malam mengunjungi situs bersejarah di Yogyakarta',
                'harga' => 3000000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Yogyakarta',
                'gambar' => 'https://img.freepik.com/free-photo/sunrise-borobudur-temple-yogyakarta-indonesia_335224-367.jpg'
            ],
            4 => [
                'nama' => 'Paket Petualangan Bromo',
                'deskripsi' => '2 Hari 1 Malam menikmati sunrise dan hiking di Gunung Bromo',
                'harga' => 1500000,
                'durasi' => '2 Hari 1 Malam',
                'destinasi' => 'Gunung Bromo',
                'gambar' => 'https://img.freepik.com/free-photo/bromo-volcano-mountain-sunrise-east-java-indonesia_335224-357.jpg'
            ],
            5 => [
                'nama' => 'Paket Eksplorasi Komodo',
                'deskripsi' => '4 Hari 3 Malam menjelajahi Pulau Komodo dan sekitarnya',
                'harga' => 6000000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Pulau Komodo',
                'gambar' => 'https://img.freepik.com/free-photo/komodo-dragon-komodo-national-park-indonesia_335224-351.jpg'
            ],
            6 => [
                'nama' => 'Paket Wisata Danau Toba',
                'deskripsi' => '3 Hari 2 Malam menikmati keindahan Danau Toba',
                'harga' => 2800000,
                'durasi' => '3 Hari 2 Malam',
                'destinasi' => 'Danau Toba',
                'gambar' => 'https://img.freepik.com/free-photo/lake-toba-medan-indonesia_335224-378.jpg'
            ],
            7 => [
                'nama' => 'Paket Diving Wakatobi',
                'deskripsi' => '5 Hari 4 Malam diving di spot terbaik Wakatobi',
                'harga' => 7500000,
                'durasi' => '5 Hari 4 Malam',
                'destinasi' => 'Wakatobi',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-beach-railay-thailand_335224-1233.jpg'
            ],
            8 => [
                'nama' => 'Paket Eksotis Derawan',
                'deskripsi' => '4 Hari 3 Malam menjelajahi keindahan Kepulauan Derawan',
                'harga' => 5500000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Kepulauan Derawan',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-shot-traditional-wooden-houses-water-indonesia_181624-19516.jpg'
            ],
            9 => [
                'nama' => 'Paket Pesona Belitung',
                'deskripsi' => '3 Hari 2 Malam mengunjungi pantai-pantai eksotis Belitung',
                'harga' => 3500000,
                'durasi' => '3 Hari 2 Malam',
                'destinasi' => 'Pulau Belitung',
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-tropical-beach_74190-6772.jpg'
            ],
            10 => [
                'nama' => 'Paket Wisata Toraja',
                'deskripsi' => '4 Hari 3 Malam mengenal budaya unik Tana Toraja',
                'harga' => 4000000,
                'durasi' => '4 Hari 3 Malam',
                'destinasi' => 'Tana Toraja',
                'gambar' => 'https://img.freepik.com/free-photo/traditional-village-kete-kesu-tana-toraja-indonesia_335224-344.jpg'
            ]
        ];

        // Cek apakah ID paket ada
        if(!isset($paket_wisata[$id])) {
            header('Location: /travel-website/404');
            exit;
        }

        $this->view('paket_detail', [
            'paket' => $paket_wisata[$id]
        ]);
    }
}
?>
