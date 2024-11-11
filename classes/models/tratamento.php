<?php
class Tratamento
{
    public $Codigo;
    public $Nome;

    public $Descricao;

    function __construct($codigo = null, $nome = null, $descricao)
    {
        $this->Codigo = $codigo;
        $this->Nome = $nome;
        $this->Descricao = $descricao;

    }
}
?>