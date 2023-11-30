@extends('layouts.app')

@section('content')

<p>
<div>Название услуги: {{$service->name ?? "N/A"}}</div>
</p>
<p>
<div>Цена: {{$service->price ?? "N/A"}}</div>
</p>
<p>
<a href="/service/{{ $service->id }}/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="{{ route('services.delete', $service->id) }}">
@csrf
@method('DELETE')
<button type="submit">Удалить</button>
</form>
</p>


@endsection
