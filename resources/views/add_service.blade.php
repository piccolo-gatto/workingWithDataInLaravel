@extends('layouts.app')

@section('content')
<form method="POST" action="">
    @csrf
    <div class="form">
        <label for="name"><b>Название услуги:</b></label>
        <input type="text" name="name" id="name">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="price"><b>Цена:</b></label>
        <input type="number" name="price" id="price">
        @error('price')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Создать</button>
</form>
@endsection
