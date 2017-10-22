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
						<br>
						
						<p>{{$article->ShortContent}}</p>

				 		<a href="/articles/{{$article->article_id}}">Read More</a>	
					    </div>

					    <div class="col-md-12">
					    <hr>
						<ul class="list-unstyled list-inline">
							<li>
								<button type="submit" class="btn btn-success btn-xs"data-toggle="collapse" data-target="#view-comments-{{$article->article_id}}" aria-expanded="false" aria-controls="view-comments-{{$article->article_id}}"><i class="fa fa-comments-o"></i>View &amp;Comments</button>
							</li>
							<li>

								{!! Form::open() !!}
								{!! Form::hidden('like_status',$article->id) !!}
					 			{!! Form::close() !!}
								<button class="btn btn-success btn-xs"><i class="fa fa-thumbs-up " aria-hidden="true"></i>Like Suggest</button>
								
							</li>
						</ul>
						<span class="pull-right">{{$article->post_on}}</span>
			   	</div>
			   </div>
			 </div>	
				<div class="panel-footer clearfix" style="background-color: white">	

					{{Form::open(array('url'=>'articles/comments'))}}
					{{Form::hidden('post_comment',$article->article_id)}}

					<div class="input-group">
      					<input type="text" class="form-control" placeholder="Your Comment" name="comment_text" id="comment_text">
      					<span class="input-group-btn">
        					<button class="btn btn-default"  type="submit"><i class="fa fa-send"></i> </button>
      					</span>
    				</div>
    				<br>

					{{Form::close()}}

					<div class="collapse" id="view-comments-{{$article->article_id}}">
					    	
					    	@if($comments->first())
					    		
					    		@foreach($comments as $c)
									
									
									<blockquote style="font-size:13px;">
										<div class="row">
											<div class="col-md-1">
												<img src="{{"https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mm"}}"  class="img-responsive">
											</div>

											<div class="col-md-11">
												<ul class="list-inline list-unstyled">
													<li>
														<a href="">{{\App\User::find($c->user_id)->name}}</a>
													</li>
													<li>
														posted {{$c->created_at->diffForHumans()}}
													</li>
												</ul>
												<p>{{$c->comment_text}}</p>
											</div>
										</div>
									</blockquote>
									

					    		@endforeach

					    		@else
					    		   <b> No Comment</b>

					    	@endif
					</div>
					@if($article->user_id == Auth::id())
					<form action="/articles/{{$article->article_id}}" method="POST" class="pull-right" style="margin-left: 25px">

					{{-- {{Form::open()}}
					{{Form::hidden('/articles/{{$article->article_id}}')}} --}}

					{{csrf_field()}}
					{{method_field('DELETE')}}
						
						<button class="btn btn-danger btn-sm">
							Delete
						</button>
					</form>
					{{-- {{Form::close()}} --}}
					@endif
				</div>
			</div>
		</div>