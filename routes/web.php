<?php

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SitemapXmlController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/information', function () {

        $categorie=Categorie::all();
        return view('dash',[
            'cat'=>$categorie
        ]);
    })->name('dash');

    Route::post('save', [SaveController::class, 'create'])->name('save-info');
        Route::get('liste', [SaveController::class, 'lister'])->name('liste');
           Route::post('destroy', [SaveController::class, 'destroy'])->name('destroy');
           Route::get('update/{id}', [SaveController::class, 'edit'])->name('edit');
           Route::post('updates/{id}', [SaveController::class, 'update'])->name('updates');
           
});

Route::get('/', function () {
    $post = Article::latest ()->where('categorie_id',1)->get();
    $sport = Article::latest ()->where('categorie_id',5)->get();
    $tech = Article::latest ()->where('categorie_id',6)->get();
    $people= Article::latest ()->where('categorie_id',7)->get();
    $cdm = Article::latest ()->where('categorie_id',8)->get();
    $info= Article::latest ()->where('categorie_id',9)->get();
    $web = Article::latest ()->where('categorie_id',10)->get();
    $afrique= Article::latest ()->where('categorie_id',11)->get();
    $env= Article::latest ()->where('categorie_id',13)->get();


    #dd($post);
        for ($j=0; $j<13;$j++){
             $gost[]=$post[$j];
           }
 #dd($cdm);
        for ($j=0; $j<4;$j++){
            $gost[]=$cdm[$j];
            }
 #dd($web);
        for ($j=0; $j<4;$j++){
            $gost[]=$web[$j];
            }
 #dd($sport);
        for ($j=0; $j<4;$j++){
            $gost[]=$sport[$j];
            }
 #dd($afrique);
        for ($j=0; $j<4;$j++){
            $gost[]=$afrique[$j];
            }
 #dd($tech);
        for ($j=0; $j<4;$j++){
            $gost[]=$tech[$j];
            }
#dd($env);
        for ($j=0; $j<4;$j++){
            $gost[]=$env[$j];
            }
#dd($env);
        for ($j=0; $j<4;$j++){
            $gost[]=$people[$j];
            }
#dd($info);
        for ($j=0; $j<6;$j++){
            $tost[]=$info[$j];
            }
            #dd($tost);
            
            
            $infos=Article::all();
            $infof=$infos->where('id',14)->first();
            
              $symb1= [' ','!','#','$','%','&','(',')','*','+',',','-','.','/',':',';','<','>','=','?','@','^','_','{','}','|','~',' ` ',"'",'"' ];
$symb2=  ['é','è','ê','ô','à','’','«','.','»','…','É','î'] ;
$repla2= ['e','e','e','o','a','-','-','-','-','-','E','i'];
            
            
    return view('acc',[
        "article"=>$post,
        "cdm"=>$cdm,
        "web"=>$web,
        "sport"=>$sport,
        "afrique"=>$afrique,
        "tech"=>$tech,
        "Environnement"=>$env,
        "people"=>$people,
        "infos"=>$tost,
        "info"=>$infof,
         "symb1"=>$symb1,
         "symb2"=>$symb2,
         "repla2"=>$repla2

    ]);
})->name('info+');

#Route::view('france', 'france')->name('france');
#Route::view('page', 'page')->name('page');
#Route::post('page', [SaveController::class, 'affiche'])->name('page');


Route::get('pag/{type?}/{t?}/{info_id}', [SaveController::class, 'affiche'])->name('pag');// GERE L'AFFICHAGE DES INFOS D'UNE ARTICLE

Route::get('Afrique', [MenuController::class, 'menu'])->name('afrique');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Immobilier', [MenuController::class, 'menu'])->name('Immobilier');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Monde_politique', [MenuController::class, 'menu'])->name('politique');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Musique', [MenuController::class, 'menu'])->name('musique');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Cinema', [MenuController::class, 'menu'])->name('cinema');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Sport', [MenuController::class, 'menu'])->name('sport');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('People', [MenuController::class, 'menu'])->name('news');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Instant_web', [MenuController::class, 'menu'])->name('web');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Tech', [MenuController::class, 'menu'])->name('Tech');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('Environnement', [MenuController::class, 'menu'])->name('Environnement');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('people', [MenuController::class, 'menu'])->name('people');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
Route::get('info', [MenuController::class, 'menu'])->name('info');// GERE L'AFFICHAGE D'UNE PAGE DU MENU
#Route::get('instantane', [MenuController::class, 'menu'])->name('instant');// GERE L'AFFICHAGE D'UNE PAGE DU MENU


/*Route::get('/afrique', function () {
    $post = Article::latest ()->get();
    #dd($post);
    for ($j=0; $j<2;$j++){
    $gost[]=$post[$j];
    }
    return view('afrique',[
        "article"=>$gost
    ]);
})->name('afrique');



Route::post('/people', function () {
    $id=request('categorie_id');
    $post = Article::latest ()->where('categorie_id',$id)->get();
    #dd($post);
    for ($j=0; $j<2;$j++){
    $gost[]=$post[$j];
    }

    return view('afrique',[
        "article"=>$gost
    ]);
})->name('people');*/

Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

Route::get('/log', [Savecontroller::class, 'log'])->name('log1');


