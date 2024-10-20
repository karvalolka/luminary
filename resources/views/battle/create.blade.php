@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="h3 mb-0 text-gray-800">Создать бой</h1>

        <div class="form-group">
            <label>Атакующий:</label>
            <p>{{ $selectedAttacker->nickname }}</p>
        </div>

        <div class="mt-4">
            <h3>Приглашение на бой:</h3>
            <a href="{{ route('battle.start', ['attackerId' => $selectedAttacker->id]) }}">
                {{ $selectedAttacker->nickname }} вызывает на бой!
            </a>
        </div>
    </div>
@endsection
