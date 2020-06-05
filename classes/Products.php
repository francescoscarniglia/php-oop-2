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

  //methods
public function calcoloSconto($_perc){
    $sconto = $this->prezzo * $_perc / 100;
    $prezzo_scontato = $this->prezzo - $sconto;
    return number_format($prezzo_scontato, 2);
  }
}

$quaderno = new Products('Quadretti','Quaderno', 'Fabriano', 'A4', '200', 2);
// $quaderno->type = 'Quadretti';

var_dump($quaderno);
