<?php

////////////////////////////////////////////////////////////////////////////////
// QBCORE PARA ESX
////////////////////////////////////////////////////////////////////////////////
function QBCoreToesx($luaCode) {
    // Definindo os padrões de substituição
    
    $patterns = array(

    );
    
    $replacements = array(


    );

    // Realiza as substituições
    $luaCode = preg_replace($patterns, $replacements, $luaCode);

    return $luaCode;
}

////////////////////////////////////////////////////////////////////////////////
// ESX PARA QBCORE
////////////////////////////////////////////////////////////////////////////////
function esxToQBCore($luaCode) {
    // Definindo os padrões de substituição
    
    $patterns = array(

    );
    
    $replacements = array(


    );

    // Realiza as substituições
    $luaCode = preg_replace($patterns, $replacements, $luaCode);

    return $luaCode;
}

////////////////////////////////////////////////////////////////////////////////
// QBCORE PARA VRP
////////////////////////////////////////////////////////////////////////////////
function QBCoreToVRP($luaCode) {
    // Definindo os padrões de substituição
    
    $patterns = array(
        '/local\s*QBCore\s*=\s*exports\[Config\.Core\]:GetCoreObject\(\)/',
        '/QBCore\:Notify/'
    );
    
    $replacements = array(
        '--local QBCore = exports[Config.Core]:GetCoreObject()',
        'Notify'

    );

    // Realiza as substituições
    $luaCode = preg_replace($patterns, $replacements, $luaCode);

    return $luaCode;
}
