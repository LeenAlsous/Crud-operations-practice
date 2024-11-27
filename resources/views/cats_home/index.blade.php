@extends('layout.app')

@section('title') Index @endsection
@section('css') 
<style>
    .avatar {
  width: 50px; /* Set width for the avatar */
  height: 50px; /* Set height for the avatar */
  border-radius: 50%; /* Makes it a circle */
  overflow: hidden; /* Ensures the image stays within the circle */
  border: 2px solid #ccc; /* Optional: Add a border */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Add a shadow */
}

/* Styling the image inside the avatar */
.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures the image covers the entire circle without distortion */
}
</style>
@endsection

@section('content')

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Breed</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cats as $cat)
          {{-- @dd($cats, $cat) --}}
            <tr>
                <td>{{$cat->id}}</td>
                <td><div class="avatar">
                    <img src="{{ asset('images/' . $cat->image) }}" alt="Avatar">
                  </div></td>
                <td>{{$cat->name}}</td>
                {{-- <td>{{$post->user ? $post->user->name : 'not found'}}</td> --}}
                <td>{{$cat->age}}</td>
                <td>{{$cat->breed}}</td>
                {{-- {{dd($cat->id)}} --}}
                <td>
{{--                    /posts/{{$post['id']}}--}}
                    <a href="{{route('cats_home.show', $cat->id)}}" class="btn btn-info">View</a>
                    <a href="{{route('cats_home.edit', $cat->id)}}" class="btn btn-primary">Edit</a>
                    <form style="display: inline;" method="POST" action="{{route('cats_home.destroy', $cat->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{route('cats_home.create')}}" class="btn btn-success">Add Cat</a>
    </div>
@endsection