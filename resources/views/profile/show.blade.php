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
                                {{$char->getTotalAttackPower()}}
                            </td>
                        </tr>
                        <tr>
                            <td>Защита:</td>
                            <td>{{ $char->def_power }}</td>
                        </tr>
                        <tr>
                            <td>Оружие:</td>
                            <td>{{$char->getNaming()}}</td>
                        </tr>
                    </table>
                    <form action="{{ route('chars.equip', $char->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="char_id" value="{{ $char->id }}">
                        <select name="weapon_id">
                            @foreach ($weapons as $weapon)
                                <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit">Надеть оружие</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
