@extends('layout')
    
@section("content")
<span id="more-image">
    #more-image {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; 
    }
</span>
<div class="mt-5 p-4">
    <div class="container">
        <div class="about">
            <div class="text-center">
                <img src="/GOLOGO.png" class="rounded" style="width: 225px">
              </div>
            <div class="about-text">
                <h1>HISTORY</h1>
                <hr>
                <p>Web MejangGo is an e-commerce platform dedicated to K-pop merchandise sales. Launched in 2023, the site soon became a major destination for K-pop fans seeking official and exclusive products from various Korean music groups. With a user-friendly interface and reliable delivery policy, MejangGo managed to build a large community, providing a fun and safe online shopping experience for loyal K-pop fans around the world.</p>
                <p>As time goes by, MejangGo Web continues to grow by adding new merchandise collections and holding special promotions to indulge its customers. By providing official products from various Korean entertainment agencies, MejangGo became an important place for fans to support their idols. The presence of positive reviews and inter-favorite interactions through this platform provide strong evidence of MejangGo's positive contribution to strengthening the global community of K-pop fans.</p>
            </div>

            <h1>TEAM</h1>
            <hr>
            <div class="card-group">
                <div class="card">
                  <img src="/team/marsya.JPEG" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Marsyanda Indiyana Maslikan</h5>
                    <p class="card-text">2502023972</p>
                  </div>
                </div>
                <div class="card">
                  <img src="/team/sarah.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sarah Karissa</h5>
                    <p class="card-text">NIM</p>
                  </div>
                </div>
                <div class="card">
                  <img src="/team/anjani.PNG" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Ni Komang Adetiwi Anjani</h5>
                    <p class="card-text">2502029383</p>
                  </div>
                </div>
              </div>
        </div>

    </div>
</div>
    
@stop