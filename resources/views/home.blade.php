{{-- @extends('main')
@section('contain')
<h1 class="text-center">News</h1>
    <div class="row row row-cols-1 row-cols-md-3 d-flex justify-content-center bg-success p-2 text-black">
        @for ($i = 0; $i < 4; $i++)
        <div class="col-md-2 mt-3">
            <div class="card bg-dark">
                <img src="img/mobilelegend.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-light fs-5" style="margin-top: -15px">this is the looping</p>
                </div>
            </div>
        </div>
    @endfor
    </div>

@endsection --}}

@extends('main')
@section('contain')
<h1 class="text-center">Welcome to, Mobile Legend</h1>
<div class="row">
    @for ($i = 0; $i < 6; $i++)
      <div class="col-md-2 mt-3">
        <div class="card bg-dark">
            <img src="img/mobilelegend.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text text-light fs-5" style="margin-top: -15px">this is the looping</p>
            </div>
        </div>
      </div>
    @endfor
  </div>
@endsection
