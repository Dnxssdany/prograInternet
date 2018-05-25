<!DOCTYPE html>
<html>
<head>
	<title>Actividades</title>
</head>

<body>

	<form action="" method="Post" >
		<input type="radio" name="opc[]" value="Primer">Primer Programa</input>
		<input type="radio" name="opc[]" value="Segundo">Segunda Programa</input>
		<input type="radio" name="opc[]" value="Tercer">Tercer Programa</input>
		<input type="radio" name="opc[]" value="Cuarto">Cuarto Programa</input>
		<input type="radio" name="opc[]" value="Quinto">Quinto Programa</input>
		<input type="radio" name="opc[]" value="Sexto">Sexto Programa</input>
		<input type="radio" name="opc[]" value="Septimo">Septimo Programa</input>
		<input type="radio" name="opc[]" value="Octavo">Octavo Programa</input>
		<input type="radio" name="opc[]" value="Noveno">Noveno Programa</input>
		<input type="radio" name="opc[]" value="Decimo">Decimo Programa</input>
		<input type="radio" name="opc[]" value="Onceavo">Onceavo Programa</input>
		<input type="radio" name="opc[]" value="Doceavo">Doceavo Programa</input>
		<input type="radio" name="opc[]" value="Treceavo">Treceavo Programa</input>
		<input type="submit" name="submit" value="Seleccionar"></input>
	</form>



	<?php
	
	if(isset($_POST['submit']))
	{
	
		
		if($_POST['opc'] == 'Primer'){
			$numero1 = 1;
			$numero2 = 35;
		
			if($numero1 > numero2){
		
				echo 'El numero: ', $numero1,' es mayor que: ', $numero2;
		
			}else{
				echo 'El numero: ', $numero2,' es mayor que: ', $numero1;
		}
		}
	
	}
	
	?>
</body>

</html>