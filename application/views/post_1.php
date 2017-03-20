<?php
	$this->load->view('commons/header');
?>
	<section id="post">
	
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>O que é um gateway de pagamento?
						</h2>
						<hr>
						<img src="<?=base_url('assets/img/blog/gateway.jpg')?>" class="img-responsive img-centered" alt="Cabin">
						<p>Toda transação que acontece no mundo físico, envolvendo cartões de crédito, conta com uma máquina POS, a popular maquininha do cartão. Ela é a primeira etapa de uma transação. As informações ali inseridas vão para o Adquirente, que é a empresa responsável pelo processamento destas informações. Após esta etapa as informações ainda vão para a bandeira do cartão e para o banco emissor, responsável por autorizar ou negar a transação. Caso seja autorizada a informação percorre o caminho de volta, confirmando a compra.</p>

						<p>Agora, você deve estar se perguntando, como é realizada a transferência online, sem a utilização da máquina POS? Temos a resposta! Por um Gateway de pagamento, um software como serviço que facilitará a comunicação de informações da transação percorrendo todas etapas necessárias para a confirmação da compra. </p>

						<p>O Gateway irá realizar a transmissão das informações para o Adquirente, que irá validar transação com a bandeira e o banco emissor. Uma vez validada, como nas etapas no mundo físico, estas informações percorrem o caminho de volta e a compra é aprovada. Assim, o Gateway é o responsável por processar o pagamento no momento do check-out da loja.</p>

						<p>Desta maneira, o Gateway mostra-se um importante aliado ao seu e-commerce, garantindo que você recebe o pagamento de seus clientes. Porém, considerando toda complexidade e riscos envolvidos no processo de transações online, há diversas outras funcionalidades relevantes que devem ser consideradas para a escolha de um bom Gateway de Pagamento, como a segurança na movimentação destas informações e a integração que o serviço oferece.</p>

						<h3>Nos acompanhe aqui no Blog Venda Aprovada e <a href="#contact">fique por dentro do melhor conteúdo sobre vendas online!</a></h3>
					</div>
				</div>
			</div>
		</div>
	
	</section>
	
<?php $this->load->view('commons/form');

$this->load->view('commons/footer'); ?>