@extends('master')
@section('title')

@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">
                                Uradhura Calculator
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Last Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="last_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Make Choice</label>
                                    <div class="col-md-9">
                                        <input type="radio" class="" name="addition" value="+">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="calculate_btn" value="Calculate">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
