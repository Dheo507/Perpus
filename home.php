<?php 

session_start();
if($_SESSION['username'] == null){
	header('Location: ../index.php');
}

?>


<HTML>

	<head>
		

	<title>Perpustakaan</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	 <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	
	<!-- //Fonts -->
		<style>
			p{
				color: ffffff;
			}
			h2{
				color: #000000;
			}
			.judul{
				height: 50px;
				color: black;
				background-color: #FAEBD7;
			}
			.menu{
				height: 450px;
				color: #7FFF00;
				text-align: left;
				font-size: 25px;
				margin-top: 40px;
			}

			ul li{
 			 margin-top: 5px;
			}

			.buku{
				height: 450px;
				color: yellow;
			}
			table{
				margin-top: 10px;
				color: #ffffff;
			}

			.top-s{
				margin-top: 45px;
			}
		</style>
	</head>
	<body>
			<div class="row">
				<div class="col-md-12 judul"><h2>Perpustakaan Online</h2></div>
			</div>
			<div class="row">
				<div class="col-md-12 buku">
					<div class="row">
							<div class="col-md-10">
								<form action="controller/docaribuku.php" method="post">
					<label for="cars">Pilih Buku:</label>
					<select id="cars" name="jenis">
						<option value="all">Semua</option>
  						<option value="pelajaran">Pelajaran</option>
  						<option value="masak">Masak</option>
  						<option value="komik">Komik</option>
 						 <option value="motivasi">Motivasi</option>
					</select>

					<input type="submit" value="Cari">
					</form>
							</div>
							<div class="col-md-2">
									<p>Selamat Datang, <?php echo $_SESSION['username']; ?> </p>
									<a href="controller/dologout.php"><p>Logout</p></a>
							</div>

					</div>
					
					<?php 
					include 'controller/doconnect.php';
					if(isset($_GET['id']) == null){
						$sql = "SELECT * FROM tbl_book";
					}else{
						if($_GET['id'] == "all"){
							$sql = "SELECT * FROM tbl_book";
						}else{
							$sql = "SELECT * FROM tbl_book where book_category = '".$_GET['id'] ."'";
						}
					}	
					$result = $conn->query($sql);
					?>
					<table>
						<?php 
					while($row = $result->fetch_assoc()) {
						?>
							<tr>
								<td><img class="top-s" src="<?php echo $row['book_image']?>" width="50%"></td>
							</tr>
							<tr>
								<td>Nama Buku: </td>
								<td><?php echo $row['book_name']; ?></td>
							</tr>

							<tr>
								<td>Kategory Buku: </td>
								<td><?php echo $row['book_category']; ?></td>
							</tr>
							<tr>
								<td>Harga: </td>
								<td><?php echo 'Rp '.number_format($row['book_price']); ?></td>
							</tr>
							<tr>
								<td>Pengarang: </td>
								<td><?php echo $row['book_author']; ?></td>
							</tr>
							<tr>
								<td><a href="sucess.php"><input type="button" value="Beli"></a></td>
							</tr>
							<?php 
								}
							?>
					</table>
					

					
				</div>
			</div>
	</body>
</HTML>