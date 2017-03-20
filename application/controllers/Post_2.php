<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->cache(1440);
	}
	
	public function index()
	{
		$data['title'] = 'Venda Aprovada! - O que é um gateway de pagamento?';
		$data['description'] = 'Dicas para melhorar o desempenho e a taxa de conversão em vendas do seu e-commerce com a concorrência alta do setor com informações, checkout e mobile.';
		$this->load->view('post_2', $data);
	}
}
