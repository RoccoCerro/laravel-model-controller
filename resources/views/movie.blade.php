@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      @foreach ($movie as $obj)
      <div class="col-3">
        <div class="card">
          {{$obj->title}}
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection