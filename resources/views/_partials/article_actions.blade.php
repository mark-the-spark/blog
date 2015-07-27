{!! Form::open(array('route' => array('article.destroy', $article->id), 'method' => 'delete')) !!}
<button type="submit" class="btn btn-danger">Delete Article</button>
{!! Form::close() !!}
<a class="btn btn-default" href="{{ url($article->id) . '/edit'}}" role="button">Edit Article</a>