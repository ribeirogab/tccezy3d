<?php 
class SessionCliente extends Cliente{

	public function criarSession(){
		echo $this->getEmail();
	}
	public function encerrarSession(){

	}
}
?>