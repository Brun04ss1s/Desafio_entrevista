<?php

Class Cliente_telefone extends CLiente{

    protected $telefone;

    public function setDados($nome, $observacao, $telefone){
        include_once('config.php');
        $this -> nome = $nome;
        $this -> telefone = $telefone;
        $this -> observacao = $observacao;

        $sql = "INSERT INTO cliente_telefone (telefone) VALUES ('$telefone')";
        
        if ($mysqli->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }


        $cliente = new Cliente;
        $cliente -> setClient($nome, $observacao);
    }
}