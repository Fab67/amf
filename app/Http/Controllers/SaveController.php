<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function create()
    {

         request()->validate([
            'categorie_id'=>['required'],
            'titre'=>['required'],
            'p1'=>['required'],
            'im1'=>['required','image'],
            'titreim1'=>['required'],
            'im2'=>['required','image'],
            'titreim2'=>['required'],

         ] );

         $filename=time().'.'.request('im1')->extension();
        $path=request()->file('im1')->storeAs(
              'Avatars',
              $filename,
              'fab'
          );


          $filename2=time().'.'.request('im2')->extension();
        $path2=request()->file('im2')->storeAs(
              'Avatars',
              $filename2,
              'fab'
          );

        Auth::user()->articles()->create([
            'categorie_id'=>request('categorie_id'),
            'titre'=>request('titre'),
            'aperçue'=>request('aperçue'),
            'titre_p1'=>request('titrep1'),
            'p1'=>request('p1'),
            'titre_p2'=>request('titrep2'),
            'p2'=>request('p2'),
            'titre_p3'=>request('titrep3'),
            'p3'=>request('p3'),
             'titre_p4'=>request('titrep4'),
            'p4'=>request('p4'),
             'titre_p5'=>request('titrep5'),
            'p5'=>request('p5'),
             'titre_p6'=>request('titrep6'),
            'p6'=>request('p6'),
             'titre_p7'=>request('titrep7'),
            'p7'=>request('p7'),
             'titre_p8'=>request('titrep8'),
            'p8'=>request('p8'),
            'titre_im1'=>request('titreim1'),
            'im1'=>$path,
            'titre_im2'=>request('titreim2'),
            'im2'=>$path2,


        ]);
       #$eco= Filiere::all();
        #$ecole=Filiere::find(1)->filieres;
return redirect('/information') ;
    }


    public function affiche(){

        $type=request('type');
        $idz=request('info_id');
        #$id=decrypt($idz);


        $infos=Article::all();
      $info=$infos->where('id',$idz)->first();


        $post = Article::latest ()->get();
        #dd($post);
        for ($j=0; $j<2;$j++){
        $gost[]=$post[$j];
        }


      $relation=$info->categorie->id;
      $rel = Article::where('categorie_id', $relation)->latest ()->get();
    #  dd($rel);
        for ($j=0; $j<4;$j++){
            $rel2[]=$rel[$j];
            }

  $seoo=$infos->where('id',$idz)->first();
            $seo=$seoo->user_id;

            $seo1=User::where('id',$seo)->first();
            $nom=$seo1->name;
            
                       $symb1= [' ','!','#','$','%','&','(',')','*','+',',','-','.','/',':',';','<','>','=','?','@','^','_','{','}','|','~',' ` ',"'",'"' ];
$symb2=  ['é','è','ê','ô','à','’','«','.','»','…','É','î'] ;
$repla2= ['e','e','e','o','a','-','-','-','-','-','E','i'];

        return view('page',[
            "article"=>$gost,
            'info'=>$info,
            'relation'=>$rel2,
            'idc'=>$relation,
            'type'=>$type,
            'seo'=>$nom,
             "symb1"=>$symb1,
         "symb2"=>$symb2,
         "repla2"=>$repla2
        ]);
    }
    
    
    
      public function lister(){
            $id=Auth::user()->id;
            $liste=Article::where('user_id',$id)->latest()->get();
       #     dd($liste);

        return view('tableau',[
            "listes"=>$liste,
        ]);
    }
    
    
     public function log(Request $request)
{
    Auth::logout();
    Session::flush();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

            public function edit($id)
        {
          $categorie=Categorie::all();
    $edite = Article::findOrFail($id);

    return view('edit',[
        "edit"=>$edite,
        "cat"=>$categorie,
        ]);
}

        public function update(Request $request, $id)
            {
          request()->validate([
            'categorie_id'=>['required'],
            'titre'=>['required'],
            'p1'=>['required'],
            'im1'=>['required','image'],
            'titreim1'=>['required'],
            'im2'=>['required','image'],
            'titreim2'=>['required'],

         ] );
            
            
              $filename=time().'.'.request('im1')->extension();
        $path=request()->file('im1')->storeAs(
              'Avatars',
              $filename,
              'fab'
          );


          $filename2=time().'.'.request('im2')->extension();
        $path2=request()->file('im2')->storeAs(
              'Avatars',
              $filename2,
              'fab'
          );
            
                Article::whereId($id)->update([
                    'categorie_id'=>request('categorie_id'),
            'titre'=>request('titre'),
            'aperçue'=>request('aperçue'),
            'titre_p1'=>request('titrep1'),
            'p1'=>request('p1'),
            'titre_p2'=>request('titrep2'),
            'p2'=>request('p2'),
            'titre_p3'=>request('titrep3'),
            'p3'=>request('p3'),
             'titre_p4'=>request('titrep4'),
            'p4'=>request('p4'),
             'titre_p5'=>request('titrep5'),
            'p5'=>request('p5'),
             'titre_p6'=>request('titrep6'),
            'p6'=>request('p6'),
             'titre_p7'=>request('titrep7'),
            'p7'=>request('p7'),
             'titre_p8'=>request('titrep8'),
            'p8'=>request('p8'),
            'titre_im1'=>request('titreim1'),
            'im1'=>$path,
            'titre_im2'=>request('titreim2'),
            'im2'=>$path2,
                    ]);
            
                return redirect('/liste')->with('success', 'Article mise à jour avec succèss');
            }

        

public function destroy()
{
    $id=request('id');
    $car = Article::where('id',$id)->first();
    $car->delete();

    return redirect('/liste')->with('success', 'article supprimer avec succèss');
}
    

}
