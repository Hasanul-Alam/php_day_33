@extends('master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            {{$product['name']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
