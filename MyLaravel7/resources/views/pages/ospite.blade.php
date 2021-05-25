@extends("Layouts.main-layout")
  @section("content")

  <div class="ospite-container">
    <h3>{{ $ospite -> name }}</h3>
    <h3>{{ $ospite -> lastname }}</h3>
  </div>

  <section class="otherInfo">
    <h3>Date of birth: &#160;{{ $ospite -> date_of_birth }}</h3>
    <h3>Document type: &#160;{{ $ospite -> document_type }}</h3>
    <h3>Document number: &#160;{{ $ospite -> document_number }}</h3>
    <h3>Created on the: &#160;{{ $ospite -> created_at }}</h3>
    <h3>Updated on the: &#160;{{ $ospite -> updated_at }}</h3>
  </section>

  @endsection
