<?php

class Model_brand extends CI_Model
{
    public function get_data_brand()
    {
        $data = [
            [
                "id" => 0,
                "nama" => "ALBUSYRO CELLULAR",
                "jenis" => "aplikasi",
                "isi" => "Konter pulsa",
                "imgUrl" => base_url('assets/images/brand/albusyrocellular.png'),
                "link" => ""
            ],
            [
                "id" => 1,
                "nama" => "ALBUSYRO ACADEMY",
                "jenis" => "aplikasi",
                "isi" => "Pembelajaran digital",
                "imgUrl" => base_url('assets/images/brand/albusyroacademy.png'),
                "link" => ""
            ],
            [
                "id" => 2,
                "nama" => "ALBUSYRO STORE",
                "jenis" => "aplikasi",
                "isi" => "Ecommerce",
                "imgUrl" => base_url('assets/images/brand/albusyrostore.png'),
                "link" => ""
            ],
            [
                "id" => 3,
                "nama" => "ALBUSYRO LIBRARY",
                "jenis" => "aplikasi",
                "isi" => "Perpustakaan digital",
                "imgUrl" => base_url('assets/images/brand/albusyrolibrary.png'),
                "link" => ""
            ],
            [
                "id" => 4,
                "nama" => "ALBUSYRO TV",
                "jenis" => "aplikasi",
                "isi" => "Channel youtube",
                "imgUrl" => base_url('assets/images/brand/albusyrotv.png'),
                "link" => ""
            ], [
                "id" => 5,
                "nama" => "ALBUSYRO OTOMOTIF",
                "jenis" => "aplikasi",
                "isi" => "Otomotif",
                "imgUrl" => base_url('assets/images/brand/albusyrootomotif.png'),
                "link" => ""
            ],
            [
                "id" => 6,
                "nama" => "ALBUSYRO RESTO",
                "jenis" => "aplikasi",
                "isi" => "Restaurant",
                "imgUrl" => base_url('assets/images/brand/albusyroresto.png'),
                "link" => ""
            ],


        ];
        return $data;
    }
}
