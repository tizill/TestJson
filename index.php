<?php
//Criando um array que Contem dados da equipe e 2 integrantes
$Equipes = array(
    'NomeEquipe' => 'Primeiro Periodo ADS',
    'Faculdade' => 'Facema',
    'Ano' => 2016,
    'LocalReuniao' => 'Base Secreta',
    'Ativo' => true,
    'Membros' => array(
    array(
        'Nome' => 'Marcelo Machado',
        'Idade' => 19,
        'ApelidoSecreto' => 'Tizill',
        'Especialidade' => array(
            'Desenvolvimento Back-end',
            'Especialista em PHP',
            'C#'
            )
        ), 
    array(
        'Nome' => 'Kauan Carvalho',
        'Idade' => 20,
        'ApelidoSecreto' => 'Gordo',
        'Especialidade' => array(
            'Desenvolvimento Front-End',
            'Especialista em Javascript',
            'CSS'
            )
        )
        ));

//Converte o Conteudo do array para uma string JSON
$json_str = json_encode($Equipes);

//Imprimir a string JSON
echo $json_str;
?>