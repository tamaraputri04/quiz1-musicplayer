@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Album</h3>
<form method="post" action="{{ url('/album') }}"enctype="multipart/form-data">
	@csrf
	<table>
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="nama_album"></td>
		</tr>
		<tr>
			<th>NAMA ARTIS</th>
			<td>
				<select name="artis_id">
					@foreach($lst as $row)
					<option value="{{ $row->artis_id }}">{{ $row->nama_artis }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
@endsection