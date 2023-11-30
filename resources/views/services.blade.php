@extends('layouts.app')

@section('content')

<table>
    <tr>
        <th>name</th>
        <th>price</th>
    </tr>
    @foreach ($rows as $row)
	<tr>
		<td><a href="/service/{{$row->id}}">{{$row->name  ?? "N/A"}}</a></td>
		<td>{{$row->price  ?? "N/A"}}</td>
	</tr>
	@endforeach
	</table>
<p><a href="/service/add">Добавить услугу</a></p>
</table>

@endsection
