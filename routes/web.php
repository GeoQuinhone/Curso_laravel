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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'outroPrincipal']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'principal']);





//Testes
/* recebendo parametros nome, categoria, assunto, mensagem - aqui é obrigatorio passar todos os parametros para nao dar erro
// para deixar um parametro opcional e nao dar erro é só colocar ex: {mensagem?} - utilizando o ? como valor padrão colocado dentro da function sempre da direita para a esquerda
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',function(
    string $nome = 'Desconhecido',
    string $categoria = 'Informação',
    string $assunto = 'Contato',
    $mensagem = 'Mensagem não informada!'
    ){
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});


Route::get('/contato/{nome}/{categoria_id}', function (string $nome, int $categoria_id = 1) {
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+',)-> where('nome', '[A-Za-z]+');
// Aqui o laravel sabe que se receber algo diferente de um valor númerico ele vai recusar a requisição da categoria
// E se o nome conter numeros ele vai recusar a requisição também


Verbo http
get
post
put
patch
delete
options
*/
