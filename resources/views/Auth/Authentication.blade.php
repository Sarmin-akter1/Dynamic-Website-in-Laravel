@extends('layouts.master')
@section('bodySection')
<section class="section colored" id="contact-us">
    <div class="container">
        <!-- ***** Section Title Start ***** -->

        <!-- ***** Section Title End ***** -->

        <div class="row">

            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="{{route('userRegister')}}" method="post">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('errorMsg'))
                            <div class="alert alert-danger">
                                {{ session('errorMsg') }}
                            </div>
                        @endif


                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" value="{{old('name')}}" required="" >
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" value="{{old('email')}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name">Password</label>
                                    <input name="password" class="form-control" id="password" placeholder="Enter password" value="{{old('password')}}" required="" >
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <label for="name">Confirm Password</label>
                                    <input name="confirm_password" class="form-control" id="confirm password" placeholder="Confirm password" value="{{old('confirm_password')}}" required="" >
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Register</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ***** Contact Form End ***** -->
        </div>
    </div>
</section>
@endsection
