@extends('includes\header')

@section('title','Modification')

@section('content')

<div class="container text-center" style="padding: 160px 400px ">
    <form action="{{ route ('users.update' , $user -> id ) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="nom">Name : </label>
            <input type="text" name="name" class="form-control" id="nom" value="{{ $user -> name }}">
        </div>
        <div class="form-group">
            <label for="adresse">E-mail : </label>
            <input type="email" name="email" class="form-control" id="adresse" value="{{ $user -> email }}">
        </div>
        <div class="form-group">
            <label for="ntel">Password : </label>
            <input type="password" name="password" class="form-control" id="ntel" value="{{ $user -> password }}">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Modifier" class="btn btn-danger col-sm-7">
        </div>
    </form>
</div>

@endsection
