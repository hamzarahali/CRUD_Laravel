@extends('includes\header')

@section('title','Inscription')

@section('content')

    <div class="container text-center" style="padding: 160px 400px ">
        <form action="{{ route ('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Name : </label>
                <input type="text" name="name" class="form-control" id="nom" required>
            </div>
            <div class="form-group">
                <label for="adresse">E-mail : </label>
                <input type="email" name="email" class="form-control" id="adresse" required>
            </div>
            <div class="form-group">
                <label for="ntel">Password : </label>
                <input type="password" name="password" class="form-control" id="ntel" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Inscription" class="btn btn-danger col-sm-7">
            </div>
        </form>
    </div>

@endsection
