@extends('layouts.app')

@section('content')
<form method="POST" action="">
    @csrf
    <div class="form">
    	<input type="hidden" name="id" value="{{ $service->id }}">
        <label for="name"><b>Название услуги:</b></label>
        <input type="text" name="name" id="name" value="{{ old('name') ?? $service->name }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="price"><b>Цена:</b></label>
        <input type="number" name="price" id="price" value="{{ old('price') ?? $service->price }}">
        @error('price')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Сохранить</button>
</form>
@endsection
