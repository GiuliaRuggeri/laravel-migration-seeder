@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Codice treno</th>
        <th scope="col">Numero carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
        <th scope="col">Data di partenza</th>

      </tr>
    </thead>
    <tbody>

     @foreach ($trains as $train)
        <tr><td>{{$train->azienda}}</td>
        <td>{{$train->stazione_di_partenza}}</td>
        <td>{{$train->stazione_di_arrivo}}</td>
        <td>{{$train->orario_di_partenza}}</td>
        <td>{{$train->orario_di_arrivo}}</td>
        <td>{{$train->codice_treno}}</td>
        <td>{{$train->numero_carrozze}}</td>
        <td>{{$train->in_orario}}</td>
        <td>{{$train->cancellato}}</td>
        <td>{{$train->data_di_partenza}}</td></tr>
     @endforeach
          
        
       
       
@endsection