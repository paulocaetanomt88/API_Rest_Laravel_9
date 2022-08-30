<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></p>

# Estudo de desenvolvimento de API Rest com Laravel 9


### C:\laragon\www\API_Rest_Laravel_9 (main)
### λ php artisan route:list

  GET|HEAD        / ..................................................................................................................................................
  POST            _ignition/execute-solution ........................................... ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
  GET|HEAD        _ignition/health-check ....................................................... ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST            _ignition/update-config .................................................... ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  GET|HEAD        api/user ...........................................................................................................................................
  GET|HEAD        lojas ....................................................................................................... lojas.index › Api\LojaController@index
  POST            lojas ....................................................................................................... lojas.store › Api\LojaController@store
  GET|HEAD        lojas/{loja} .................................................................................................. lojas.show › Api\LojaController@show
  PUT|PATCH       lojas/{loja} .............................................................................................. lojas.update › Api\LojaController@update
  DELETE          lojas/{loja} ............................................................................................ lojas.destroy › Api\LojaController@destroy
  GET|HEAD        lojas/{loja}/produtos ........................................................................... lojas.produtos.index › Api\ProdutoController@index
  POST            lojas/{loja}/produtos ........................................................................... lojas.produtos.store › Api\ProdutoController@store
  GET|HEAD        lojas/{loja}/produtos/{produto} ................................................................... lojas.produtos.show › Api\ProdutoController@show
  PUT|PATCH       lojas/{loja}/produtos/{produto} ............................................................... lojas.produtos.update › Api\ProdutoController@update
  DELETE          lojas/{loja}/produtos/{produto} ............................................................. lojas.produtos.destroy › Api\ProdutoController@destroy
  GET|HEAD        produtos .............................................................................................. produtos.index › Api\ProdutoController@index
  POST            produtos .............................................................................................. produtos.store › Api\ProdutoController@store
  GET|HEAD        produtos/{produto} ...................................................................................... produtos.show › Api\ProdutoController@show
  PUT|PATCH       produtos/{produto} .................................................................................. produtos.update › Api\ProdutoController@update
  DELETE          produtos/{produto} ................................................................................ produtos.destroy › Api\ProdutoController@destroy
  GET|HEAD        sanctum/csrf-cookie .............................................................. sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show

                                                                                                                                                   Showing [21] routes
  <h1>API Rest com Laravel</h1>

Rotas da API:
Loja ou Produto

GET /lojas
GET /lojas/:id

POST /lojas

PUT /lojas/:id
PATCH /lojas/:id

DELETE /lojas/:id


--------------------------------------------------------------------------------------------------------------------
<h2>Conceitos</h2>
Termo REST significa Representational State Transfer que, em português, é “Transferência de Estado Representacional”.

Por sua definição, trata-se de um conjunto de princípios e definições necessário para a criação de um projeto com interfaces bem definidas. É uma abstração da arquitetura da Web.

<h2>Como funciona</h2>
A arquitetura Rest permite a comunicação entre aplicações.
Quando se abre o navegador, o Rest estabelece uma conexão TCP/IP com o servidor de destino. Ele envia uma requisição GET HTTP a partir do endereço informado.

Por sua vez, o servidor envia uma resposta HTTP ao navegador. A resposta pode ser em formato padrão HTML, JSON ou apresentar algum tipo de erro.

<h2>Suas principais vantagens</h2>
Ao utilizar Rest é possível perceber uma melhora nos fluxos. Isso porque as aplicações web que utilizam Rest são mais flexíveis, leves e permitem melhores resultados quando se utiliza metodologia ágil.

Atualmente, os mais utilizados pelas equipes de desenvolvimento são Json e XML, conforme a tarefa que está sendo executada.

<h2>Diferença entre Rest e Restful</h2>
Você já deve ter ouvido os termos Rest e Restful e ter ficado em dúvida. Afinal, eles são a mesma coisa? Veja a diferença;

Rest: é um conjunto de princípios de arquitetura.
Restful: é uma condição única de aplicar os conceitos de Rest.
Enquanto o primeiro está voltado à criação de serviços disponibilizados na web, o segundo é aquele que realiza a implementação desse padrão.

<h2>O que é API Rest</h2>
E como o termo Rest aparece frequentemente associado à API, vamos lembrar alguns conceitos.

API é Application Programming Interface, que utiliza requisições HTTP responsáveis pelas operações básicas necessárias para a manipulação dos dados. Algumas requisições, das quais você certamente já ouviu falar, são:

DELETE: exclui as informações;
GET: lê os dados no host;
POST: cria dados no servidor;
PUT: atualiza os registros.

Dessa maneira, para se dizer que uma API é do tipo Restful, é preciso que a primeira esteja em conformidade, como, por exemplo, com a arquitetura cliente/servidor em dia. Além disso, ter uma interface padronizada.

Em suma, as APIs Rest são mais leves e podem gerar excelentes resultados em aplicações mobile, web e Internet das Coisas.

Fonte: Coodesh https://coodesh.com/blog/dicionario/o-que-e-rest/                                                                                                                                                 
--------------------------------------------------------------------------------------------------------------------                                                                                                                                                   
