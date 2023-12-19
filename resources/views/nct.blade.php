@extends('layout')
@section('content')
<div class="text ms-4">
    <th><h3>Product</h3></th>
    <hr>
  </div>
  {{-- product --}}
  <div class="class gap-7 ms-4">
    <ul class="nav nav-tabs" id="nav-home-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="nav-nct-tab" data-bs-toggle="tab" data-bs-target="#nav-nct" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><h5>NCT</h5></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="nav-aespa-tab" data-bs-toggle="tab" data-bs-target="#nav-aespa" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><h5>AESPA</h5></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="nav-bts-tab" data-bs-toggle="tab" data-bs-target="#nav-bts" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><h5>BTS</h5></button>
      </li>
    </ul>
  </div>
  
  <div class="tab-content" id="nav-tabContent">
    {{-- page nct --}}
    <div class="tab-pane fade show active" id="nav-nct" role="tabpanel" aria-labelledby="nav-nct-tab" tabindex="0">
        {{-- bagian satu --}}
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
                <img src="/NCTALBUM/goldenage.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The 4th Album 'Golden Age' (Archiving Ver.)</h5>
                  <a href="#" class="btn btn-primary">Rp375,000.00</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/NCTALBUM/perfume.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The 1st Mini Album 'Perfume' (Photobook Ver.)</h5>
                  <a href="#" class="btn btn-primary">Rp375,000.00</a>
                </div>
              </div>
            </div>
          </div>   
        </div>
        {{-- bagian dua --}}
        <div class="grid gap-2">
            <div class="row md-4 g-3 ms-2 w-3 p-3">
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/syalala.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">1st Mini Album SHALALA (Collector Ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/ayyo.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The 4th Album Repackage Ay-Yo (A Ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/sticker.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The 3rd Album Sticker (Sticker Ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        {{-- bagian tiga --}}
        <div class="grid gap-2">
            <div class="row md-4 g-3 ms-2 w-3 p-3">
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/universe.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The 3rd Album 'Universe' (PHOTOBOOK Ver.)</h5>
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
                  <img src="/NCTALBUM/wey.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">1st Mini Album 'We Young'</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        {{-- bagian empat --}}
        <div class="grid gap-2">
            <div class="row md-4 g-3 ms-2 w-3 p-3">
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/may.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The 2nd Album 'On My Youth' (Photobook Ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/TakeOver.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">2nd Mini Album 'Take Over The Moon'</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/NCTALBUM/mayd.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The 2nd Album 'On My Youth' (Diary Ver.)</h5>
                    <a href="#" class="btn btn-primary">Rp375,000.00</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    {{-- ------------------------------------------------------------------------------------------------------------------------------------- --}}
    
    {{-- page aespa --}}
    <div class="tab-pane fade" id="nav-aespa" role="tabpanel" aria-labelledby="nav-aespa-tab" tabindex="0">
      {{-- bagian satu --}}
      <div class="grid gap-2">
        <div class="row md-4 g-3 ms-2 w-2 p-3 h-1" style="height: 335px width: 325px" >
            <div class="col">
              <div class="card">
                <img src="/AESPAALBUM/drama.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The 4th Mini Album [Drama] (Drama Ver.)</h5>
                  <a href="{{ url('showproductAespa/2') }}" class="btn btn-primary">Rp375,000.00</a>
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
                <img src="/AESPAALBUM/savage.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">1st Mini Album 'Savage'(Hallucination Quest Ver.)</h5>
                  <a href="#" class="btn btn-primary">Rp375,000.00</a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    {{-- ------------------------------------------------------------------------------------------------------------------------------------- --}}
    {{-- page bts --}}
    <div class="tab-pane fade" id="nav-bts" role="tabpanel" aria-labelledby="nav-bts-tab" tabindex="0">
      {{-- bagian satu --}}
      <div class="grid gap-2">
            <div class="row md-4 g-3 ms-2 w-2 p-3 h-1" style="height: 335px width: 325px" >
                <div class="col">
                  <div class="card">
                    <img src="/BTSALBUM/agustd.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Agust D (BTS) 'D-DAY' (Weverse Albums ver.)</h5>
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
        </div>
    </div>

  </div>
@endsection