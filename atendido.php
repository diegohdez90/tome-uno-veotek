<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="icon" href="img/eo.ico" type="image/gif" sizes="16x16">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=siguiente.php">
</head>


<?php
	include('connection.php');

	$fecha = date("Y-m-d");

	$hora = date("H:i:s");

	$id = $_POST['id'];
	
	$update = "update ticket set atendido=TRUE where idticket = '$id'";

	$result = mysql_query($update, $con) or die(mysql_error());

	if ($result) {
		die("<div class='container'><div class='row result'><img class='veotek' src='img/veotek.png' width='100%''><h3 class='text-center'>Consultado siguiente turno</h3></div></div>");
?>
	<script type="text/javascript">
		$('.buttom').click(function(){
			$('.print').css("pointer-events", "auto");
			$('.buttom').prop("disabled",true);
		});
	</script>
<?php
	}
?>