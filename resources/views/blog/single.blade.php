<h1>HALAMAN SINGLE</h1>

{{ $blog -> title}}
<br>
{{ $blog ->subject }}
<br>
<a href="/blog/{{$blog -> id}}/edit">EDIT</a>

<a href="/blog">KEMBALI</a>