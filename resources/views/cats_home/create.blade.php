@extends('layout.app')

@section('title') Create @endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route('cats_home.store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Cat Name</label>
            <input name="name" type="text" class="form-control" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">Age</label>
            <input type="number" name="age" class="form-control"  rows="3" value="{{old('age')}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">Breed</label>
            <input name="breed" type="text" value="{{old('breed')}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">Fav Food</label>
            <input name="food" type="text" value="{{old('food')}}">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection