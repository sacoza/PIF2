<?php
/**

 */
class ia
{

  // Declaración de una propiedad
  public $fila = '3';
  public $columna = '1';

  // Declaración de un método
  public function getfila() {
      return $this->fila;
  }
  public function getcolumna() {
      return $this->columna;
  }
  // Setters
  public function setFila($fil) {
    $this->fila = $fil;
  }
  public function setColumna($col) {
    $this->columna = $col;
  }// Random
  public function RandomPos() {
  }
}

?>
