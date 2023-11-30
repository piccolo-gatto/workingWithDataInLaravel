@extends('layouts.app')

@section('content')
<form method="POST" action="">
    @csrf

    <div class="form">
    <input type="hidden" name="id" value="{{ $record->id }}">
        <label for="name"><b>Имя:</b></label>
        <input type="text" name="name" id="name" value="{{ old('name') ?? $record->name }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="phone"><b>Номер телефона:</b></label>
        <input type="phone" name="phone" id="phone" value="{{ old('phone') ?? $record->phone }}">
        @error('phone')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="service"><b>Услуга:</b></label>

        <select id="service" name="service">
                @foreach ($services as $service)
			<option value="{{ $service->id }}">{{ $service->name }}</option>
		@endforeach
  	</select>
        @error('service')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="date"><b>Дата:</b></label>
        <input type="date" name="date" id="date" value="{{ old('date') ?? $record->date }}">
        @error('date')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="form">
        <label for="time"><b>Время:</b></label>
        <input type="time" name="time" id="time" value="{{ old('time') ?? $record->time }}">
        @error('time')
            <div>{{ $message }}</div>
        @enderror
    </div>    
    <button type="submit">Сохранить</button>
</form>
@endsection
