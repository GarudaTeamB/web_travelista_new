

<h1>Membuat Post Blog</h1>

<form class="" action="/blog" method="POST">
	<input type="text" name="title" value="" placeholder="Judul"><br>
	{{ ($errors->has('title')) ? $errors->first('title'):'' }}
	<br>
	<textarea name="subject" rows="8" placeholder="Isi..."></textarea>
	{{ ($errors->has('subject')) ? $errors->first('subject'):'' }}
	<br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="" value="BUAT">
</form>