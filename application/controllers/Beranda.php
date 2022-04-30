<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
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
		$this->load->model("model_aplikasi");
		$this->load->model('model_blog');
	}
	public function index()
	{
		$app=array_reverse($this->model_aplikasi->get_data_aplikasi());
		$data["apps"] =array_splice($app, 0, 12);
		$blog = array_reverse($this->model_blog->get_data_blog());
		$data['blogs'] = array_splice($blog, 0, 3);

		$this->load->view('landingpage', $data);
	}
	public function notfound()
	{
		$this->load->view('notfoundblog');
	}
}
