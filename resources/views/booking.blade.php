@extends('layout')

@section('content')
<body>
    <div class="mt-5 p-4">
        <thead>
            <div class="text ms-4 pt-6">
                <h1>Booking</h1>
                <hr>
            </div>
        </thead>
    </div>
    
</body>

<head>
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    
    <div class="container">
    {{-- checkout 1 --}}
        <div class="card mb-3 ms-4" style="max-height: 30rem;" >
            <div class="row g-0">
                <div class="col-md-4 p-4">
                <img src="/NCTALBUM/factcheck.png" class="img-fluid rounded-start" alt="..." style="max-width: 15rem">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">The 5th Album [Fact Check] (Chandelier Ver.)</h5>
                        <p class="card-text">Rp375,000.00</p>
                    </div>
                    {{-- quantity adjustments --}}
                    <div class="p-2  col-md-4">
                        <div class="input-group">
                            <button class="btn btn-outline-secondary rounded-0" type="button" id="button-sub-1">-</button>
                            <input id="qty-1" type="text" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="1">
                            <button class="btn btn-outline-secondary rounded-0" type="button" id="button-add-1">+</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- checkout 2 --}}
        <div class="card mb-3 ms-4" style="max-height: 30rem;" >
            <div class="row g-0">
                <div class="col-md-4 p-4">
                <img src="/AESPAALBUM/drama.png" class="img-fluid rounded-start" alt="..." style="max-width: 15rem">                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">The 4th Mini Album [Drama] (Drama Ver.)</h5>
                        <p class="card-text">Rp375,000.00</p>
                    </div>
                    <div class="p-2 col-md-4">
                        <div class="input-group">
                            <button class="btn btn-outline-secondary rounded-0" type="button" id="button-sub-2">-</button>
                            <input id="qty-2" type="text" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="1">
                            <button class="btn btn-outline-secondary rounded-0" type="button" id="button-add-2">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- checkout 3 --}}
        <div class="card mb-3 ms-4" style="max-height: 30rem;" >
            <div class="row g-0">
                <div class="col-md-4 p-4">
                <img src="/BTSALBUM/golden.png" class="img-fluid rounded-start" alt="..." style="max-width: 15rem">                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Jung Kook (BTS) 'GOLDEN' (Weverse Albums ver.)</h5>
                        <span id="currency-4">Rp</span><span id="price-4" class="card-text">375,000.00</span>
                    </div>
                    <div class="p-2 col-md-4">
                        <div class="input-group">
                            <button class="btn btn-outline-secondary rounded-0" type="button" id="button-sub-3">-</button>
                            <input id="qty-3" type="text" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="1">
                            <button class="btn btn-outline-secondary rounded-0" type="button" id="button-add-3">+</button>
                        </div>
                    </div>
                </div>
            </div>

                {{-- TOTAL --}}

            <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Total</h5>
                <p id="total-price"></p>
            </div>
        </div>
    </div>
        </div>
    </div>
</body>

@endsection
