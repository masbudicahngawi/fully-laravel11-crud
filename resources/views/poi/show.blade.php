<ol>
	@foreach($data as $item)

	<li>{{ $item->kabkota }} | {{ $i'tem->nama }} | {{ $item->deskripsi }} | 
		{{ <a href='/poi/'$item->id'/edit'>Edit</a>}}</li>
		@endforeach
	</ol>