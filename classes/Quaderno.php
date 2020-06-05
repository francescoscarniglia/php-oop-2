<?php
include_once __DIR__ . '/Products.php';
// child class
class Quaderno extends Products{

  public $type;
  // costruttore
  public function __construct($_type, ...$params){
    parent::__construct(...$params);
    $this->type=$_type;
  }
}
