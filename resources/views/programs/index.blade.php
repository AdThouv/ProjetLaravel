
@extends('layout')

@section('content')

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

    <div class='container'>
      @foreach($films as $film)
        <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="{{$film->poster}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$film->title}}</h5>
                <a href="{{ route('programs.show', $film->id )}}" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
      @endforeach
    </div>
      <a href="{{ route('programs.create')}}">Créer un Film</a>
@endsection