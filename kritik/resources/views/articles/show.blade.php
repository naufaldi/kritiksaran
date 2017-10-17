@extends('layouts.app')

@section('content')

<div class="row">
		
		<div class="col-md-6 col-md-offset-3">
			
			<div class="panel panel-default">
				
				<div class="panel-heading">
					
					<span> Article By User {{$article->user_id}} </span>

					<small><a href="/articles/{{$article->id}}/edit">Edit</a></small>

					<span class="pull-right"> 

					{{$article->created_at->diffForHumans()}}
					</span>

				</div>

				<div class="panel-body">
					
					{{$article->content}}



				
							

				</div>
					<div class="form-control pull-right">
					
					<a href="/articles">Back to Feed</a>

				</div>


			</div>

		</div>			

	</div>

@endsection