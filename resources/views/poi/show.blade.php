<ol>
	{{-- {{ $data }} --}}
	@foreach($data as $item)

	<li>{{ $item->kabkota }} | {{ $item->nama }} | {{ $item->deskripsi }} | <a href="/poi/{!! $item->id !!}/edit">Edit</a></li>
	@endforeach
</ol>