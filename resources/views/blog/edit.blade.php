<h1>Edit Post Blog</h1>

<form class="" action="/blog/{{$blog->id}}" method="post">
	<input type="text" name="title" value="{{$blog->title}}" placeholder="Judul"><br>
	{{ ($errors->has('title')) ? $errors->first('title'):'' }}
	<br>
	<textarea name="subject" rows="8"  placeholder="Isi...">{{$blog->subject}}</textarea>
	{{ ($errors->has('subject')) ? $errors->first('subject'):'' }}
	<br>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="" value="update">
	<a href="/blog">KEMBALI</a>
</form>