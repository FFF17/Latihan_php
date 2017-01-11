<?php
error_reporting(E_ALL);
//file opp.php
//deklarasi class/object

/**
* 
*/
class Mobil
{
	private $warna = null;
	private $merk = null;
	private $kilometer = 0;
	private $satuan = "km";


	private function getSatuanJarak()
	{
		return $this->satuan;
	}

	public function setSatuanJarak($sat)
	{
		$this->satuan = $satuan_jarak;
	}

	public function setWarna($warna_baru)
	{
		$this->warna = $warna_baru;
	}
	public function getWarna($aa){
		return $this->warna;
	}

	public function maju($km)
	{
		$this->kilometer += $km;
	}
	public function getJarak()
	{
		return $this->kilometer." ".$this->getSatuanJarak();
	}

	public function mundur($km)
	{
		$this->kilometer -= $km;

	}

	
}
$mobil1 = new Mobil;
$mobil1->setSatuanJarak("m");

/*$mobil1->setWarna("Merah");
echo $mobil1->getWarna();

$mobil1->setWarna("Biru");
echo $mobil1->getWarna();	
*/
echo $mobil1->getJarak();
$mobil1->maju(50);//50km
echo $mobil1->getJarak();
$mobil1->maju(20);//70km
echo $mobil1->getJarak();
$mobil1->mundur(60);//10km
echo $mobil1->getJarak();


echo $mobil1->getJarak();//10



?>	