@extends('includes\header')

@section('title','Connection')

@section('content')

    <div class="container text-center" style="padding: 190px 400px ">
        <form action="/ajouter" method="post">
            <div class="form-group">
                <label for="adresse">Email : </label>
                <input type="email" name="adresse" class="form-control" id="adresse" required>
            </div>
            <div class="form-group">
                <label for="ntel">Password : </label>
                <input type="password" name="password" class="form-control" id="ntel" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Sign up" class="btn btn-success col-sm-7">
            </div>
        </form>
    </div>

@endsection
