<form method="post" action="/poi">
	@csrf
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="{{ old('nama') }}"></td>
		</tr>
		<tr>
			<td>Area</td>
			<td>
				<select name="area_id">
					<option>==Pilih Area==</option>
					@foreach($data as $i)
					<option value="{{ $i->id }}" {{ old('area_id') == $i->id ? 'selected' : ''}}>{{ $i->nama }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>
				<textarea rows="5" name="deskripsi">{{ old('deskripsi') }}</textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit">Simpan</button>
			</td>
		</tr>
	</table>
</form>

@session('success')
<p style="background-color: blue; color:black">{{ $value }}</p>
@endsession

@if ($errors->any())
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif