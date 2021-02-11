@extends('layout')

@section('content')

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

    <div class='container-card-show'>
        <div class="card-show" style="width: 40%;">
            <img class="card-img-show" src="{{$films->poster}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$films->title}}</h5>
                <p>{{$films->summary}}</p>
                <a href="{{ route('programs.edit' , $films->id)}}" class="btn btn-primary">Editer</a>
                <a href="{{ route('programs.destroy' , $films->id)}}" class="btn btn-primary">Supprimer</a>
            </div>
        </div>

    </div>
@endsection