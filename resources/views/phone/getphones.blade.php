@extends('layouts.app')



@section('content')


<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row row-eq-height justify-content-center">
    @foreach($phones as $phone)
      <div class="col-md-4 col-lg-6 col-xl-4">
        <div class="card text-black">
          <!-- <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i> -->
          <div class="text-center">
            <img src="https://img.freepik.com/free-vector/digital-device-mockup_53876-89354.jpg?w=1380&t=st=1676135509~exp=1676136109~hmac=ac34642fbc9b7cf4f102ef3c4699e6b59996de3b2ed1baab2e7806ebdea2aaf0" class="card-img-top w-50 text-center" alt="Apple Computer" />
          </div>
          <div class="text-center">
          </div>
          <div class="card-body">
            <div class="text-center mb-5">
              <h5 class="card-title">{{$phone->name}}</h5>
            </div>
            <div>
              <div class="d-flex justify-content-between">
              </div>
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
              <div class="col-4">
                <a class="btn btn-success"href="{{route('checkout',['id' => $phone->id])}}">شراء الآن</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection



