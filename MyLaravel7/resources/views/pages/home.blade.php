@extends("Layouts.main-layout")

  @section("content")
    <div class="container">
      <h1>Hotel Dann<i class="fab fa-yandex-international"></i></h1>
      <h2>Guests:</h2>
      <div>
        <ul>
          @foreach ($ospiti as $ospite)
            <li>
              <a href="{{ route('show-ospite', $ospite -> id) }}">
                <span>{{ $ospite -> name }}</span>
                <span>{{ $ospite -> lastname }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  @endsection
