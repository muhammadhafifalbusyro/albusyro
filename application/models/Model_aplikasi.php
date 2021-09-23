<?php

class Model_aplikasi extends CI_Model
{
    public function get_data_aplikasi()
    {
        $data = [
            [
                "id" => 0,
                "nama" => "To Do List",
                "jenis" => "aplikasi",
                "isi" => "To Do List adalah aplikasi yang digunakan untuk membuat list harian",
                "imgUrl" => base_url('assets/images/works/img1.png'),
                "link" => "https://play.google.com/store/apps/details?id=com.createlistapp"
            ],
            [
                "id" => 1,
                "nama" => "BMI Analytics",
                "jenis" => "aplikasi",
                "isi" => "BMI Analytics adalah aplikasi yang digunakan untuk memeriksa index massa tubuh seseorang",
                "imgUrl" => base_url('assets/images/works/img2.png'),
                "link" => "https://play.google.com/store/apps/details?id=com.bmianalytics"
            ],
            [
                "id" => 2,
                "nama" => "Beta Barcode Scanner",
                "jenis" => "aplikasi",
                "isi" => "Beta Barcode Scanner adalah aplikasi yang digunakan untuk menscann barcode/qr code pada suatu produk",
                "imgUrl" => base_url('assets/images/works/img3.png'),
                "link" => "https://play.google.com/store/apps/details?id=com.pondokit.betabarcodescanner"
            ],
            [
                "id" => 3,
                "nama" => "Adz Dzikru",
                "jenis" => "aplikasi",
                "isi" => "Adz Dzikru adalah aplikasi bacaan dzikir pagi dan petang",
                "imgUrl" => base_url('assets/images/works/img4.png'),
                "link" => "https://play.google.com/store/apps/details?id=com.adzdzikru"
            ],
            [
                "id" => 4,
                "nama" => "Alpha Browser",
                "jenis" => "aplikasi",
                "isi" => "Alpha Browser adalah aplikasi search engine",
                "imgUrl" => base_url('assets/images/works/img5.png'),
                "link" => "https://play.google.com/store/apps/details?id=com.alphabrowser"
            ],
            [
                "id" => 5,
                "nama" => "Alpha Calculator",
                "jenis" => "aplikasi",
                "isi" => "Alpha Calculator adalah aplikasi kalkulator",
                "imgUrl" => base_url('assets/images/works/img6.png'),
                "link" => "https://play.google.com/store/apps/details?id=com.alphacalculator"
            ],
            [
                "id" => 6,
                "nama" => "Pondok Programmer Academy",
                "jenis" => "website aplikasi",
                "isi" => "Pondok Programmer Academy adalah aplikasi kontroling pendidikan Pondok Programmer",
                "imgUrl" => base_url('assets/images/works/img7.png'),
                "link" => "https://pendidikan.pondokprogrammer.com/masuk"
            ],
            [
                "id" => 7,
                "nama" => "DEPPUTI",
                "jenis" => "aplikasi website",
                "isi" => "DEPPUTI adalah aplikasi sistem informasi desa",
                "imgUrl" => base_url('assets/images/works/img8.png'),
                "link" => "https://pontolo.istudios.id/"
            ],
            [
                "id" => 8,
                "nama" => "SI Pena",
                "jenis" => "aplikasi",
                "isi" => "SI Pena adalah aplikasi sistem informasi pendidikan anak",
                "imgUrl" => base_url('assets/images/works/img9.png'),
                "link" => ""
            ],
            [
                "id" => 9,
                "nama" => "Unity Wallet",
                "jenis" => "website aplikasi",
                "isi" => "Unity Wallet adalah aplikasi wallet",
                "imgUrl" => base_url('assets/images/works/img10.png'),
                "link" => "https://my.unity.cash/welcome"
            ],
            [
                "id" => 10,
                "nama" => "SSJ",
                "jenis" => "website",
                "isi" => "SSJ (Sistem Seleksi Jurusan) adalah website untuk seleksi jurusan di Pondok Programmer",
                "imgUrl" => base_url('assets/images/works/img12.png'),
                "link" => "https://ssjpondokprogrammer.000webhostapp.com/"
            ],
            [
                "id" => 11,
                "nama" => "Al Busyro",
                "jenis" => "website",
                "isi" => "Al Busyro (albusyro.com) adalah website pribadi saya",
                "imgUrl" => base_url('assets/images/works/img13.png'),
                "link" => "https://albusyro.com/"
            ],

        ];
        return $data;
    }
}
