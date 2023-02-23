<!DOCTYPE html>
<html>
<head>


<script>  
</script>

</head>
<body>
	 <?php
		session_start(); // inicia-se a sessão para que cada valor adiquirido dos inputs seja separados
	
		echo "<h3>Valor</h3><br>";
		
		$submitValor = NULL;
		$submitSearch = NULL;
		
		if(isset($_POST['submit1'])){
				$_SESSION['arrayValor'] = array($_POST['inputValor']);   //inputValor pego do input do form, e session guardando o valor
				//$inputValue = array($_POST['inputValor']);
				//$inputValue = $_POST['inputValor'];
		} elseif(isset($_POST['submit2'])){
				$_SESSION['searchValor'] = $_POST['searchValor'];
				//$inputValue = $_POST['inputValor'];
		} else {
			$_SESSION['searchValor'] = " ";
			$_SESSION['arrayValor'][0] = " ";
		}
		
		echo "<pre>";
	    print_r("O valor recebido é: " . $_SESSION['arrayValor'][0]); //printa o valor de arrayValor
		echo "</pre>";
		
		echo "<br><br><h3>Valor da pesquisa</h3>";
		echo "<pre>";
		print_r("O valor recebido é: " . $_SESSION['searchValor']);
		echo "</pre>"; 
		
		echo "<hr>";
	
		
		
		
		$input1 = isset($_SESSION['arrayValor'][0]) ? $_SESSION['arrayValor'][0] : '';
		$input2 = isset($_SESSION['searchValor']) ? $_SESSION['searchValor'] : '';     
		$getInput1 = str_split($input1);
		echo "<br><br>";
		
		//print_r($getInput1);
		//echo $input2;
		
	
		$pos = strpos(strtolower($input1), strtolower($input2));
		$count = 0;
		while ($pos !== false && $pos <= strlen($input1) && $count < count($getInput1)) {
			if(isset($getInput1[$count]) && $input2 == $getInput1[$count]){
			echo "A letra '$input2' foi encontrada em '$input1' na posição $pos<br>";
			}else{
				echo "<br>";
			}
			$pos++;
			$count++;
		}
		
		



//o if abaixo verifica apenas a palavra por completo
		//if(in_array(strtolower($_SESSION['searchValor']), array_map('strtolower',$_SESSION['arrayValor']))){
		//	echo "<pre>";print_r("O valor de '" . $_SESSION['searchValor'] . "' foi encontrado no array.");echo "</pre>";
		//} else {
		//	echo "<pre>";print_r("O valor de '" . $_SESSION['searchValor'] . "' não foi encontrado no array."); echo "</pre>";
		//}
		
		//verifica 1 letra não todas
		//$found = false;
		//foreach ($_SESSION['arrayValor'] as $value) {
		//	$count = 0;
		//	$pos = strpos(strtolower($value), strtolower($_SESSION['searchValor']));
		//	while ($pos !== false) {
		//		$found = true;
		//		$count++;
		//		if ($count >= count($_SESSION['arrayValor'])) {
		//		echo "A letra ' ". $_SESSION['searchValor'] ." ' foi encontrada em $value na posição $pos <br>";
		//		$pos = strpos(strtolower($value), strtolower($_SESSION['searchValor']), $pos + 1);
		//		break;
		//		}
				
				
		//	}
	//	}

	//	if (!$found) {
	//		echo "A busca ' ". $_SESSION['searchValor'] . " ' não foi encontrada em nenhum elemento do array.";
	//	}
		
	?>

	<h2>Digite um valor</h2>
	<form method="post"> <!-- action é o arquivo(endereço) -->
		<br><input id="inputText" name="inputValor" type="text" placeholder="Nomes" value="<?php echo $input1; ?>">                            
		<input id="inputNumber" type="number" placeholder="Numeros">
		<button type="submit" name="submit1">Enviar</button><br><br>
	</form>
	
	<hr>
	
	<h2>Digite a pesquisa do valor</h2>
	<form method="post">
		<input id="inputText2" name="searchValor" type="text" placeholder="Nomes" value="<?php echo $input2; ?>">
		<button type="submit" name="submit2">Enviar</button>
	</form>

   
	
	
	<script>
	  const input = document.querySelector("#inputText");

	  input.addEventListener("input", function() {
		const inputValue = this.value;
		console.log(inputValue);
	  });
	</script>
	
</body>
</html>