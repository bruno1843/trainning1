<?php 
	$contentOver = file_get_contents('https://www.betfair.com/apostas/br/basquete/nba/golden-state-warriors-%40-cleveland-cavaliers/e-32038336');
	preg_match_all('/<li class="runner-item has-handicap">(.*?)<\/li>/s',$contentOver,$matches);
	//echo $content;
	//print_r($matches);
	//echo strip_tags($matches[1][0]);
	foreach($matches[1] as $key => $value){
		echo $value;
		echo "<hr>";
	}
	
?>