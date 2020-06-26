@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Artis</h3>
<form method="post" action="{{ url('/artis/'.$row->artis_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>NAMA ARTIS</th>
			<td><input type="text" name="nama_artis" value="{{ $row->nama_artis }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection