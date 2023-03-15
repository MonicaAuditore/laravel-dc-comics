@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
          <h1 class="card-title pb-5 pt-5">Tutti i fumetti</h1>
        </div>
    </div>
    <div class="row g-3">
      @foreach ($comics as $comic)
        <div class="col-4 mb-3">
         <div class="card text-center">
          <div class="card-body">
            <h2 class="card-title">{{ $comic->title }}</h2>
            <a href="#" class="btn btn-primary mt-5 mb-3">Vedi dettagli</a>

          </div>
         </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection