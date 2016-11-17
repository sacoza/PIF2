<?php
/**
 */
class ia
{

  // Declaración de propiedad
    public $tipo="nave";
    public $mapaFil=4;
    public $mapaCol=4;
    public $numNaves=3;
  //ARRAYS
    //Naves humanas
    public $navesHumano=[];
    //Inteligencia artificial
    public $navesIA=[
    0=>["tipo"=>"nave",
        "fil"=>3,
        "col"=>0],
    1=>["tipo"=>"nave",
        "fil"=>3,
        "col"=>1],
    2=>["tipo"=>"nave",
        "fil"=>3,
        "col"=>2],
      ];
  //Declaración de un metodo
    public function getFila(){
      return $this->mapaFil;
    }
    public function getColumna(){
      return $this->mapaCol;
    }
    public function getNave(){
      return $this->numNaves;
    }
    public function getNavesIA(){
      return $this->navesIA;
    }
    public function getNaveshumano(){
      return $this->navesHumano;
    }
  //Setters
    public function setMapaFil($mapaFil){
        if($mapaFil>3){
           $this->mapaFil = 3;
        }elseif ($mapaFil<0){
          $this->mapaFil = 0;
        }else{
          $this->mapaFil = $mapaFil;
        }
    }
    public function setMapaCol($mapaCol){
        if($mapaCol>3){
           $this->mapaCol = 3;
        }elseif ($mapaCol<0){
          $this->mapaCol = 0;
        }else{
          $this->mapaCol = $mapaCol;
        }
    }
    public function setNavesIA($navesIA){
      $this->navesIA = $navesIA;
    }
    public function setNaveHumana($tipo,$fil,$col){
      $this->navesHumano[]=[
        "tipo"=>$tipo,
        "fil"=>$fil,
        "col"=>$col,
      ];
    }
  //RAMDOM
    public function randompos(){
  	$this->fila=rand(0,3);
    $this->columna=rand(0,3);
    }
  }
