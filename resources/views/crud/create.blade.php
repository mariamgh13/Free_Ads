@extends('crud.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('users/create') }}">
        @csrf
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Mail</label>
            <input type="email" rows="4" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>MDP</label>
            <input  type="password" rows="4" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
</div>

@endsection