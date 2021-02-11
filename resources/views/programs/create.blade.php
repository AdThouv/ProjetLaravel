
@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
    color:white;
  }
</style>

<div class="uper">
  <div class="card-header">
    Ajouter un Film
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('programs.store') }}">
         @csrf
          <div class="form-group">
              <label for="title">Titre du Film:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="summary">Description :</label>
              <input type="text" class="form-control" name="summary"/>
          </div>

          <div class="form-group">
              <label for="poster">Affiche :</label>
              <input type="text" class="form-control" name="poster"/>
          </div>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection