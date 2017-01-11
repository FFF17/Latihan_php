<?php

try{
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=crud1;","root","ferdiansyah17");
	/*echo "koneksi berhasil";*/
}catch(PDOException $e){
	echo $e->getMessage();
}

/*$table_create = $koneksi->prepare("create table  sekolah(
					id int(11) not null primary key auto_increment,
					nama varchar(255) not null,
					alamat text not null)");

$result = $table_create->execute();
echo "<pre>".print_r($result,1)."</pre>";*/

/*$table_insert = $koneksi->prepare("INSERT INTO sekolah(nama,alamat) VALUES('SMK Negeri 10','JL Mayjend Soetoyo')");
$result = $table_insert->execute();
if($result==1){
	echo "berhasil";
}else{
	echo "gagal";	
}*/

/*$table_select = $koneksi->prepare("SELECT * FROM sekolah");
$table_select->execute();
$data = $table_select->fetchALL();
foreach($data as $key){
	//print_r($key);
	//echo "<pre>".print_r($key,1)."</pre>";
	echo $key['nama']." ".$key['alamat']."<br>";

}



$id = 1;
$table_update = $koneksi->prepare("UPDATE sekolah SET nama = 'SMK NEGERI 57',alamat='Jalan Mana aja' WHERE id =".$id);
$result = $table_update->execute();
if($result==1){
	echo "berhasil";


}else{
	echo "gagal";
}*/

$db_create = $koneksi->prepare("CREATE database baru");
$result = $db_create->execute();
if($result==1){
	echo "berhasil";


}else{
	echo "gagal";
}
?>