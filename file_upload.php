<?php

	if(isset($_FILES['nama_file'])){
		/*echo "<pre>".print_r($_FILES['nama_file'],1)."<pre";*/
		$nama_file = $_FILES['nama_file']['name'];
		$temp_file = $_FILES['nama_file']['tmp_name'];

		$dir = "upload";

		$ext = ['image/png','image/jpg','image/jpeg','image/gif'];

		if(in_array($_FILES['nama_file']['type'],$ext)){

		$up = move_uploaded_file($temp_file,$dir."/".$nama_file);
			if($up){
			echo "file berhasil di upload";
		
		}else {
			echo"file tidak dapat di upload";
		}
	}
		else{
			echo"file gagal di upload";
		}
		}
	


?>
<form action="" method="POST" enctype="multipart/form-data">
<table>
	<tr>
		<td> File</td>

		<td><input type="file" name="nama_file" </td>
		</tr>
		<tr>
			<td></td>
			<td><button type ="Submit">Upload</button></td>
		</tr>
</table>

</form>