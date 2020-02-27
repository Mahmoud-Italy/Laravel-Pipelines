<table>
	@foreach($posts as $post)
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->active }}</td>
		</tr>
	@endforeach
</table>

{{ $posts->appends(request()->input())->links() }}