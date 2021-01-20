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
    <div id="app">
        <h2>
            Our bikes
        </h2>
        <ul>
            <li v-for="bike in bikes">
                <h3>
                  Modello:  @{{bike.modello}}
                </h3>
                <h3>
                    Modello:  @{{bike.marca}}
                  </h3>
                  <h3>
                    Modello:  @{{bike.targa}}
                  </h3>
            </li>
        </ul>
    </div>
    
@endsection