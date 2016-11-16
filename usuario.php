<?php

/**
 * usuario 
 * Descricao
 * @copyright (c) year, Diego Go
 */
class usuario {

    private $cod_usuario;
    private $nome;
    private $email;
    private $telefone;
    private $endereco;

    function getCod_usuario() {
        return $this->cod_usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}
