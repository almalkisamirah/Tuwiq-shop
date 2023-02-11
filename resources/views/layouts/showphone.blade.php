
@section('content')
<h1 class="text-center --mdb-bg-opacity #FFCC80 ">اهلا بكم في طويق</h1>
<img src=/>

@extends('layouts.app')
@section('content')
 <div class="container">
 <div class ="card">
 <div class ="card-header">
  <h3>iphone 14</h3>
   <div class ="card-body"></div>
   <div class ="row"></div>
   <div class ="col-3">
   <img height="150" width="150" src="https://img.freepik.com/free-vector/digital-device-mockup_53876-89354.jpg?w=1380&t=st=1676121470~exp=1676122070~hmac=f0a13b76958f9171e1b92fa40a990068bb56077478666a46242081392966eb9c">
   </img>
   </div>
   <div class ="col-9">
   <h1 class ="text-danger">iphone 14</h1>
   <p class="text-succrss">Price:<span>5000 SAR </span> </p>
   <p class="text-succrss">color:<span>Black </span> </p>
   </div>
 <h1 class ="text-danger">Samsung </h1>
   <p class="text-succrss">Price:<span>3000 SAR </span> </p>
   <p class="text-succrss">color:<span>Black </span> </p>
   </div>
   <h1 class ="text-danger">Nokia </h1>
   <p class="text-succrss">Price:<span>1000 SAR </span> </p>
   <p class="text-succrss">color:<span>Black </span> </p>
   </div>
   <h1 class ="text-danger">Huwaui </h1>
   <p class="text-succrss">Price:<span>5000 SAR </span> </p>
   <p class="text-succrss">color:<span>Black </span> </p>
   </div>
 </div>
 </div>
 </div>
 <div class="card-footer">
 <p>tel:665546876</p>
 </div>




@foreach('$ph as $items')
<p>{{$items->Name}}</p>
<p>{{$items->QTY}}</p>
<p>{{$items->price}}</p>
@endforeach
@endsection




