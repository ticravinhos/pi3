<?php
echo 'latidude: '.				$_POST['latitude']		.'<br>';
echo 'longitude: '.				$_POST['longitude']		.'<br>';
echo 'Plástico: '.				$_POST['plastico']		.'<br>';
echo 'Papel: '.					$_POST['papel']			.'<br>';
echo 'Metal: '.					$_POST['metal']			.'<br>';
echo 'Vidro: '.					$_POST['vidro']			.'<br>';
echo 'Borracha: '.				$_POST['borracha']		.'<br>';
echo 'Baterias / Pilhas: '.		$_POST['bateria']		.'<br>';
echo 'Óleo de cozinha: '.		$_POST['oleo']			.'<br>';
echo 'Eletrônicos: '.			$_POST['eletronico']	.'<br>';
echo '<br>';
echo 'QUERY:<br><br>';

echo "INSERT INTO coleta (latitude, longitude, plastico, papel, metal, vidro, borracha, bateria, oleo, eletronico, status, coletor, timestamp) VALUES (".
	$_POST['latitude']. ", ".
	$_POST['longitude']. ", ".
	$_POST['plastico'].	", ".
	$_POST['papel']. ", ".
	$_POST['metal']. ", ".
	$_POST['vidro']. ", ".
	$_POST['borracha']. ", ".
	$_POST['bateria']. ", ".
	$_POST['oleo']. ", ".
	$_POST['eletronico']. ", 'SOLICITADO', null, null);";

echo '<br><br>
Deverá retornar uma mensagem ao usuário informando que a solicitação foi cadastrada com sucesso e poderá ser consultada pelo código {ID}';
?>