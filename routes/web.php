<?php

use Illuminate\Support\Facades\Route;

/* Metodos usado anteriormente

Route::get('/', function () {
    return 'Olá seja ao sobre-nós';
});

Route::get('/sobre-nos', function () {
    return 'Olá seja ao sobre-nós';
});

Route::get('/contato', function () {
    return 'Olá seja ao contato';
});

*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('sobrenos',[\App\Http\Controllers\SobreNosController::class, 'outroPrincipal']);

Route::get('contato', [\App\Http\Controllers\ContatoController::class, 'principal']);


/* verbo http
get
post
put
patch
delete
options
*/
