<?php
include_once "model/vessel.php";
class VesselController extends Vessel {

    public function addVessel($name)
    {
        return $this->insertVessel($name);
    }
    public function showVessels()
    {
        return $this->getVessels();
    }
    

}
?>