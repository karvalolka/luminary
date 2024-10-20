@extends('layouts.main')
@section('content')
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <h1 style="text-align: center;">Результат боя</h1>
        <div style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; background-color: #fff;">
            @foreach ($battleLog as $message)
                <div style="margin-bottom: 15px; padding: 10px; border: 1px solid #e0e0e0; border-radius: 5px;">
                    <p style="margin: 0; font-weight: bold;">
                        {!! $message !!}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
