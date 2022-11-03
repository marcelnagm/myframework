<h1>Myframework</h1>

<i>Este framework foi desenvolvido inspirado no Laravel com algumas mudancas</i>

<h5>Framework simples para fins de desenolvimento e com um crud de facil implemetanção e reuso</h5>

@Estrutura de Pastas
<ul>
<li>App - Onde fica os controllers e models do framework</li>

as rotas são definidas em App/Routes/routes.php
<br>
<code>
eg
 METHGOD@PATH => Controller@Actiob
 'get@/index' => 'App\Controllers\HomeController@index',
</code>
<br>

Para criar um Controller CRUD basta extender 
<br>
<code>
class CategoryController extends CRUDController 

e indicar qual o model   protected $model = 'App\Models\Category';

</code>


<br>

Após isso basta criar uma model com a seguinte estrutura
<br>
<p>
<code>

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Traits\IsTraceable;

class Category extends Model {

    use IsTraceable;


    protected $table = 'category';
    <br>
    static $rules = [
        'name' => 'required',
        'parent_id' => 'required',
    ];
    <br>
    protected $fillable = [
        'name',
        'parent_id'
    ];
    <br>
    protected $perPage = 5;
    static $onpage = 1;
<br>
}
</code>
</p>



<li><Você pode construir as suas migrations dentro de build_database.php/li>
</ul>
<p>
Foi adicionado o link do postman utilizado para testar o backend
para accesar utilizar o link abaixo
https://app.getpostman.com/join-team?invite_code=5929ca47a5c4231d73f51186a2336a82&target_code=635fb825aa3069e565f34666f45f662a
<p>
Primeiramente para inicar o projeto vc deve rodar os seguintes comandos
<br>
<code>
composer install
</code>
<br>
Criar um banco de dados e setas os dados de acesso em .env

em seguida rodar:
<br>
<code>
php build_database.php
</code><br>
<code>
./run.sh<br>
</code>
<br>
a partir deste momento vc pode utilizaR O POSTMAN


Bibliotecas utilizadas e finalidades
  "illuminate/database": "^8.83", <- orm
        "vlucas/phpdotenv": "^5.5", <- usar os metodo env
        "symfony/http-foundation": "^5.4", <- padronizar o tratamento a request
        "league/flysystem": "^2.5", <- gestao  de arquivpos
        "symfony/mime": "^5.4" <- informacao do mimetype
