<?php

class DestinationController extends Controller {

    // Tampilkan semua destinasi
    public function index() {
        $this->view('destination');
    }

    public function detail($id) {
        // Data dummy destinasi
        $destinations = [
            1 => [
                'nama' => 'Bali',
                'deskripsi' => 'Pulau dewata dengan keindahan alam dan budaya yang memukau',
                'harga' => 5000000,
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree_74190-7454.jpg'
            ],
            2 => [
                'nama' => 'Raja Ampat', 
                'deskripsi' => 'Surga bawah laut dengan keindahan terumbu karang',
                'harga' => 8500000,
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-paradise-island-with-beach-sea_74190-1023.jpg'
            ],
            3 => [
                'nama' => 'Borobudur',
                'deskripsi' => 'Candi Buddha terbesar di dunia dengan sejarah yang kaya',
                'harga' => 2500000,
                'gambar' => 'https://img.freepik.com/free-photo/sunrise-borobudur-temple-yogyakarta-indonesia_335224-367.jpg'
            ],
            4 => [
                'nama' => 'Gunung Bromo',
                'deskripsi' => 'Pesona gunung berapi aktif dengan pemandangan matahari terbit yang menakjubkan',
                'harga' => 3500000,
                'gambar' => 'https://img.freepik.com/free-photo/bromo-volcano-mountain-sunrise-east-java-indonesia_335224-357.jpg'
            ],
            5 => [
                'nama' => 'Pulau Komodo',
                'deskripsi' => 'Habitat asli komodo dengan pantai pink yang menawan',
                'harga' => 6500000,
                'gambar' => 'https://img.freepik.com/free-photo/komodo-dragon-komodo-national-park-indonesia_335224-351.jpg'
            ],
            6 => [
                'nama' => 'Danau Toba',
                'deskripsi' => 'Danau vulkanik terbesar di dunia dengan budaya Batak yang kental',
                'harga' => 4000000,
                'gambar' => 'https://img.freepik.com/free-photo/lake-toba-medan-indonesia_335224-378.jpg'
            ],
            7 => [
                'nama' => 'Wakatobi',
                'deskripsi' => 'Surga diving dengan keanekaragaman hayati laut yang menakjubkan',
                'harga' => 7500000,
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-beach-railay-thailand_335224-1233.jpg'
            ],
            8 => [
                'nama' => 'Pegunungan Jayawijaya',
                'deskripsi' => 'Puncak tertinggi di Indonesia dengan salju abadi',
                'harga' => 12000000,
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-landscape-mountain-range-covered-snow_181624-26569.jpg'
            ],
            9 => [
                'nama' => 'Kepulauan Derawan',
                'deskripsi' => 'Surga bagi pecinta snorkeling dan diving di Kalimantan Timur',
                'harga' => 6000000,
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-shot-traditional-wooden-houses-water-indonesia_181624-19516.jpg'
            ],
            10 => [
                'nama' => 'Pulau Belitung',
                'deskripsi' => 'Pantai eksotis dengan batu granit dan air yang jernih',
                'harga' => 4500000,
                'gambar' => 'https://img.freepik.com/free-photo/beautiful-tropical-beach_74190-6772.jpg'
            ]
        ];

        // Cek apakah ID destinasi ada
        if(!isset($destinations[$id])) {
            // Redirect ke halaman 404 jika tidak ditemukan
            header('Location: /travel-website/404');
            exit;
        }

        $this->view('destination_detail', [
            'destination' => $destinations[$id]
        ]);
    }
}
?>
