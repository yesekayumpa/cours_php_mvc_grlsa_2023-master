<?php 
class Personne{
  protected int $id;
  protected string $nomComplet; 
   //Pas de Surcharge 

   //Constructeur
  public function __construct()
  {
    
  }
   //Getters et Setters
  
  

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;  //this.id  ou id

    return $this;
  }

  /**
   * Get the value of nomComplet
   */ 
  public function getNomComplet()
  {
    return $this->nomComplet;
  }

  /**
   * Set the value of nomComplet
   *
   * @return  self
   */ 
  public function setNomComplet($nomComplet)
  {
    $this->nomComplet = $nomComplet;

    return $this;
  }

  public function __toString()
  {
    return "Id  :".$this->id. "  Nom et Prenom : ".$this->nomComplet;
  }
}