<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Calculator</title>
</head>
<body background="2.jpg"><center>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<h1>Program Kalkulator</h1>
	<h1>________________________________</h1>
	<h1>________________________________</h1>
		<form>
		<div class="Kalkulator">
		  <div class="form-group">
		  	<div class="col-lg-4">
		    <form method="post" action="index.php">
		    <label for="exampleFormControlInput1">Masukkan Bilangan Pertama</label>
		    <input type="text" class="form-control" name="bil1" autocomplete="off" class="bil" placeholder="0">
		  	</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-lg-4">
		    <label for="exampleFormControlInput1">Masukkan Bilangan Kedua</label>
		    <input type="text" class="form-control" name="bil2" autocomplete="off" class="bil" placeholder="0">
		  	</div>
		  </div>
		  <div class="form-group">
		  	<div class="col-lg-4">
		  	<label for="exampleFormControlInput1">Pilihan</label>
		    <select class="opt" name="operasi">
		      <option value="tambah">+</option>
		      <option value="kurang">-</option>
		      <option value="kali">x</option>
		      <option value="bagi">:</option>
		    </select>
		    </div>
		  </div>
		  <input type="submit" name="hitung" value="Hitung" class="tombol">
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
		 </form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</center>
</body>
</html>