@extends('layouts.admin')

@section('content')
<form action="{{route('search.all')}}" method="POST">
    @csrf
    <div class="input-group md-form form-sm form-2 pl-0">
    <input name="demande" class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
          <button class="btn btn-secondary" type="submit">Search</button>
      </div>
    </div>
  </form>
<br>
<hr>
<br>

    <h1> Profil de {{Auth::user()->name}}</h1>
    <table class="table">
        <tr>
            <td>Nom : {{Auth::user()->name}}</td>
            <td></td>
        </tr>
        <tr>
            <td>Email : {{Auth::user()->email}}</td>
            <td><a href="{{route('editProfil', ['user' => Auth::user()->id])}}">Changer mon adresse email</a></td>
        </tr>
        <tr>
            <td> Mot de passe : ******* </td>
            <td><a href="{{route('PassResetForm', ['user' => Auth::user()->id])}}">Changer mon mot de passe</a></td>
        </tr>
    </table>
@endsection