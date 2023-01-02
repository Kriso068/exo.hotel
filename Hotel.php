<?php


class Hotel{
    
    
    private string $nom;
    private string $rue;
    private string $cp;
    private string $ville;
    private array $chambre;
    private array $reservation;
    
    
    public function __construct($nom, $rue, $cp, $ville){
        $this -> nom = $nom;
        $this -> rue = $rue;
        $this -> cp = $cp;   
        $this -> ville = $ville;   
        $this -> chambre = [];
        $this -> reservation = []; 
        
    }

    //GETTER

    public function getNom(){

        return $this -> nom;
    }  
    public function getRue(){

        return $this -> rue;
    }
    public function getCp(){

        return $this -> cp;
    } 
    public function getVille(){

        return $this -> ville;
    }
    public function getChambre(){

        return $this -> chambre =[];
    }
    public function getReservation(){

        return $this -> reservation =[];
    }

    //SETTER

    public function setNom(){

        return $this -> nom;
    }
    public function setRue(){

        return $this -> rue;
    }
    public function setCp(){

        return $this -> cp;
    } 
    public function setVille(){

        return $this -> ville;
    }
    public function setChambre(){

        return $this -> chambre =[];
    }
    public function setReservation(){

        return $this -> reservation =[];
    }


    public function addChambre(Chambre $c){
        $this -> chambre [] = $c;
    }

    public function addReservation (Reservation $reservation){
        $this -> reservation [] = $reservation;
    }


    
    public function rendreChambre(Chambre $c){

        $c -> setEtat(false);

    }
    
    // get info de la total

    // afficher reservation

    public function afficherDescription(){
        $result = "<h3>". $this->nom ." ".$this->ville.": <br>".$this->rue." ". $this->cp." ". $this->ville."</h3>";
        $result.= "<span>Nombre de chambres : ".count($this->chambre)."</span><br>";
        $result.= "<span>Nombre de reservation : ".count($this->reservation)."</span><br>";
        $result.= "<span>Nombre de chambres libre : ".(count($this->chambre)-count($this->reservation))."</span><br>";
          
        $result .= "****************************************************<br>";
        return $result;        
    }

    

    public function afficherReservation(){
        
            echo  "<h3 class='my-5'>Réservation de l'hôtel  ". $this->nom ." ". $this->ville." : </h3>";
            //echo "<span>Nombre de reservation : ".count($this->reservation)."</span><br>";
            
            if(count($this->reservation) == 0){
                
                //$result1 = "<h3>Réservation de l'hôtel  ". $this->nom ." ". $this->ville." : </h3>";
                $result2 = "Il n'y a aucune reservation";
                return $result2;

            }else{
                echo "<span>Nombre de reservation : ".count($this->reservation)."</span><br>";

                foreach($this->reservation as $r){ 

   
                    echo $r -> getClient(). "  - " ;
                    echo "Chambres " .$r -> getChambre()-> getNumero()."  - du " .$r -> getDateDebut()-> format('d-m-Y')."  - au ".$r -> getDateFin()-> format('d-m-Y'). "<br>" ;
      
                }                
            }                    
    }
          

    public function annulerReservation(Reservation $reser){

        foreach($this->reservation as $key => $r){

             if($r -> getChambre() -> getNumero() == $reser -> getChambre() -> getNumero()){

                $reser -> getChambre() -> setEtat(false);
                unset($this-> reservation[$key]);
                
            }
        }    
    }

    public function afficherChambres(){

        echo "<p class='my-5 text-center'><strong>".$this->nom." ". $this-> ville."</strong></p>",

        "<table class='table'>",
                "<thead>",
                    "<tr>",
                        "<th scope='col' class='text-center'>Chambre</th>",
                        "<th scope='col' class='text-center'>Prix</th>",
                        "<th scope='col' class='text-center'>Wifi</th>",
                        "<th scope='col' class='text-center'>Etat</th>",
                    "</tr>",
                "</thead>",
                "<tbody>";
        foreach ($this -> chambre as $ch){
             echo  "<tr>",
                    "<td>Chambre : ".$ch -> getNumero()."</td>",
                    "<td>".$ch -> getPrix()." €.</td>",
                    "<td></i>".$ch -> afficherIconWifi()."</td>",
                    "<td>".$ch ->afficherEtatChambre()."</td>",
                    "</tr>";    
        }
        echo "</tbody>",
        "</table>";
  
    }



  

    


    public function futureReservation(){
        $result ="";
        foreach($this-> reservation as $r){
            
           if($r ->getDateDebut() > new DateTime()){
                $result .=  "La réservation sera  ".$r ->getDateDebut()->format('d-m-Y'). $r-> getClient()-> getNom();      
            }
        }
        return $result;
    
    }
  








    public function __toString(){
        return "<span>".$this -> nom." ".$this -> rue." ".$this -> cp." ".$this -> ville."</span>";
    }

}





   
 



