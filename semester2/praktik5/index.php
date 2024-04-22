<?php

class manusia {
    public $nama;
    public $umur;


    public function setNama ($name)
    {
        $this->nama = $name;
    }

    public function setUmur()
    {
        $this->umur = $umur;
    }    
    
    
    public function getInfo()
    {
        return "Nama: ," .$this->nama ." , Umur: " . $this-> umur;
    }
        
    

}

// Membuat objek
$fadlan = new Manusia();
$fadlan->setNama("FADLAN ZAKI A");
$fadlan->setUmur(24);
echo $fadlan-> getInfo();

echo "<br>"

// $fadlan2 = new Manusia();
// $fadlan2->setNama("FADLAN ZAKI A");
// $fadlan2->setUmur(24);
// echo $fadlan2-> getInfo();

?>