


<?php

class Chambre{

    private Hotel $hotel;
    private int $numero;
    private int $prix;
    private int $lit;
    private bool $wifi;
    private bool $etat;
    private Reservation $reservation;
    private static array $chambres;
    //private string $annuler;


    public function __construct(Hotel $hotel, $numero, $prix, $lit, $wifi){

        $this -> hotel = $hotel;
        $this -> numero = $numero;
        $this -> prix = $prix;
        $this -> lit = $lit;
        $this -> wifi = $wifi;   
        $this -> etat = false; 
        $hotel -> addChambre($this); 
        self :: $chambres[] = $this;
    }

    

    //GETTER


    public function getHotel(){

        return $this -> hotel;
    }
    public function getNumero(){

        return $this -> numero;
    }
    public function getPrix(){

        return $this -> prix;
    }
    public function getLit(){

        return $this -> lit;
    }
    public function getWifi(){

        return $this -> wifi;
    }
    public function getEtat(){

        return $this -> etat;
    }
    public function getReservation(){

        return $this -> reservation = [];
    }
    public function getChambres(){
        return self:: $chambres;
    }


    /**
     * Get the value of annuler
     */ 
    public function getAnnuler()
    {
        return $this->annuler;
    }


    //SETTER

    public function setHotel(){

        return $this -> hotel;
    }
    public function setNumero(){

        return $this -> numero;
    }
    public function setPrix(){

        return $this -> prix;
    }
    public function setLit(){

        return $this -> lit;
    }
    public function setWifi(){

        return $this -> wifi;
    }
    public function setEtat( bool $etat){

        $this -> etat = $etat;
    }
    public function setReservation(){

        return $this -> reservation = [];
    }
    public function setChambres(){
        return self:: $chambres;
    }



    public function afficherIconWifi(){
        $ic ="";
        if($this->getWifi() == true){
            $ic = "<i class='bi bi-wifi'></i>";
        }    
        return $ic; 
    }

    public function afficherEtatChambre(){
       $ic2 = "";
       if($this->getEtat() == false){
            $ic2 = "<p class='bg-success text-center w-50 m-auto'>Libre</p>";
       }else{
            $ic2 = "<p class='bg-danger text-center w-50 m-auto'>Reservé</p>";
       }
       return $ic2;
    }
 

    public function __toString()
    {
        return "Chambre ". $this -> numero." ".
        $this-> prix . " €". " ".$this -> afficherIconWifi(). " ". $this-> afficherEtatChambre() ;
        
       
    }
    

    
    

    
}