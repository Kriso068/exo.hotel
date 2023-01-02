<?php

class Reservation{

    
    private Chambre $chambre;
    private Client $client;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private int $nbJour;




    

    
    public function __construct(Chambre $chambre, Client $client, string $dateDebut, string $dateFin){

        if(!$chambre -> getEtat()){

            $hotel = $chambre -> getHotel();
            $hotel -> addReservation($this);
            $this -> client = $client;
            $client -> addReservation($this);
            $this -> chambre = $chambre; 
            $chambre -> setEtat(true);
            $this -> dateDebut =  new DateTime($dateDebut);
            $this -> dateFin =  new DateTime($dateFin);
            $this -> nbJour = $this->dateDebut -> diff($this->dateFin) -> format("%d");
            
        }else{
            echo "La chambre $chambre est deja reservé <br/>";
            return ;
        }
    }

    //GETTER

    public function getClient() : Client{

        return $this -> client;
    }
    public function getChambre() : Chambre{

        return $this -> chambre;
    }
    public function getDateDebut() : DateTime{

        return $this -> dateDebut;
    }
    public function getDateFin() : DateTime{

        return $this -> dateFin;
    }
    public function getNbJour() {

        return $this -> nbJour;
    }

    //SETTER
    
    public function setHotel() : Client{

        return $this -> client;
    }
    public function setChambre() : Chambre{

        return $this -> chambre;
    }
    public function setDateDebut() : DateTime{

        return $this -> dateDebut;
    }
    public function setDateFin() : DateTime{

        return $this -> dateFin;
    }
    


    

    public function __toString(){

        return "<p><strong>Hotel : ".$this -> chambre -> getHotel()."</strong><br> 
        chambre  reservé numero : ". $this -> chambre -> getNumero().
        "<br>  nombres de jour reservé : ".$this -> nbJour.
        " <br> du : ".$this ->getDateDebut() -> format('d-m-Y')." au ".$this ->getDateFin() -> format('d-m-Y').".</p>";  
    }

    

}