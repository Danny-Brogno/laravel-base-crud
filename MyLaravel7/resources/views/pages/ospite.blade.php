@extends("Layouts.main-layout")
  @section("content")
  <div class="ospite-container">
    <h3>{{ $ospite -> name }}</h3>
    <h3>{{ $ospite -> lastname }}</h3>
  </div>
  @endsection
