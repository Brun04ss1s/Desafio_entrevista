<?php 

Class Cliente{
    
    protected $nome;
    protected $observacao;
    
    public function setClient($nome, $observacao){
        include_once('config.php');
        $this -> nome = $nome;
        $this -> observacao = $observacao; 
        
        $sql = "INSERT INTO cliente (nome, observação) VALUES ('$nome','$observacao')";
        
        if ($mysqli->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }

    }
}