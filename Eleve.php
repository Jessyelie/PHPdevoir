<?php
class Eleve extends User
{
    public string $age;
    public string $enCour;
    public int $dateInscription;
    public int $dateReinscription;


    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of enCour
     */ 
    public function getEnCour()
    {
        return $this->enCour;
    }

    /**
     * Set the value of enCour
     *
     * @return  self
     */ 
    public function setEnCour($enCour)
    {
        $this->enCour = $enCour;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */ 
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get the value of dateReinscription
     */ 
    public function getDateReinscription()
    {
        return $this->dateReinscription;
    }

    /**
     * Set the value of dateReinscription
     *
     * @return  self
     */ 
    public function setDateReinscription($dateReinscription)
    {
        $this->dateReinscription = $dateReinscription;

        return $this;
    }
}
