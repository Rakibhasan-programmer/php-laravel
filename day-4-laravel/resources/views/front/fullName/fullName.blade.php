@extends('front.master')


@section('title')
    Full Name
@endsection()

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Get Full Name</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('full-name')}}" method="POST">
                                <div class="row pb-3">
                                    <label for="firstName" class="col-md-4">First Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Enter your First Name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="lastName" class="col-md-4">Last Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Enter your Last Name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="fullName" class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo isset($result) ? $result : ""; ?>" name="" class="form-control" id="fullName" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-dark" type="submit" name="full_name_btn" value="Get Full Name">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
