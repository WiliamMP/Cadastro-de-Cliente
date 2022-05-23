<?php
function formataTelefone($numero){
  
    $formata = substr($numero, 0, 2);
    $formata_2 = substr($numero, 3, 5);
    $formata_3 = substr($numero, 4, 4);
    
    return "(".$formata.") " . $formata_2 . "-". $formata_3;
}