@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <h1>Comics</h1>
                </div>
            </div>
            <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">Vedi tutti i fumetti</a>
        </div>
    </div>
</div>

@endsection
