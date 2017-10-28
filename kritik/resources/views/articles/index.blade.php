@extends('layouts.main')

@section('content')

<div class="row">
  {{-- {!!Form::text('nama_lengkap',null,['class'=>'form-controll'])!!} --}}
<div class="col-md-8 col-md-offset-2"> 
{!! Form::open(['files'=>true]) !!}
<div class="panel panel-info">
<div class="panel-heading"> Add New Suggest</div>
  <div class="panel-body">
  	<label>Write your suggest</label>
  {{-- <form action="/articles" method="POST">
   {{csrf_field()}} --}}
   
    <input type="hidden" name="user_id" value={{ Auth::user()->id}}>
  	<textarea class="form-control" name="content" id="content"></textarea>
  	<div class="checkbox">
		<label>
			<input type="checkbox" name="live" >For Public</label>
	</div>

	<div class="form-group">
				{{-- <input type="hidden" name="article_id" value={{rand(1,1000)}}> --}}
		
				<input type="hidden" name="post_on" class="form-control" value="{{$tanggal}}">
	</div>




  </div>
	<div class="panel-footer clearfix">
	<div class="col-md-6">
		<label for="" class="custom-fle-upload">
			<i class="fa fa-image"></i>
		</label>

		<input name="gambar" id="file-upload" type="file"/>
	</div>
		<button type="submit" name="post" value="Post" class="btn btn-success pull-right btn-sm"><i class="fa fa-plus"></i>Add Suggest</button>
	</div>
	
	{{-- </form> --}}
  </div>
  {!! Form::close() !!}
 </div>
  


	@forelse($articles as $article )
		
		{!! view('articles/status_user',[

			'article'=>$article,
			'comments'	   =>App\Statuscomments::where('article_id',$article->article_id)->orderBy('id','DESC')->get(),

			'comment_count'=>App\Statuscomments::where('article_id',$article->article_id)->count(),
			'like_count'=>App\Statuslikes::where('article_id',$article->article_id)->count()


		])!!}

		@empty
		No Articles
	@endforelse
	</div>
		<div class="row">
		
		<div class="col-md-4 col-md-offset-4">	
			{{$articles->links()}}
		</div>
	</div>

	@endsection