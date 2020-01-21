<!DOCTYPE html>
<html>

	<body style="background-color:powderblue;">
		<center>
		
			<h2>Gracias por votar por Holanda</h2><p>
			Su voto será tomado en cuenta<p>
			<img src="images/pic05.png" height="100" width="100">
	
</center>

</body>
</html>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);
?>