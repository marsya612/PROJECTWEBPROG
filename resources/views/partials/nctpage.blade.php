<!-- resources/views/partials/_menu_tabs.blade.php -->

<div class="class gap-7 ms-4">
    <ul class="nav nav-tabs" id="nav-home-tab" role="tablist">
        @foreach($tabs as $tab)
            <li class="nav-item" role="presentation">
                <button class="nav-link{{ $tab['active'] }}" id="nav-{{ $tab['id'] }}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{ $tab['id'] }}" type="button" role="tab" aria-controls="nav-{{ $tab['id'] }}" aria-selected="{{ $tab['selected'] }}"><h5>{{ $tab['title'] }}</h5></button>
            </li>
        @endforeach


    </ul>
    <div class="tab-content" id="nav-tabContent">
        {{-- page nct --}}
        <div class="tab-pane fade show active" id="nav-nct" role="tabpanel" aria-labelledby="nav-nct-tab" tabindex="0">
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
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/nct" class="btn btn-primary me-md-4 my-3">View All</a>
          </div>
        </div>
        {{-- page aespa --}}
        <div class="tab-pane fade" id="nav-aespa" role="tabpanel" aria-labelledby="nav-aespa-tab" tabindex="0">
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
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/nct" class="btn btn-primary me-md-3 my-3">View All</a>
          </div>
        </div>
        {{-- page bts --}}
        <div class="tab-pane fade" id="nav-bts" role="tabpanel" aria-labelledby="nav-bts-tab" tabindex="0">
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
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/nct" class="btn btn-primary me-md-3 my-3">View All</a>
          </div>
        </div>
    
      </div>
</div>
