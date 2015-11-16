<?php

require_once "interfaces/iPessoaJuridica.php";

class Juridica extends Cliente implements iPessoaJuridica{
    private $contato;
    private $url;
    private $tipo;

    public function getContato(){
        return $this->contato;
    }

    public function setContato($contato){
        $this->contato = $contato;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function __construct($dados)
    {
        $juridica = $dados['juridica'];
        $cliente  = $dados['cliente'];

        $this->contato  = $juridica['contato'];
        $this->tipo     = $juridica['tipo'];
        $this->url      = $juridica['url'];

        $this->grauImportancia= $cliente['grauImportancia'];
        $this->cobranca     = $dados['cobranca'];
        $this->cpfCnpj      = $cliente['cpfCnpj'];
        $this->email        = $cliente['email'];
        $this->endereco     = $dados['endereco'];
        $this->foto         = $cliente['foto'];
        $this->nome         = $cliente['nome'];
        $this->pessoaFisica = false;
        $this->telefone     = $cliente['telefone'];
    }
}
