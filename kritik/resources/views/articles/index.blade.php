@extends('layouts.app')

@section('content')

<div class="row">
  {{-- {!!Form::text('nama_lengkap',null,['class'=>'form-controll'])!!} --}}
<div class="col-md-6 col-md-offset-3"> 
{!! Form::open() !!}
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
			<input type="checkbox" name="live">For Public</label>
	</div>

	<div class="form-group">
		<label for="post_on">Post On</label>
				<input type="datetime-local" name="post_on" class="form-control">
	</div>




  </div>
	<div class="panel-footer clearfix">
		<button type="submit" value="Post" class="btn btn-success pull-right btn-sm"><i class="fa fa-plus"></i>Add Suggest</button>
	</div>
	
	{{-- </form> --}}
  </div>
  {!! Form::close() !!}
 </div>
  


	@forelse($articles as $article )

		
			<div class="col-md-6 col-md-offset-3">
			
			<div class="panel panel-default">
				
				<div class="panel-heading">
					
					<span>Pengguna {{$article->user_id}} </span>
					<span class="pull-right">{{$article->created_at->diffForHumans()}}</span>

				</div>
				

				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
							<img src="{{"https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mm"}}" alt="" class="img-responsive">
						</div>
						<div class="col-md-8">
						
						<p>{{$article->ShortContent}}</p>

				 		<a href="/articles/{{ $article->id }}">Read More</a>	
					</div>
					</div>
					
				 

				</div>

				<div class="panel-footer clearfix" style="background-color: white">

					@if($article->user_id == Auth::id())

					<form action="/articles/{{$article->id}}" method="POST" class="pull-right" style="margin-left: 25px">

					{{csrf_field()}}
					{{method_field('DELETE')}}
						
						<button class="btn btn-danger btn-sm">
							Delete
						</button>

					</form>

					@endif
					<button class="btn btn-success btn-xs"><i class="fa fa-thumbs-up " aria-hidden="true"></i>Like Suggest</button>
					


				</div>

			</div>

		</div>	
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