<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use Illuminate\Support\Facades\Input;



use Auth;
use App\User;
use App\Statuscomments;
use DB;


class ArticleController extends Controller
{
     protected $date;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // DB::table('post')->orderBy('id', 'desc')->pluck('title');
         //return Tes::all();
        //$tes = Tes::all();
       // $articles = DB::table('articles');
        $id_user = Auth::id();
        $article_id = Article::all(['article_id']); 
        $fotos =   User::findOrFail($id_user);
        $articles = Article::orderBy('article_id','desc')->paginate(10);


        

       
        
        // $comments = Statuscomments::where('article_id',502)->get();
       // $articles = Article::onlyTrashed()->paginate(10); //untuk menampilkan artikel yang sudah dihapus
       // $articles = Article::all();
         //$articles = DB::table('articles')->get();
        $tanggal = date('l jS \of F Y h:i:s A');
         return view('articles.index',compact('articles','fotos','tanggal'));
        //return $article_id;
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $article = new Article;
        // $article->user_id = Auth::user()->id;
        // $article->content = $request->content;
        // $article->post_on = $request->post_on;
        // $article->live = (boolean)$request->live;
        $create= Article::create($request->all());

        if ($create) {
            
            return $this->index();
        }
        else{
             echo "Error";
        }

        // DB::table('articles')->insert($request->except('_token'));

        // Article::create([

        //             'user_id'=>Auth::user()->id,
        //             'content'=>$request->content,

        //     ]);

    }


    public function comment(Request $request)
    {
        if (Input::has('post_comment')) {
            
            $status = Input::get('post_comment');
            $commentBox = Input::get('comment_text');
            $selectedStatus = Article::find($status);


            // $selectedStatus->comments()->create([

            //     'comment_text'=>$commentBox,
            //     'user_id'=>Auth::user()->id,
            //     'article_id'=>$status

            //     ]);


             Statuscomments::create([

                'comment_text'=>$commentBox,
                'user_id'=>Auth::user()->id,
                'article_id'=>$status

                ]);
            
            return redirect('/articles');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $article = Article::where('article_id',$id)->first();//filter unutuks spesifi kolom
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $article = Article::find($id);
       return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $article = Article::findOrFail($id);
        if(isset($request->live))
             $article->update(array_merge($request->all(),['live'=>1]));
        

        else
            $article->update(array_merge($request->all(),['live'=>0]));
        
       
        return redirect('/articles');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Article::destroy($id);
        //$article->forceDelete()

        return redirect('/articles');

    }
}
