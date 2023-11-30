@extends('layouts.app')

@section('content')

<table>
    <tr>
        <th>name</th>
        <th>phone</th>
        <th>service</th>
        <th>date</th>
        <th>time</th>
    </tr>
    @foreach ($rows as $row)
	<tr>
		<td><a href="/record/{{$row->id}}">{{$row->name  ?? "N/A"}}</a></td>
		<td>{{$row->phone  ?? "N/A"}}</td>
		<td><a href="/service/{{$row->service->id}}">{{$row->service->name  ?? "N/A"}}</a></td>
		<td>{{$row->date  ?? "N/A"}}</td>
		<td>{{$row->time  ?? "N/A"}}</td>
	</tr>
	@endforeach
	</table>
<p><a href="/record/add">Добавить запись</a></p>
</table>

@endsection
