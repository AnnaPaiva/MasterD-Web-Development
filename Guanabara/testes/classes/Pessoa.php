<?php
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}
?>