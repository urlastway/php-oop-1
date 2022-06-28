<?php 

class Muvies {

    public $title;
    public $year;
    public $gener;
    public $duration;

    public function __construct(string $_title, int $_year, string $_gener, int $_duration){

        $this->title = $_title;
        $this->year = $_year;
        $this->gener = $_gener;
        $this->duration = $_duration;
    }
}

?>