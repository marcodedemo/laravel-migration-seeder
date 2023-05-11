@extends('layouts/main-layout')


@section('content')

    <h1>Treni Della Settimana</h1>

    <div id="train-info-container" class="container d-flex flex-wrap justify-content-center gap-3">


        @foreach ($trains as $train)

        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$train->Azienda}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Code: {{$train->Codice_treno}}</h6>
              <div class="card-text">

                <div><strong>Data di Partenza: </strong>{{$train->Data_partenza}}</div>
                <div><strong>Stazione di Partenza: </strong>{{$train->Stazione_partenza}}</div>
                <div><strong>Orario di Partenza: </strong>{{substr($train->Orario_partenza, 0 , 5)}}</div>
                <div><strong>Stazione di Arrivo: </strong>{{$train->Stazione_arrivo}}</div>
                <div><strong>Orario di Arrivo: </strong>{{substr($train->Orario_arrivo, 0 , 5)}}</div>
                <div><strong>Numero di Carrozze: </strong>{{$train->Numero_carrozze}}</div>
                
              </div>

            </div>
          </div>
            
        @endforeach

        
    </div>

@endsection