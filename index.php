<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<?php

	include("connection.php");
	/* Seleccionar el último registro*/
	$query = "select * from ticket order by idticket desc limit 1"; 
	$exec_query = mysql_query($query,$con);
	
	if(mysql_num_rows($exec_query)==0){
		$id = 1;
	}
	else{
		while ($rs = mysql_fetch_assoc($exec_query)) {
			$lastid=$rs['idticket']; 
			$id=$lastid+1;
		}		
	}
?>



<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2 ticket">
			</div>
			<div class="col-md-2 ticket">
			</div>
			<div class="col-md-2 ticket print-veotek">
				<div class="row">
					<div class="col-md-6 veotek-logo">
						<img class="veotek" src="img/veotek.png" width="150%">
					</div>
					<div class="col-md-6">
						<p class="text-center"><a href="registrar.php"><span onclick="window.print()" class="glyphicon glyphicon-print print" style="font-size:44px;"></span></a><br>
		                        Imprimir</p></a>
		                <p class="text-center">
	                        <form method="post" action="registrar.php" enctype="multipart/form-data">
								<div class="form-group">
									<input class="form-control buttom" type="submit" value="Imprimir" onclick="window.print()">
								</div>
							</form>
						</p>
					</div>
					
				</div>
			</div>
			<div class="col-md-2 ticket ticket-veotek">
				<img class="veotek" src="img/veotek.png" width="100%">
				<h4 class="text-center">Bienvenido</h4>
				<p class="text-center">
					<span><small>Calle 3 Sur Altos
						Col. Centro, <br>C.P. 72000
						Teléfonos 01 (222) 232 67 22
						242 07 82 - 232 19 02
					</small></span>
				</p>
				<p class="text-center">
					Tu Turno es:
					<h3 class="text-center"><?php echo $id; ?></h3>
				</p>
				<p class="text-center">
					Por favor espere su turno.
				</p>
				<h4 class="text-center">Gracias</h4>
			</div>
			<div class="col-md-2 ticket">
			</div>
			<div class="col-md-2 ticket">
			</div>
		</div>
	</div>
</body>