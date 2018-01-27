{{ Session::get('message') }}
<br>
<h1>LIST SEMUA BLOG</h1>
<hr>
@foreach($blogs as $blog)
 	<a href="/blog/{{$blog->id}}"><p>{{$blog -> title}}</p></a>	
			   <p>{{$blog -> subject}}</p>
	<a href="/blog/{{$blog -> id}}/edit">EDIT</a>

	<form class="" action="/blog/{{$blog->id}}" method="post">
		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" name="" value="HAPUS" onclick="return confirm('Anda yakin ingin menghapus data ini..?')">
	</form>
	
<hr>
@endforeach
