@extends("Layouts.main-layout")

  @section("content")
    <div class="container">
      <h1>Hotel Danny</h1>
      <h2>Guests:</h2>
      <div>
        <ul>
          @foreach ($ospiti as $ospite)
            <li>
              <span>{{$ospite -> name}}</span>
              <span>{{$ospite -> lastname}} &nbsp;</span>
              <span>Date of Birth:{{$ospite -> date_of_birth}}</span>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  @endsection
