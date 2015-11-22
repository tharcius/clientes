<?php

/**
 * Created by PhpStorm.
 * User: Tharcius
 * Database: 15/11/2015
 * Time: 23:49
 */

namespace BPad\Cliente\Util;

interface iPessoaJuridica{
    public function getContato();
    public function setContato($contato);
    public function getUrl();
    public function setUrl($url);
    public function getTipo();
    public function setTipo($tipo);
}