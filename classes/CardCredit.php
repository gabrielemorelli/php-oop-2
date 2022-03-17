<?php

class CardCredit {

    protected $mese;
    protected $anno;
    protected $NumeroCarta;
    
    public function getMese() {
        return $this->Mese;
    }
    
    public function setMese($number) {
        if (is_numeric($number) && $number >= 1 && $number <= 12) {
            $this->Mese = $number;
        }
    }


    public function getAnno() {
        return $this->expirationYear;
    }
    
    public function setAnno($number) {
        if (is_numeric($number) && $number >= 0 && $number <= 99) {
            $this->Anno = $number;
        }
    }
  

    public function getNumeroCarta() {
        return $this->number;
    }

    public function setNumeroCarta($number) {
        if (is_numeric($number) && strlen($number) == 16) {
            $this->NumeroCarta = $number;
        }
    }

    public function isScadenza() {

        $expires = DateTime::createFromFormat('m-y', $this->Mese.'-'.$this->Anno);
        $now = new DateTime();

        if ($expires < $now)  {
            throw new Exception('La carta di credito è scaduta');
        }

    }

}
   
}