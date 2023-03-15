@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            
                  <h1 class="card-title">Comics</h1>
             
            <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">Vedi tutti i fumetti</a>
        </div>
    </div>
</div>

@endsection
