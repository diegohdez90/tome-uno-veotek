<html>
<head>
<meta http-equiv="content-type" content="text/html; charset= UTF-8">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=siguiente.php">
</head>


<?php

	include("connection.php");
	/* Seleccionar el último registro*/
	$query = "select * from ticket where atendido = FALSE limit 1"; 
	$exec_query = mysql_query($query,$con);
	
	if(mysql_num_rows($exec_query)==0){
		die("<div class='container'><div class='row result'><img class='veotek' src='img/veotek.png' width='100%''><h3 class='text-center'>No hay clientes esperando.</h3></div></div>");
	}
	else{
		while ($rs = mysql_fetch_assoc($exec_query)) {
			$id = $rs['folio'];
		}		
	}
?>



<body>
	<div class="container">
		<div class="row turno">
			<img class="veotek" src="img/veotek.png" width="90%">
		</div>
		<div class="row turno">
			<div class="col-md-2 l">
				<img src="img/veotek.png" width="150%">
			</div>
			<div class="col-md-8 turno">
				<h3 class="text-center">Turno:</h3>
				<p>
					<h2 class="text-center"><?php echo $id; ?></h2>
					<!--<form method="post" action="atendido.php">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<input type="submit">
					</form>-->
				</p>

			</div>
			<div class="col-md-2 r">
				<img  src="img/veotek.png" width="150%">
			</div>
		</div>
		<div class="row turno">
			<img class="veotek" src="img/veotek.png" width="90%">
		</div>
	</div>
</body>