<?php

require_once "interfaces/iPessoaFisica.php";
class Fisica extends Cliente implements iPessoaFisica{
    private $whatsapp;
    private $estadoCivil;
    private $dataNascimento;

    public function getWhatsapp(){
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp){
        $this->whatsapp = $whatsapp;
    }

    public function getEstadoCivil(){
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil){
        $this->estadoCivil = $estadoCivil;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function __construct($dados){
        $fisica  = $dados['fisica'];
        $cliente = $dados['cliente'];

        $this->estadoCivil   = $fisica['estadoCivil'];
        $this->dataNascimento= $fisica['dataNascimento'];
        $this->whatsapp      = $fisica['whatsapp'];

        $this->grauImportancia= $cliente['grauImportancia'];
        $this->cobranca     = $dados['cobranca'];
        $this->cpfCnpj      = $cliente["cpfCnpj"];
        $this->email        = $cliente['email'];
        $this->endereco     = $dados['endereco'];
        $this->foto         = $cliente['foto'];
        $this->nome         = $cliente['nome'];
        $this->pessoaFisica = true;
        $this->telefone     = $cliente['telefone'];
    }

}
