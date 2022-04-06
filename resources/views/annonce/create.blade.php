@extends('annonce.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('annonces/create') }}">
        @csrf
        <div class="form-group">
            <label>Titre * :</label>
            <input type="text" class="form-control" name="title" placeholder="Titre de l'annonce">
        </div>
        <div class="form-group">
            <label>Description * :</label>
            <input type="textarea" rows="4" class="form-control" name="desc" placeholder="description de l'annonce">
        </div>
        <div class="form-group">
            <label>Photo * :</label>
            <input type="url" class="form-control" name="picture" placeholder="url image obligatoire">
        </div>
        <div class="form-group">
            <label>Photo 2 :</label>
            <input type="url" class="form-control" name="picture2" placeholder="image facultative">
        </div>
        <div class="form-group">
            <label>Photo 3 :</label>
            <input type="url" class="form-control" name="picture3" placeholder="image facultative">
        </div>
        <div class="form-group">
            <label>Prix * :</label>
            <input type="number" step="0.01" class="form-control" name="price" placeholder="prix">
        </div>
        <input type="hidden" name="create_by" value={{Auth::user()->id}}>
        <button type="submit" class="btn btn-primary float-right">Créer</button>
    </form>
</div>

@endsection