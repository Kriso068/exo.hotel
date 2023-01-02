
<?php



class Client{

    private  string $nom;
    private  string $prenom;
    private  array $reservation;

    public function __construct($nom, $prenom){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> reservation = []; 
     
    }

    //GETTER

    public function getNom(){

        return $this -> nom;
    }
    public function getPrenom(){

        return $this -> prenom;
    }
    public function getReservation() : array {

        return $this -> reservation;
    }

    //SETTER
    
    public function setnom(){

        return $this -> nom;
    }
    public function setPrenom(){

        return $this -> prenom;
    }
    public function setReservation(){

        return $this -> reservation = [];
    }

    public function addReservation(Reservation $reservation){
        $this -> reservation [] = $reservation;
    }

    public function afficherReservation(){
        $result = "<h3>Réservation de ". $this->nom ." ". $this->prenom." </h3>";
        $result.= "<span>Nombre de reservation : ".count($this->reservation)."</span><br>";
        
        foreach($this -> reservation as $r) {
            $result .= $r;   
        }   
        $result .= "****************************************************<br>"; 
        return $result;   
    }
    
    
    public function __toString(){

        return  $this -> nom." ".
                $this -> prenom;      
                $this -> afficherReservation();
    }

   

}