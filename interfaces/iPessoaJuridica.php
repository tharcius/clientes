<?php

/**
 * Created by PhpStorm.
 * User: Tharcius
 * Date: 15/11/2015
 * Time: 23:49
 */
interface iPessoaJuridica{
    public function getContato();
    public function setContato($contato);
    public function getUrl();
    public function setUrl($url);
    public function getTipo();
    public function setTipo($tipo);
}