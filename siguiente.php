<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</head>


<?php

	include("connection.php");
	/* Seleccionar el último registro*/
	$query = "select * from ticket where atendido = FALSE limit 1"; 
	$exec_query = mysql_query($query,$con);
	
	if(mysql_num_rows($exec_query)==0){
		die("<div class='container'><div class='row result'><img class='veotek' src='img/veotek.png' width='100%''><h3 class='text-center'>No hay clientes esperando. Por favor actualiza la pantalla.</h3></div></div>");
	}
	else{
		while ($rs = mysql_fetch_assoc($exec_query)) {
			$id = $rs['idticket'];
		}		
	}
?>



<body>
	<div class="container">
		<div class="row turno">
			<h3 class="text-center">Turno:</h3>
			<p>
				<h2 class="text-center"><?php echo $id; ?></h2>
				<form method="post" action="atendido.php">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="submit">
				</form>
			</p>
		</div>
	</div>
</body>