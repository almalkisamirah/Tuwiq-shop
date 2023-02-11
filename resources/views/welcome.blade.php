@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  
  
  <a class="btn btn-light" href="{{ route('login') }}">Log in </a>
  <a class="btn btn-dark" href="{{ route('signup') }}">sign up</a>
             
<h1 class="text-center p2">اهلا بكم في الصفحة الرئيسية</h1>

  


<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Type</th>
      <th>Price</th>
      <th>Color</th>
    
    </tr>
  </thead>
  <tbody>

  
   @foreach($phone as $items)
   <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://img.freepik.com/free-vector/realistic-instagram-photo-frame-smartphone-template_23-2148125909.jpg?w=740&t=st=1674755115~exp=1674755715~hmac=d5cec0de1eadd7c9b218a6228699a281b1d33bd9b2dfd4e0f3181ce2aacb126c"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$items['Type']}}</p>
           
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$items['Price']}}</p>
       
      </td>
      <td>
        <span class="fw-normal mb-1">{{$items['Color']}}</span>
      </td>
    
     
    </tr> 
   @endforeach
   
  </tbody>
</table>

</div>
@endsection




