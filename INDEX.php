<!DOCTYPE html>
<html>
<head>
	<title>Actividades</title>
</head>

<body>

	<h3> Lista de actividades </h3> <br>
	
1.      Imprima un programa que dados 2 números “a” y “b”, imprima en pantalla el mayor número de estos 2 <br>

2.      Escribe un programa que dados 3 números “a”, “b” y “c”, imprima en pantalla el menor número (sin utilizar arreglos) <br>

3.      Escribe un programa que dados 4 números, “a”, “b”, “c” y “d”, imprima en pantalla el mayor número de estos 4 y el menor de estos 4 (sin usar arreglos) <br>

4.      Escribe un programa que dado un número “n”, determine si “n” es par o impar <br>

5.      Escribe un programa dado un arreglo de 10 números enteros, encuentre el número más grande en dicho arreglo <br>

6.      Escribe un programa dado un arreglo de números enteros con “N” elementos, y dos variables enteras 0<=a, b<=N, que intercambie los valores del arreglo[a], y arreglo[b], es decir, que antes de ejecutarse arreglo[a]=c y arreglo[b]=d, al terminar la ejecución arreglo[a]=d y arreglo[b]=c <br>

7.      Escribe un programa que dado un número entero N, muestre en pantalla el último dígito a la derecha de dicho número <br>

8.      Escribe un programa que, dado un entero n, escriba en pantalla cuantos dígitos tiene n <br>

9.      Escribe un programa que dado un arreglo de N enteros y dado X, escriba en pantalla cuantas veces aparece X en el arreglo  <br>

10.   Escribe un programa que, dado un arreglo de N enteros, imprima todos los pares que hay en dicho arreglo y luego todos los impares que hay en dicho arreglo <br>

11.   Escribe un programa que dado un arreglo de N enteros, coloque todos los números de dicho arreglo al revés. Es decir, para un arreglo de entrada {1, 3, 2}, el arreglo de salida deberá ser {2,3,1} (Solo se utilizará un arreglo) <br>

12.   Escribe un programa que dada una matriz, imprima dicha matriz rotada 90 grados <br>

13.   Escribe un programa que dado un número N, imprima la suma de sus dígitos. <br>

