<?php
// father class
class Products{
  // proprieties
  public $nome;
  public $marca;
  public $modello;
  public $disponibilita;
  public $prezzo;

  // construct
  public function __construct( $_nome, $_marca, $_modello, $_disponibilita, $_prezzo ){
    $this->nome = $_nome;
    $this->marca = $_marca;
    $this->modello = $_modello;
    $this->disponibilita = $_disponibilita;
    $this->prezzo = $_prezzo;
  }

}

// $quaderno = new Products('Quaderno', 'Fabriano', 'A4', '200', 2);
// var_dump($quaderno);
