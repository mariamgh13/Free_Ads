@extends('crud.master')

@section('content')

<div class="container mt-5">
    <form method="POST" action="{{ url('users/edit/'.$users->id) }}">
        @csrf
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="name" value="{{ $users->name }}">
        </div>
        <div class="form-group">
            <label>Mail</label>
            <input type="email" rows="4" class="form-control" name="email" value="{{ $users->email }}">
        </div>
        <div class="form-group">
            <label>MDP</label>
            <input type="password" rows="4" class="form-control" name="password" >
        </div>
        <button type="submit" class="btn btn-primary float-right">Modifer</button>
    </form>
    <form action="{{ url('users/delete/'.$users->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger mb-4 mr-4 float-right" type="submit">Supprimer</button>
    </form>
</div>

@endsection