@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
          <h1 class="card-title pt-3">Tutti i fumetti</h1>
          <a href="{{ route('comics.create') }}" class="btn btn-success mt-5 mb-5">Aggiungi un fumetto</a>

        </div>
    </div>
    <div class="row g-3">
      @foreach ($comics as $comic)
        <div class="col-4 mb-3">
         <div class="card text-center">
          <div class="card-body">
            <h2 class="card-title">{{ $comic->title }}</h2>
            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mt-5 mb-3">Vedi dettagli</a>
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning mt-5 mb-3">Modifica</a>
            <form 
            action="{{ route('comics.destroy', $comic->id) }}" 
            method="POST">
            @csrf
            
            @method('DELETE')
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
            
          </div>
         </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection