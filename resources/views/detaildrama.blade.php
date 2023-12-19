@extends('layout')
@section('content')
<div class="mt-5 p-3">
    <div class="row g-3 m-4 position-relative">
        <div class="col-md-5 mb-md-0 p-md-3">
            <img src="{{ $products->Image_path }}" class="w-100" alt="...">
        </div>
        <div class="col-md-6 p-7 ps-md-0">
            <h5 class="mt-0">{{$products->Product_Name}}</h5>
            <table class="table caption-top">
                <caption>Information</caption>
                <tbody>
                <tr>
                    
                    <th scope="row" class="table-active">Product Name</th>
                    <td>{{$products->Product_Name}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-active">Price</th>
                    <td>{{$products->price}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-active">Release date</th>
                    <td>{{$products->Release_date}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-active">Title</th>
                    <td>{{$products->Title}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-active">Contents</th>
                    <td>
                        <ul>
                            {{$products->content}}
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="table-active">Manufacturer</th>
                    <td>{{$products->manufacturer}}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-active">Country of manufacture</th>
                    <td>{{$products->country}}</td>
                </tr>
                </tbody>
            </table>  
            <div class="row g-4 md-2">
                <div class="col-md">
                <div class="button">
                    <a href="/booking" class="btn btn-primary justify-content-md-end">Checkout</a>
                </div>
                </div>
                <div class="col-md">
                    <select class="form-select">
                        <option selected>Open this select payment method</option>
                        <option value="1">BCA</option>
                        <option value="2">MANDIRI</option>
                        <option value="3">GOPAY</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection