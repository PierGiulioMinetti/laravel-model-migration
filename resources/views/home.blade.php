@extends('layout.main')

@section('contenuto')

    <section>
        <ul>
            @foreach ($cars as $car)          
            <li>
                <h3>
                    {{$car->modello}}
                </h3>
                <div class="brand">
                    {{$car->marca}}
                    
                </div>
                <div class="plate">
                    {{$car->targa}}

                </div>
            </li>
            @endforeach
        </ul>
    </section>
    
@endsection