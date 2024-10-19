@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2>Персонажи</h2>
            <ul>
                <li>{{ $attacker->nickname }}
                    <a href="{{ route('battle.start', ['attackerId' => $attacker->id, 'defenderId' => $defender->id]) }}">
                        Пригласить на бой
                    </a>
                </li>
                <li>{{ $defender->nickname }}</li>
            </ul>
        </div>
    </div>
@endsection
