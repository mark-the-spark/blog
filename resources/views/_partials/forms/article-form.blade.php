<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
<span id="helpBlock" class="help-block">{{ $errors->first('title')}}</span>
</div>

<div class="form-group">
	{!! Form::label('body', 'Body:') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
<span id="helpBlock" class="help-block">{{ $errors->first('body')}}</span>
</div>

<div class="form-group">
	{!! Form::label('tags', 'Tags: ') !!}
	{!! Form::select('tags[]', $tags, $article->tags_list->toArray(), ['class' => 'form-control', 'multiple']) !!} 
</div>


{!! Form::submit('Submit',['class' => 'btn btn-default']) !!}