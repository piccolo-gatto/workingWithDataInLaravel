@extends('layouts.app')

@section('content')

<p>
<div>Имя: {{$record->name ?? "N/A"}}</div>
</p>
<p>
<div>Номер телефона: {{$record->phone ?? "N/A"}}</div>
</p>
<p>
<div>Услуга: <a href="/service/{{$record->service->id}}">{{$record->service->name}}</a></div>
</p>
<p>
<div>Дата: {{$record->date ?? "N/A"}}</div>
</p>
<p>
<div>Время: {{$record->time ?? "N/A"}}</div>
</p>
<p>
<a href="/record/{{ $record->id }}/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="{{ route('records.delete', $record->id) }}">
@csrf
@method('DELETE')
<button type="submit">Удалить</button>
</form>
</p>

@endsection
