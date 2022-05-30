<?php
class Cour{
    public int $dateDebut;
    public int $dateFin;
    public String $nomCour;

    /**
     * Get the value of dateDebut
     */ 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of dateFin
     */ 
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */ 
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get the value of nomCour
     */ 
    public function getNomCour()
    {
        return $this->nomCour;
    }

    /**
     * Set the value of nomCour
     *
     * @return  self
     */ 
    public function setNomCour($nomCour)
    {
        $this->nomCour = $nomCour;

        return $this;
    }
}