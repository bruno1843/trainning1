<?php
	$contentOver = file_get_contents('https://www.betfair.com/sport/basketball/nba/new-york-knicks-boston-celtics/32053366');
	preg_match_all('/<li class="runner-item has-handicap">(.*?)<\/li>/s',$contentOver,$matches);
	//echo $contentOver;
	//print_r($matches);
	//echo strip_tags($matches[1][0]);

	echo '<h3>Name</h3>';
	$wait = 'Verificação de nomes dentro de uma "tabela" ';
	//form to get numberPlayer or namePlayer
	echo '<form method="post" action="getFront0- over.php">';
	echo '<input type="text" name="searchOdd" placeholder="Digite sua busca">';
		
	echo '<br><br>';            
	
	echo '<h3>Number</h3>';
	//form to get numberPlayer or namePlayer
	echo '<form method="post" action="getFront0- over.php">';
	echo '<input type="number" name="searchOdd1" step="any" min="0" max="100" placeholder="Digite sua busca">';
	echo '<input type="submit" value="Submit" name="submit" value="Enviar">';
	echo '</form>';
	
	if (isset($_POST['submit'])) {
	$valor = $_POST['searchOdd'];
	$valor1 = $_POST['searchOdd1'];
	// fazer algo com o valor
	} else {
	echo $wait;
	}
	
	
	$valor_campo = $valor;
	$valor_campo1 = $valor1;
	
	echo "<br>";
	echo "<hr>";
	$over19 = $valor_campo;
	$over18 = $valor_campo1;
	$copy_array = array_values($matches);
	foreach($matches[1] as $key => $value){       //for no vetor matches para pegar a key o valor;
		$pos = strpos($value,$over18);       // mb_strpos (!!)
		$pos1 = strpos($value,$over19);		//pega os valores especificos da odds de 1.8 e 1.9 consecutivamente
		$valorValue = array();
		$valorValue = $value;
		
		
		
		if($pos1 === false){
			echo '';
		}else{
			preg_match_all('!\d+!', $valorValue, $matches);    // aqui é onde pegamos a posição dos valores cotação
			$valueToFunction19 = $valorValue;
			echo $value;
		}
		
		if($pos === false){
			echo '';
		}else{ 
			preg_match_all('!\d+!', $valorValue, $matches);   // aqui é onde pegamos a posição dos valores cotação
			$valueToFunction18 = $valorValue;
			echo $value;
		}
		echo "<br>";
	}
	echo '<hr><br><br><br>';
	
	$getArray = array($copy_array);
	
	echo $getArray;
	
	echo "<hr>";
	
	
	
?>