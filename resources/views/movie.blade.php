@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      @foreach ($movie as $obj)
      <div class="col-3">
        <div class="card">
          <ul class="list-unstyled">
            <li>{{$obj->title}}</li>
            <li>{{$obj->original_title}}</li>
            <li>{{$obj->nationality}}</li>
            <li>{{$obj->date}}</li>
            <li>{{$obj->vote}}</li>
          </ul>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection