

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
          <h1 class="card-title">Modifica il fumetto {{ $comic->id }}</h1>
          <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">Torna indietro</a>
        </div>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
          @csrf

          
          @method('PUT')

          <div class="mb-3">
            <label for="title" class="form-label">Titolo *</label>
            <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci il titolo..." value="{{ $comic->title }}">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci la descrizione..." value="{{ $comic->description }}"></textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci url dell'immagine..." value="{{ $comic->thumb }}">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo..." value="{{ $comic->price }}">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Serie *</label>
            <input type="text" class="form-control" name="series" id="series" required maxlength="255" placeholder="Inserisci la serie..." value="{{ $comic->series }}">
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci la data di vendita..." value="{{ $comic->sale_date }}">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Tipo *</label>
            <input type="text" class="form-control" name="type" id="type" required maxlength="255" placeholder="Inserisci il tipo..." value="{{ $comic->type }}">
          </div>
          <p>I campo contrassegnati con * sono <b>obbligatori</b>.</p>
          <button class="btn btn-warning" type="submit">
            Aggiorna
          </button>
        </form>
    </div>
</div>

@endsection