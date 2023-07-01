<?php   

class Enseignant extends Personne{
    private string $grade;

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    
    public function __toString()
    { 
        //super ==> parent
          return  parent::__toString() ." Grade : ".$this->grade;
    }
}