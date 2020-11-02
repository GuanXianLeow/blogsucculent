@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome') }}


                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ url('/images/homepage1.jpg')}}" class="d-block w-50" >
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/homepage2.jpg')}}" class="d-block w-50"  >
    </div>
    <div class="carousel-item">
      <img src="{{ url('/images/homepage3.jpg')}}" class="d-block w-50">
    </div>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
