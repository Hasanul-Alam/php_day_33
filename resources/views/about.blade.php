@extends('master')
@section('title')
    About Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                    @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('/')}}img/{{$product['image']}}" alt="" height="200">
                        <div class="card-body">
                            <h4>{{$product['name']}}</h4>
                            <p>{{$product['price']}}</p>
                            <hr>
                            <a href="" class="btn btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection
