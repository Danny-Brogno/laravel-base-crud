@extends("Layouts.main-layout")

@section("content")
<section class="form">

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('newOspiti') }}" class="actualForm">
    @csrf
    @method("POST")
    <label for="name">Firstname:</label>
    <input type="text" id="name" name="name" placeholder="Firstname">
    <label for="lastname">Lastname:</label>
    <input type="text" id="lastname" name="lastname" placeholder="Lastname">
    <label for="date_of_birth">Date of birth:</label>
    <input type="text" id="date_of_birth" name="date_of_birth" placeholder="Date of birth">
    <label for="document_type">Document type:</label>
    <input type="text" id="document_type" name="document_type" placeholder="Document type">
    <label for="document_number">Document number:</label>
    <input type="text" id="document_number" name="document_number" placeholder="Document number">
    <input type="submit" value="Add guest" id="sub">
  </form>

</section>


@endsection
