@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Результат боя</h1>
        <h2>{{ $attacker->nickname }} vs {{ $defender->nickname }}</h2>
        <div>
            @foreach ($battleLog as $message)
                <p>{{ $message }}</p>
            @endforeach
        </div>
        <a href="{{ route('battle.create', ['attackerId' => $attacker->id]) }}" class="btn btn-secondary">Создать новый бой</a>
    </div>
@endsection
