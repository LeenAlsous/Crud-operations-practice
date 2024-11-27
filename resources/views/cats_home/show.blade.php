@extends('layout.app')

@section('title') Show @endsection
@section('css')
<style>
    .avatar {
  width: 100px; /* Set width for the avatar */
  height: 100px; /* Set height for the avatar */
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
    <div class="card mt-4">
        <div class="card-header">
            Cat Info
        </div>
        <div class="card-body">
            <div class="avatar">
                <img src="{{ asset('images/' . $cat->image) }}" alt="Avatar">
              </div>
            <h5 class="card-title">Name: {{$cat->name}}, {{$cat->age}} years old</h5>
            <p class="card-text">Fav Food: {{$cat->fav_food}}</p>
            <p class="card-text">Breed: {{$cat->breed}}</p>
        </div>
    </div>

