@extends('annonce.master')

@section('content')

<div class="container mt-5">
    <div class="row">
        @if($annonces->isNotEmpty())
        @foreach ($annonces as $annonce)
        <div class="col-sm-4">
            <div class="card mt-5 mb-5" style="width: 18rem;">
                <div class="card-body">
                    
                    <h4 class="card-title text-center">Titre : {{ $annonce->title }}</h4>
                    <h5 class="card-text">{{ $annonce->desc }}</h5>
                    <p class="card-text">
                        <img src="{{ $annonce->picture }}" class="col" alt="img offre">
                    </p>

                    @if($annonce->picture2 != NULL)
                    <p class="card-text">
                        <img src="{{ $annonce->picture2 }}" class="col" alt="img offre">
                    </p>
                    @endif

                    @if($annonce->picture3 != NULL)
                    <p class="card-text">
                        <img src="{{ $annonce->picture3 }}" class="col" alt="img offre">
                    </p>
                    @endif

                    <h5 class="card-float">Prix {{ $annonce->price }} €</h5>
                    @if($annonce->create_by == Auth::user()->id)
                    <a class="btn btn-primary float-right mt-4" href="{{ url('annonces/edit/'.$annonce->id) }}">Modifier ou Supprimer</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h2> Pas d'annonce </h2>
        @endif
    </div>
</div>
@endsection