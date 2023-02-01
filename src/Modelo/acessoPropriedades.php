<?php

trait acessoPropriedades
{
    public function __get(string $nomeAtributo){
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo;
        
    }
}