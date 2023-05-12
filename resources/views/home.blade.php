@extends('layouts/main-layout')


@section('content')

    <h1>Treni Disponibili</h1>

    <div id="train-info-container" class="container d-flex flex-wrap justify-content-center gap-3">


        @foreach ($trains as $train)

        <div class="card  {{$train->cancellato ? 'border-danger text-danger' : ''}}" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title ">{{$train->azienda}}</h5>
              <h6 class="card-subtitle mb-2">Code: {{$train->codice_treno}}</h6>
              <div class="card-text">


                <div><strong>Stazione di Partenza: </strong>{{$train->stazione_partenza}}</div>
                <div><strong>Orario di Partenza: </strong>{{substr($train->orario_partenza, 0 , 5)}}</div>
                <div><strong>Stazione di Arrivo: </strong>{{$train->stazione_arrivo}}</div>
                <div><strong>Orario di Arrivo: </strong>{{substr($train->orario_arrivo, 0 , 5)}}</div>
                <div><strong>Numero di Carrozze: </strong>{{$train->numero_carrozze}}</div>
                
              </div>

            </div>
          </div>
            
        @endforeach

        
    </div>

@endsection