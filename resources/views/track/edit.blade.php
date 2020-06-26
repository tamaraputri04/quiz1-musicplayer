@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Track</h3>
<form method="post" action="{{ url('/album/'.$row->artis_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="nama_album" value="{{ $row->nama_album }}"></td>
		</tr>
		<tr>
			<th>NAMA ARTIS</th>
			<td>
				<select name="artis_id">
					@foreach($lst as $rows)
					<option value="{{ $rows->artis_id }}" >{{ $rows->nama_artis }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection