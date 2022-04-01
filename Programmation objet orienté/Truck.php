<?php
require_once 'Vehicle.php';

class Truck extends Vehicle{


    private int $CapacityStock;
    private int $Charge=0;

    public function __construct(string $color, int $nbSeats, string $energy, int $CapacityStock)
    {
        parent::__construct($color, $nbSeats);
        $this->energy=$energy;
        $this->CapacityStock=$CapacityStock;
        
    }

public function infilling($CapacityStock,$Charge) {
        while($CapacityStock>$Charge){

            $Charge++;
            return "the truck is infilling";
            
        }
        
        return "the truck is full";
    
}


    public function getCapacityStock(): int
    {
        return $this->CapacityStock;
    }

    public function setCapacityStock(int $CapacityStoc): void
    {
        $this->CapacityStock = $CapacityStoc;
    }


    public function getCharge(): int
    {
        return $this->Charge;
    }

    public function setCharge(int $Charge): void
    {
        $this->Charge = $Charge;
    }




}
