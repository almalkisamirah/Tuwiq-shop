@extends('layouts.app')
@section('content')
    <h1 class="text-center text-primary  mt-5" > الهواتف الذكية</h1> 
    <div class="Container p-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Type</th>
                <th>QTY</th>
                <th>Price</th>                
              </tr>
            </thead>
            <tbody>
            
            @foreach ($phones as $item)
            <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="https://cdn-icons-png.flaticon.com/512/65/65680.png"
                        alt=""
                        style="width: 45px; height: 45px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{ $item['type'] }}</p>                      
                    </div>
                  </div>
                </td>
                <td>
                    <p class="fw-bold mb-1">{{ $item['QTY'] }}</p>                 
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $item['Price']}}</p> 
                </td>
                
              </tr>         
              
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
