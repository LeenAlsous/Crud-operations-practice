@extends('layout.app')

@section('title') Edit @endsection

@section('content')
{{-- {{route('cats_home.update', $cat->id)}} --}}
    <form method="POST" action="{{route('cats_home.update', $cat->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" value="{{$cat->name}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Age</label>
            <input type="number" name="age" class="form-control" rows="3" value="{{$cat->age}}"></input>
        </div>
        <div class="mb-3">
            <label  class="form-label">Fav Food</label>
            <input type="text" name="food" class="form-control" rows="3" value="{{$cat->fav_food}}"></input>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>


@endsection