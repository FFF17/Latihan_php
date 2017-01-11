<?php
/*function ulang($banyak,$kalimat){
*/	/*for ($i=0; $i <banyak ; $i++) { 
		return $kalimat;

		# code...
	}
}*/
/*if($banyak>100){
		return $kalimat;
	}else{
		return 0;
	}
}
function ulang2($banyak,$kalimat){
	if($banyak>100){
		return $kalimat;
	}else{
		return 0;
	}
}
echo ulang(100,"Hai");
echo ulang2(100,"Hai");*/

function kabataku($operator,$a1,$a2){
	if($operator == "*"){
		return $a1*$a2;
	}else if($operator == "/"){
	return $a1/$a2;
}else if($operator == "+"){
	return $a1+$a2;
}

else if($operator == "-"){
	return $a1-$a2;
}
else{
	return "no operator";
	# code...
}
}
echo kabataku("*",5,6)."<br>";//30
echo kabataku("/",12,6)."<br>";//2
echo kabataku("+",4,3)."<br>";//7
echo kabataku("-",7,6)."<br>";//1
echo kabataku("",5,6)."<br><br>";//NO operator
$hari=[0,"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];
echo date("Y-m-d")."<br><br>"; //2016 -11-03
echo $hari[date("N")].date(",d F Y")."<br><br>";//Thursday 03 November
date_default_timezone_set("Asia/Jakarta");//jika setingan di hp tidak memakai GMT
echo date("H:i:s")."<br><br>";

?>
