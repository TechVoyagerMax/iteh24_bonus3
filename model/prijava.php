<?php 

    class Prijava{

    private $id;
    private $predmet;
    private $katedra;
    private $sala;
    private $datum;


    public function __construct($id=null,$predmet=null,$katedra=null,$sala=null,$datum=null){
        $this->id=$id;
        $this->predmet=$predmet;
        $this->katedra=$katedra;
        $this->sala=$sala;
        $this->datum=$datum;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_predmet(){
        return $this->predmet;
    }

    public function get_katedra(){
        return $this->katedra;
    }

    public function get_sala(){
        return $this->sala;
    }

    public function get_datum(){
        return $this->datum;
    }


    public function set_id($id){
        $this->id=$id;
    }

    public function set_predmet($predmet){
        $this->predmet=$predmet;
    }

    public function set_katedra($katedra){
        $this->katedra=$katedra;
    }

    public function set_sala($sala){
        $this->sala=$sala;
    }

    public function set_datum($datum){
        $this->datum=$datum;
    }


    public static function read(mysqli $konekcija){
        $upit="SELECT * FROM prijave";
        return $konekcija->query($upit);
    }

    public static function delete($id, mysqli $konekcija){
        $upit="DELETE FROM prijave WHERE id=$id";
        return $konekcija->query($upit);
    }

    public static function create(Prijava $pr, mysqli $konekcija){

        $Newpredmet=$pr->get_predmet();
        $Newkatedra=$pr->get_katedra();
        $Newsala=$pr->get_sala();
        $Newdatum=$pr->get_datum();

        $upit="INSERT INTO prijave (predmet, katedra, sala, datum) VALUES ('$Newpredmet','$Newkatedra','$Newsala','$Newdatum')";

        return $konekcija->query($upit);
    }

    }
?>