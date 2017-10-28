@extends('layouts.main')

@section('content')

<div class="row">
		
		<div class="col-md-8 col-md-offset-2">
			
			<div class="panel panel-default">
				
				<div class="panel-heading">
					
					Create Post

				</div>

				<div class="panel-body">
					<form action="/articles" method="POST">
					{{csrf_field()}}
						<div class="form-group">
						<input type="hidden" name="user_id" value={{ Auth::user()->id}}>
						<label for="content">Content</label>
						 <textarea name="content" class="form-control"></textarea>	

						 <input type="hidden" name="article_id" value={{rand(1,1000)}}>

						 <div class="checkbox">
						 	<label>
						 	<input type="checkbox" name="live">
						 	For Public
						 	</label>

						 </div>

						 <div class="form-group">
						 	
							<label for="post_on">Post On</label>
							<input type="hidden" name="post_on" class="form-control" value="{{$tanggal}}">



						 </div>

					</div>
					<input type="submit" class=" btn btn-success pull-right" value="Post">

					</form>
							

				</div>

			</div>

		</div>			

	</div>

@endsection