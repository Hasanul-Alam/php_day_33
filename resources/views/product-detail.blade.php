@extends('master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{$product['image']}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{$product['name']}}</h2>
                            <h4>Tk. {{$product['price']}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
