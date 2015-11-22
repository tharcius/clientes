<?php
/**
 * Created by PhpStorm.
 * User: Tharcius
 * Database: 02/07/2015
 * Time: 15:50
 */

namespace BPad\Cliente;
use \BPad\Cliente\Util\iCliente;
use \BPad\Cliente\Util\iEnderecoCobranca;
use \BPad\Cliente\Util\iGrauImportancia;

abstract class ClienteAbstract implements iCliente, iEnderecoCobranca, iGrauImportancia{
    protected $nome;
    protected $telefone;
    protected $email;
    protected $endereco;
    protected $cpfCnpj;
    protected $foto;
    protected $pessoaFisica;
    protected $cobranca;
    protected $grauImportancia;

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getCobranca(){
        return $this->cobranca;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getPessoaFisica()
    {
        return $this->pessoaFisica;
    }

    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj($cpfCnpj)
    {
        $this->pessoaFisica = $cpfCnpj;
    }

    public function getGrauImportancia(){
        return $this->grauImportancia;
    }

    public function setGrauImportancia($grauImportancia){
        $this->grauImportancia = $grauImportancia;
    }

    public function getEnderecoCobranca(){
        return $this->cobranca;
    }

}
