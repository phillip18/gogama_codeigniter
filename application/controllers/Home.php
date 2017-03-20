<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->cache(1440);
	}
	
	public function index()
	{
		$data['title'] = 'Venda Aprovada!';
		$data['description'] = 'Conteúdo, dicas e novidades sobre e-commerce e comércio eletrônico. Tudo para aumentar suas vendas de maneira segura e prática!';
		$this->load->view('home', $data);
	}
}
