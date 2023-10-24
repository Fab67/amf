<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){

        $ida=request('menu');
        $id=decrypt($ida);

        $type=request('type');
        $post = Article::latest ()->where('categorie_id',$id)->get();
        #dd($post);
        for ($j=0; $j<12;$j++){
        $gost[]=$post[$j];
        }


        $infos=Article::all();
        $infof=$infos->where('id',14)->first();
        
                    $symb1= [' ','!','#','$','%','&','(',')','*','+',',','-','.','/',':',';','<','>','=','?','@','^','_','{','}','|','~',' ` ',"'",'"' ];
$symb2=  ['é','è','ê','ô','à','’','«','.','»','…','É','î'] ;
$repla2= ['e','e','e','o','a','-','-','-','-','-','E','i'];
        
        return view('afrique',[
            "article"=>$gost,
            "type"=>$type,
              "info"=>$infof,
               "symb1"=>$symb1,
         "symb2"=>$symb2,
         "repla2"=>$repla2
        ]);
    }
}
