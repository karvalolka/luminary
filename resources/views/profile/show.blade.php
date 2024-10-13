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
                            <td>{{ $char->attack_power }}</td>
                        </tr>
                        <tr>
                            <td>Защита:</td>
                            <td>{{ $char->def_power }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
