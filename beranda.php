<!DOCTYPE html>
<html>
	<head>
	<title>Cinema XXI</title>
	<style>
		.wrap {
			display: flex;
			justify-content: space-around;
			margin: 30px 0;
		}
		
		.btn {
			padding: 5px 15px;
			border-radius: 10px;
			text-decoration: none;
			text-align: center;
			padding-bottom:10px;
			
		}
		body{
    font-family: Arial, Helvetica, sans-serif;

    padding: 0;
    margin:0;
    
}
		
		.second {
			background-color: #1a75ff;
			color: white;
		}
		
		.primary {
			background-color: #1a75ff;
			color: white;
			float: right;
			margin-right: 30px;
		}
		.container{
    width: 65%;
    height: auto;
    background: white;
    margin:auto;
    margin-top: 5px;
    padding-bottom: 5px;
}
.judul {
    padding: 30px 0 30px 10px;	
}
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #1a75ff;
    border: 1px solid gainsboro;
	
}		
nav li a{
    display: inline-block;
    color:#ffffff;
    text-align: center;
	padding: 14px 15px;
    text-decoration: none;
}
nav li {
    float: left;
}
footer {
    clear: both;
    width: 98.8%;
    height: auto;
    text-align: center;
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
    border-bottom: 1px solid gainsboro;
    padding-top: 15px;
    padding-bottom: 15px;  
}

		
	</style>
	</head>
	<body class="container">
				<div>
					
					<img src="logo.jpg" style=heigth="650" width="500"></br>
					</div>
					
					<nav>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="kontak-saya.html">Kontak Saya</a></li>
                <li><a href="tentang-saya.html">Tentang Saya</a></li>
				<li><a href="./logout.php">Logout</a></li>
				<li> <a>
				<form method="GET" action="beranda.php">
						<input type="search" placeholder="" aria-label="Search" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari'];} ?>">
						<button type="submit">Cari</button>
						
					</form>
					</a>
					</li>
					
            </ul>
        </nav>
					
					
				</div>
				<div>
		<?php
		
		include('koneksi.php');
		
			if(isset($_GET['kata_cari'])) {
			
				$kata_cari = $_GET['kata_cari'];
			
		      $query = "SELECT * FROM barang WHERE id like '%".$kata_cari."%' OR namaBarang like '%".$kata_cari."%' ORDER BY id ASC";
			
			}else {
				$query = "SELECT * FROM barang ORDER BY id ASC";
			}
			?>
				<div class="wrap">
				<?php
					include "koneksi.php";
					$no = 1;
					$result = mysqli_query($kon, $query);
					while ($row = mysqli_fetch_array($result)) {
				?>
					<div style="width: 16rem;">
					  <img src="./gambar/<?= $row['id']; ?>.jpg" style="height: 250px;">
					  <div>
						<h5><?= $row['namaBarang']; ?></h5>
						<a class="btn second detail" href="<?= $row['kodeProduk']; ?>.php">More info</a>
					  </div>
					</div>
				<?php } ?>	
				</div>
				
			</div>
		</div>
		
	</body>
</html>