<h4> Selecciona un Opcion </h4>



	<form action="" method="Post" >
		<input type="radio" name="opc[]" value="Primer" selected>Primer Programa</input><br>
		<input type="radio" name="opc[]" value="Segundo">Segunda Programa</input><br>
		<input type="radio" name="opc[]" value="Tercero">Tercer Programa</input><br>
		<input type="radio" name="opc[]" value="Cuarto">Cuarto Programa</input><br>
		<input type="radio" name="opc[]" value="Quinto">Quinto Programa</input><br>
		<input type="radio" name="opc[]" value="Sexto">Sexto Programa</input><br>
		<input type="radio" name="opc[]" value="Septimo">Septimo Programa</input><br>
		<input type="radio" name="opc[]" value="Octavo">Octavo Programa</input><br>
		<input type="radio" name="opc[]" value="Noveno">Noveno Programa</input><br>
		<input type="radio" name="opc[]" value="Decimo">Decimo Programa</input><br>
		<input type="radio" name="opc[]" value="Onceavo">Onceavo Programa</input><br>
		<input type="radio" name="opc[]" value="Doceavo">Doceavo Programa</input><br>
		<input type="radio" name="opc[]" value="Treceavo">Treceavo Programa</input><br>
		<input type="submit" name="submit" value="Seleccionar"></input>
	</form>



	<?php
	
	$opciones = isset($_POST['opc'])? $_POST['opc']: null; //Metodo para mitigar el error de Index indefinido
	
	if(isset($_POST['submit'])){
	
		
		foreach($opciones as $resp){ //ciclo para recorrer cada una de las opciones
			echo "<br>",$resp,"<br>"; //Muestra la opcion seleccionada
			if($resp == 'Primer'){ //Primer programa
				
				$numero1 = 36; //Numeros a evaluar
				$numero2 = 46;
				
					
		
				if($numero1 > $numero2){ //Validacion para ver que numero es mas grande de los dos
		
					echo 'El numero: ', $numero1,' es mayor que: ', $numero2;
		
				}else{//Si no se cumple la validacion
					echo 'El numero: ', $numero2,' es mayor que: ', $numero1;
					}
				
			}if($resp == 'Segundo'){//Segundo Programa 
				
				$numero1 = 36;//Numeros a evaluar
				$numero2 = 46;
				$numero3 = 90;
				
					
		
				if($numero1 > $numero2 && $numero1 > $numero3){ //Validacion para ver que numero es mas grande de los tres
		
					echo 'El numero: ', $numero1,' es mayor que los demas numeros: ', $numero2, ',',$numero3; 
		
				}elseif($numero2 > $numero1 && $numero2 > $numero3 ){ //Siguiente Validacion
						echo 'El numero: ', $numero2,' es mayor que los demas numeros: ', $numero1, ',',$numero3;
					}else{ //Si ninguna se cumple
						echo 'El numero: ', $numero3,' es mayor que los demas numeros: ', $numero1, ',',$numero2;
					}
				
			}if($resp == 'Tercero'){ //Tercer programa 
				
				$numero1 = 36;//Numeros a evaluar
				$numero2 = 46;
				$numero3 = 90;
				$numero4 = 100;
					
		
				if($numero1 > $numero2 && $numero1 > $numero3 && $numero1 > $numero4){ //Validacion para ver que numero es mas grande de los cuatro
		
					echo 'El numero: ', $numero1,' es mayor que los demas numeros: ', $numero2, ',',$numero3,',',$numero4; 
		
				}elseif($numero2 > $numero1 && $numero2 > $numero3 && $numero2 > $numero4 ){ //Siguiente Validacion
						echo 'El numero: ', $numero2,' es mayor que los demas numeros: ', $numero1, ',' ,$numero3, ',' ,$numero4;
					}elseif($numero3 > $numero1 && $numero3 > $numero2 && $numero3 > $numero4){ //Siguiente Validacion
						echo 'El numero: ', $numero3,' es mayor que los demas numeros: ', $numero1, ',' ,$numero2, ',' ,$numero4;
					}else{ //Si ninguna se cumple
						echo 'El numero: ', $numero4,' es mayor que los demas numeros: ', $numero1, ',' ,$numero2, ',' ,$numero3;
					}
				
			}if($resp == 'Cuarto'){ //Cuarto Programa
				
				$numero = 53;//Numero a evaluar
				
				if($numero % 2 == 0){ //Se utiliza la funcion modulo (Si todo numero dividido entre dos da cero es par)
					echo 'El numero: ', $numero, ' es par!'; 
				}else{ //Si no, es impar
					echo 'El numero: ', $numero, ' es impar!';
				}
				
				
			}if($resp == 'Quinto'){ //Quinto Programa
				
				$arreglo = array(32,24,5,98,89,10,17,91,99,39); //Arreglo de Numeros 
				
				echo 'Tu arreglo tiene los siguientes datos: ';
				
				foreach($arreglo as $arreglito){ //Ciclo para recorrer el arreglo
					
					echo $arreglito,','; //Muestra todos los datos que contine el arreglo
				}
				
				echo '. <br> el numero mas grande de tu arreglo es: ', max($arreglo); // Nos dice con la funcion "max" cual es numero mas grande.
				
			}if($resp == 'Sexto'){ //Sexto Programa
				
				$arreglo1 = array(1,2,3,4,5);
				$arreglo2 = array(6,7,8,9,0);
				$x = 0;
				
				echo '<br> Tu arreglo no. 1 contiene los siguientes numeros: ';
				
				foreach($arreglo1 as $a){
					
					
					echo $a;
					
					$x++;
					if($x < count($arreglo1)){
						
						echo ',';
						
					}
					
				}
				
				$x = 0;
				
				echo '.<br> Tu arreglo no. 2 contiene los siguientes numeros: ';
				
				foreach($arreglo2 as $b){
					
					
					echo $b;
					
					$x++;
					if($x < count($arreglo1)){
						
						echo ',';
						
					}
					
				}
				
				$x = 0;
				
				echo '.<br> Tu arreglo no. 1 quedo de la siguiente manera: ';
				
				$remplazo1 = array_replace($arreglo1, $arreglo2);
				
				foreach($remplazo1 as $h){
					
					echo $h;
					
					$x++;
					if($x < count($remplazo1)){
						
						echo ',';
						
					}
					
				}
				
				$x = 0;
				
				echo '.<br> Tu arreglo no. 2 quedo de la siguiente manera: ';
				
				$remplazo2 = array_replace($arreglo2,$arreglo1);
				
				foreach($remplazo2 as $j){
					
					echo $j;
					
					$x++;
					if($x < count($remplazo2)){
						
						echo ',';
						
					}
					
				}
				
				echo '.';
				
			}if($resp == 'Septimo'){ //Septimo Programa
				
				$nume = 15666; //Numero a evaluar
				
				echo '<br>Tu numero es: ',$nume; //Mostarmos el numero a evaluar
				
				$conver = (string)$nume; //Se convierte de INT a STRING
				
				$arreglo = str_split($conver); //Se convierte de STRING a un arreglo 
				
				
				echo '<br> El final digito final es: ',end($arreglo); //Se muestra el fianl del arreglo
				
			}if($resp == 'Octavo'){ //Octavo Programa
				
				$nume = 33568; //Numero a evaluar
				
				echo '<br>Tu numero es: ',$nume; //Muestra el numero a evaluar
				
				$conver = (string)$nume; //Se convierte la variable de entero a string
				
				$cantidad = strlen($conver); //Se muestra la cantidad de caracteres que la variable string contiene
				//mostrando asi la cantidad de digitos
				
				
				echo '<br> Tu numero tiene ',($cantidad),' digitos. ';
				
			}if($resp == 'Noveno'){
				
				$arreglo = array(15,18,36,96,66,80,18); //Arreglo a evaluar
				$x = 18; //Numero para comprobar la cantidad de veces que se encuentra en el arreglo
				$y = 0; //variable para contabilizar
				
				echo '<br> Tu arreglo de enteros tiene los siguientes numeros: ';
				
				foreach($arreglo as $arr){ //Ciclo para recorrer el arreglo
					
					echo $arr,','; //Muestra los elementos que tiene el arreglo
					if($arr == $x){ //Valida cuando un elementos es igual al numero a comprobar
						
						$y++; //Hace un conteo cada vez que se cumpla la sentencia
						
					}
					
				}
				
				echo '<br> Tu numero es: ', $x;
				
				echo '<br> El numero que ingresaste se encuentra ',$y; // Nos muestra la cantidad de veces que el numero se encuentra
				
				if($y == 1){ //Validacion para mostrar correctamente la palabra veces o vez 
					
					echo ' vez!';
					
				}else{
					
					echo ' veces!';
					
				}
				
				
				
			}if($resp == 'Decimo'){ //Decimo Prgrama
				
				$arreglo = array(15,18,36,96,66,80,18); //Arreglo a evaluar
				$i=0; //variable contabilizadora
				$j=0;
				$k=0;
				
				echo '<br> Tu arreglo tiene los siguientes numeros: ';
				
				foreach($arreglo as $ar){ //Mostrar el arreglo
					
					echo $ar;
					
					$i++;
					
					if($i < count($arreglo)){
						
						echo ',';	
					}
					
				
				}
				
				echo '.';
				
				echo '<br> Los numeros pares son: ';
				
				foreach($arreglo as $ar){ //Ciclo para recorrer arreglo y funcion 
					
					if($ar % 2 == 0){ 
						
						echo $ar;
						$j++;
						
						if($j){
						
							echo ',';	
							
						}
				
					}
				}
				
				echo '.';
				
				echo '<br> Los numeros impares son: ';
				
				foreach($arreglo as $ar){
					
					if($ar % 2 == 0){
						
				
					}else{
						
						echo $ar;
						$k++;
						
						if($k){
						
							echo ',';	
							
						}	
						
					}
						
				}
				
				echo '.';
			
			}if($resp == 'Onceavo'){ //Onceavo
				
				$arreglo = array(15,18,36,96,66,80,18); //Arreglo a evaluar
				$reversa = array_reverse($arreglo);
				$j = 0;
				$k = 0;
				
				echo '<br>Tu arreglo es el siguiente: ';
				
				foreach($arreglo as $rev){
					
					echo $rev;
					$j++;
					
					if($j < count($arreglo)){
						
						echo ',';
						
					}
					
				}
				echo '.'; 
				
				echo '<br> Tu arreglo invertido: ';
				
				foreach($reversa as $rev){
					
					echo $rev;
					$k++;
					
					if($k < count($arreglo)){
						
						echo ',';
						
					}
					
				}
				echo '.'; 
				
			}if($resp == 'Doceavo'){
				
				$dimensiones = 10;
				$matriz = array([$dimensiones],[$dimensiones]);
				$cont = 0;
				
								
				
				for($i = 0;$i < $dimensiones; $i++ ){
					
					for($j = 0;$j < $dimensiones; $j++){

					$matriz[$i][$j] = $cont++;
											
					}
				}
				
				echo '--Tu matriz es la siguiente:-- <br>';
				
				
				function muestra($matriz,$dimensiones){
				
				for($i = 0;$i < $dimensiones; $i++ ){
					
					for($j = 0;$j < $dimensiones; $j++){

						echo $matriz[$i][$j];
					
						if($matriz[$i][$j] < 10){
						
							echo "  &nbsp;&nbsp;&nbsp;&nbsp;";
						
						}elseif($matriz[$i][$j] < 100){
						
							echo " &nbsp;&nbsp;";
						
						}else{
						
							echo "  &nbsp;";
							
						}
						
					}
					
					echo '<br>';
				}
				
				}
				
				muestra($matriz,$dimensiones);
				
				function ninety($matriz,$dimensiones){
					
					$temp = 0;
					$n = $dimensiones;
					$mat = $matriz;
					
					// Se considera cada uno de los cuadrados de la matriz
					for ($x = 0; $x < $n / 2; $x++){
						
						// Considerar cada grupo de 4 en 4
						// considerar el primer cuadro
						
						for ($y = $x; $y < $n-$x-1; $y++){
							
							// Almacenar la el primer dato de la matriz en una valriable
							$temp = $mat[$x][$y];
				 
							// mover valores de la derecha hacia arriba
							$mat[$x][$y] = $mat[$y][$n-1-$x];
				 
							// mover valores de arriba hacia la derecha
							$mat[$y][$n-1-$x] = $mat[$n-1-$x][$n-1-$y];
				 
							// mover valores de la izquierda hacia arriba
							$mat[$n-1-$x][$n-1-$y] = $mat[$n-1-$y][$x];
				 
							// asiganar el temporal hacia la izquierda
							$mat[$n-1-$y][$x] = $temp;
						
						}
					
					}
						
				
					
					muestra($mat,$dimensiones);
					
				}
				
					echo '<br>';
					echo '--Tu matriz a 90º es la siguiente:--<br>';
					
									
					ninety($matriz,$dimensiones);
							
								
			}if($resp == 'Treceavo'){
				
				$numeros = '111111';
				$conv = str_split($numeros);
				
				echo '<br>Tu numero es: ',$numeros;
				echo '<br>La suma de sus digitos es: ',array_sum($conv);
				
				
			}
			
			
	
		}
	
	}
	
	?>
</body>

</html>