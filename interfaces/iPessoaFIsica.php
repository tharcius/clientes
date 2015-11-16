<?php

/**
 * Created by PhpStorm.
 * User: Tharcius
 * Date: 15/11/2015
 * Time: 23:48
 */

interface iPessoaFisica{
    public function getWhatsapp();
    public function setWhatsapp($whatsapp);
    public function getEstadoCivil();
    public function setEstadoCivil($rg);
    public function getDataNascimento();
    public function setDataNascimento($dataNascimento);
}