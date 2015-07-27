<h3>Tags</h3>

@foreach ($tags as $tag)
	<a href="{{ route('tag.show', $tag->name) }}"><span class="label label-info">
		{{ $tag->name }} ({{ $tag->articles()->count()}})
	</span></a>
@endforeach

