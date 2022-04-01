<?php
require_once 'Vehicle.php';

class Camion extends Vehicle{


    private int $CapacityStock;
    private int $Charge=0;

    public function __construct(string $color, int $nbSeats, string $energy, int $CapacityStock)
    {
        parent::__construct($color, $nbSeats);
        $this->energy=$energy;
        $this->CapacityStock=$CapacityStock;
        
    }

    public function infilling($CapacityStock,$Charge) {

        if($CapacityStock<=$Charge){

            return "the vehicul is full";
        }
        else
        {
            return "the vehicul is not full";
        }


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