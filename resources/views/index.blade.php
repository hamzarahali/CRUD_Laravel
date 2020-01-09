@extends('includes\header')

@section('title','Accueil')

@section('content')

    <div class="container text-center" style="padding: 50px 150px" >

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif  (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif

        <h1 class="alert alert-secondary"> Liste des clients </h1>
            <table class="table table-bordered table-hover">
                <tr>
                    <th> Id </th>
                    <th> Nom </th>
                    <th> E-mail </th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ( $users as $user )
                    <tr>
                        <td> {{ $user -> id }} </td>
                        <td> {{ $user -> name }} </td>
                        <td> {{ $user -> email }} </td>
                        <td> <a href="{{ route ( 'users.edit' , $user -> id ) }}" class="btn btn-success form-control"> Modifier </a></td>
                        <form action="{{ route('users.destroy', $user -> id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td> <input type="submit" class="btn btn-danger form-control" value="Supprimer"></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="/inscription" class="btn btn-primary form-control"> Ajouter un client </a>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
@endsection
