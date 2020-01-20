<style>
	body {
	background-color: #F8F8F8;
	}
	div.container {
	width: 960px;
	margin: 20px auto;
	}
	.navbar-brand{
	font-family: Cambria, "Times New Roman", serif;
	font-size: 25px;
	}
	h1,h2,h3 {
	text-align: center;
	font-family: Cambria, "Times New Roman", serif;
	clear: both;
	}
	#tanggal {
	float: right;
	}
	#footer {
		float: right;
	}

</style>
<div class="container">
  <p id="tanggal"><?php echo date("d M Y"); ?></p>
  <p class="navbar-brand bg-primary" href="#">Kepuasan Pengguna 2020</p>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
        <li><a href="kuesioner.php">Kuesioner</a></li>
		<!-- <li><a href="#">About</a></li> -->
     </ul>
</div>
</div>