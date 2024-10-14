@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-100 mt-5">
            <div class="col mb-5">
                <div class="text-start">
                    <h5 class="fw-bolder">{{ $char->nickname }}</h5>
                    <table>
                        <tr>
                            <td style="width: 100px;">Раса:</td>
                            <td>{{ $char->getRaceName()}}</td>
                        </tr>
                        <tr>
                            <td>Грейд:</td>
                            <td>{{ $char->getGradeName() }}</td>
                        </tr>
                        <tr>
                            <td>Фракция:</td>
                            <td>{{ $char->getFractionName() }}</td>
                        </tr>
                        <tr>
                            <td>Уровень:</td>
                            <td>#</td>
                        </tr>
                        <tr style="background-color: #d9d9d9;">
                            <td>Опыт:</td>
                            <td>{{ $char->exp }}</td>
                        </tr>
                        <tr style="background-color: #ffcccc;">
                            <td>HP:</td>
                            <td>{{ $char->hp }}</td>
                        </tr>
                        <tr style="background-color: #cce5ff;">
                            <td>MP:</td>
                            <td>{{ $char->mp }}</td>
                        </tr>
                        <tr>
                            <td>Атака:</td>
                            <td>
                                @if ($weapon)
                                    {{ $char->attack_power + $weapon->power }}
                                @else
                                    {{ $char->attack_power }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Защита:</td>
                            <td>{{ $char->def_power }}</td>
                        </tr>
                        <tr>
                            <td>Оружие:</td>
                            <td>{{ $char->weapon ? $char->weapon->name : 'Нет оружия' }}</td>
                        </tr>
                    </table>

                    <form action="{{ route('chars.equip', $char->id) }}" method="POST">
                        @csrf
                        <select name="weapon_id" required>
                            @foreach ($weapons as $weapon)
                                <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Надеть оружие</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
