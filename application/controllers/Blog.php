<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_blog");
    }
    public function index()
    {
        if (isset($_GET['halaman']) && !is_numeric($_GET['halaman'])) {
            return $this->load->view('pagenotfoundedit');
        } else {
            $data['blogs'] = array_reverse($this->model_blog->get_data_blog());

            // pagination 
            $data["jumlah_data_per_halaman"] = 6;
            $data['jumlah_data'] = count($data['blogs']);

            // mencari jumlah halaman
            $data["jumlah_halaman"] = ceil($data['jumlah_data'] / $data["jumlah_data_per_halaman"]);

            $data["halaman_aktif"] = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
            $data["awal_data"] = ($data["jumlah_data_per_halaman"] * $data["halaman_aktif"]) - $data["jumlah_data_per_halaman"];
            // echo !is_numeric($_GET["halaman"]);

            if (isset($_GET["halaman"])) {
                if ($_GET["halaman"] < 1 || $_GET["halaman"] > $data["jumlah_halaman"]) {
                    return  $this->load->view('pagenotfoundedit');
                }
            }


            $this->load->view('blog', $data);
        }
    }
    public function detail($p = null)
    {
        $data["blogs"] = $this->model_blog->get_data_blog();
        $data['id'] = $p;
        $avail = 0;
        $new_data = [];
        foreach ($data['blogs'] as $blog) {
            if ($blog["id"] == $p) {
                $avail += 1;
                $new_data = [
                    "id" => $blog["id"],
                    "img_url" => $blog["img_url"],
                    "date" => $blog["date"],
                    "judul" => $blog["judul"],
                    "isi" => $blog["isi"]
                ];
            }
        }
        if ($avail > 0 && $p != null) {
            $data['new_data'] = $new_data;
            $this->load->view('blogdetail', $data);
        } else {
            $this->load->view('notfoundblog');
        }
    }
}
