<?php
// SELECT * FROM coleta WHERE id = {id};
$data = '[
	{
		"id": 1,
		"latitude": -21.32832,
		"longitude": -47.74079,
		"plastico": 0,
		"papel": 1,
		"metal": 0,
		"vidro": 1,
		"borracha": 0,
		"bateria": 1,
		"oleo": 1,
		"eletronico": 1,
		"status": "SOLICITADO",
		"coletor": "",
		"timestamp": ""
	}
]';
$myJSON = json_encode($data);
echo $myJSON;
?>