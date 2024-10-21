@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Создать бой</h1>

        <div class="card shadow-lg border-primary mx-auto" style="max-width: 400px;">
            <div class="card-header bg-primary text-white text-center">
                <h5>Информация о предстоящем бое</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Атакующий:</th>
                        <td>{{ $selectedAttacker->nickname }}</td>
                    </tr>
                    </thead>
                </table>

                <form action="{{ route('battle.start', ['attackerId' => $selectedAttacker->id]) }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Выберите защитника:</label>
                        <select name="defenderId" class="form-control">
                            @foreach ($defenders as $char)
                                <option value="{{ $char->id }}">{{ $char->nickname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-block">Начать бой</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-muted">Выберите защитника, чтобы начать бой!</p>
        </div>
    </div>

    <style>
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
