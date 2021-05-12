<?php

const ID = "0VpMdoRF4DBdPox4s3pPY";
const SECRET = "qyvjKZaKQuF4ZZIpHVvSXAXbGuqNTL1oSp8y1nYz";

const BASE_URL = "https://api.aerisapi.com/conditions/";

if (isset($_GET['campo_cidade'])){
    if($_GET['campo_cidade']){
        $cidade = $_GET['campo_cidade'];
        $cidade = urlencode($cidade);

        $url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

        $json  = file_get_contents($url);
        $dados = json_decode($json, true);

        if ($dados) {
            $nome = $dados['response'][0]['place']['name'];
            $temperatura = $dados['response'][0]['periods'][0]['tempC'];
            $sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
            $umidade = $dados['response'][0]['periods'][0]['humidity'];
            $velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];
        }
    }
}

include "atividade2.php";