<?php
include_once "model/crew.php";
class CrewController extends Crew {

    public function addCrew($firstname,$lastname)
    {
        return $this->insertCrew($firstname,$lastname);
    }
    public function showCrews()
    {
        return $this->getCrews();
    }
    public function showCrewInfo($cid)
    {
        return $this->getCrewInfo($cid);
    }
    public function editCrew($cid,$firstname,$lastname)
    {
        return $this->updateCrew($cid,$firstname,$lastname);
    }

}
?>