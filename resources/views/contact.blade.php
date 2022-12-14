@extends('master')
@section('title')
    Contact Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('full-name')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="" value="{{Session::get('message') ? Session::get('message') : '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" name="submit_btn" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
