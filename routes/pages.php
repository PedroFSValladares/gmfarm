<?php

use \App\Http\Response;
use \App\Controller\Pages;

/* Rota HOME */

$obRouter->get('/', [
  function () {
    return new Response(200, Pages\Home::getHome());
  }
]);

/* Rota SOBRE */
$obRouter->get('/estoque', [
  function () {
    return new Response(200, Pages\Estoque::getEstoque());
  }
]);

/* rota LOGIN */
$obRouter->get('/login', [
  function() {
    return new Response(200, Pages\Login::getLogin());
  }
]);

/* Rotas DINAMICAS */
$obRouter->get('/pagina/{idPagina}/{acao}', [
  function ($idPagina, $acao) {
    return new Response(200, 'Página ' . $idPagina . ' - ' . $acao);
  }
]);
