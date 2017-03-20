<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->cache(1440);
	}
	
	public function index()
	{
		$data['title'] = 'Venda Aprovada! - O que é um gateway de pagamento?';
		$data['description'] = 'Como acontece o processo de pagamento online por um gateway de pagamento em um site de e-commerce e como ele pode ajudar a sua loja.';
		$this->load->view('post_1', $data);
	}
}
