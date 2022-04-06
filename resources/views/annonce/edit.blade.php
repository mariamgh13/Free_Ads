@extends('annonce.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('annonces/edit/'.$annonces->id) }}">
    @csrf
        <div class="form-group">
            <label>Titre * : </label>
            <input type="text" class="form-control" name="title" value="{{ $annonces->title }}">
        </div>
        <div class="form-group">
            <label>Description * :</label>
            <input type="textarea" rows="4" class="form-control" name="desc" value="{{ $annonces->desc }}">
        </div>
        <div class="form-group">
            <label>Photo * :</label>
            <input type="url" class="form-control" name="picture" value="{{ $annonces->picture }}">
        </div>
        <div class="form-group">
            <label>Photo 2 * :</label>
            <input type="url" class="form-control" name="picture2" value="{{ $annonces->picture2 }}">
        </div>
        <div class="form-group">
            <label>Photo 3 * :</label>
            <input type="url" class="form-control" name="picture3" value="{{ $annonces->picture3 }}">
        </div>
        <div class="form-group">
            <label>Prix * :</label>
            <input type="number" step="0.01" class="form-control" name="price" value="{{ $annonces->price }}">
        </div>
        <button type="submit" class="btn btn-primary float-right">Modifier</button>
    </form>
    <form action="{{ url('annonces/delete/'.$annonces->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger mb-4 mr-4 float-right" type="submit">Supprimer</button>
    </form>
</div>

@endsection