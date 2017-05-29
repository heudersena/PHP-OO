<?php
include_once './Classe/Cliente.class.php';
// Composiçao
echo 'Composiçao<hr>';
$Agenda = new Cliente();
$Agenda->Id = 26;
$Agenda->setContato('Heuder R. Sena', 'contato@heuder.com.br', '61993029884', '6133927806');
$Agenda->Endereco = "Distrito Federal";
$Agenda->MostraContato();