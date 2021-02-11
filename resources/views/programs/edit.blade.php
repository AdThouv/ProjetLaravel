
@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le Film
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

      <form method="post" action="{{ route('programs.update', $program->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Titre du film :</label>
              <input type="text" class="form-control" name="title" value="{{ $program->title }}"/>
          </div>

          <div class="form-group">
              <label for="summary">Résumé :</label>
              <input type="text" class="form-control" name="summary" value="{{ $program->summary }}"/>
          </div>

          <div class="form-group">
              <label for="poster">Affiche :</label>
              <input type="text" class="form-control" name="poster" value="{{ $program->poster }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection