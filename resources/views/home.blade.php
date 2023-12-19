@extends('layout')
{{-- @section('title', 'home') --}}
    
@section('content')
<body>
    <thead>
      <div class="mt-3">
        <div class="text ms-4 pt-5">
            <th><h3>Best Seller</h3></th>
            <hr class="col-lg-11">
        </div>
      </div>
        
    </thead>
    <tbody>
        {{-- bagian satu best seller--}}
        <div class="grid gap-2">
            <div class="row md-4 g-3 ms-2 w-2 p-3 h-1" style="height: 335px width: 325px" >
                <div class="col">
                  <div class="card">
                    <img src="/NCTALBUM/factcheck.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">The 5th Album [Fact Check] (Chandelier Ver.)</h5>
                      <a href="{{ url('showproductNCT/1')}}" class="btn btn-primary">Rp375,000.00</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="/AESPAALBUM/girls.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">2nd Mini Album 'Girls’ (Real World Ver.)</h5>
                      <a href="#" class="btn btn-primary">Rp375,000.00</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="/BTSALBUM/v.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">V (BTS) 'Layover' (Weverse Albums ver.)</h5>
                      <a href="#" class="btn btn-primary">Rp375,000.00</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        {{-- bagian dua best seller--}}
        <div class="grid gap-2">
          <div class="row md-4 g-3 ms-2 w-3 p-3">
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/sticker.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The 3rd Album Sticker (Sticker Ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/candy.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Winter Special Mini Album 'Candy' (Photobook Ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/BTSALBUM/golden.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Jung Kook (BTS) 'GOLDEN' (Weverse Albums ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
          </div>
        </div>      
    </tbody>
</body>
@stop


@section('content2')
<div >
  <div class="text ms-4">
    <th><h3>Product</h3></th>
    <hr class="col-lg-11">
  </div>
  @include('partials.nctpage', ['tabs' => $tabs ?? ''])
</div>
@stop
