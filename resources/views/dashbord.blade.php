@extends('layouts.master')

@section('bodySection')

    <!-- ***** Register ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <div class="row">
                <!-- ***** ContactInfo Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">

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
                            <div class="col">
                                <h3>Hi {{ $name }}!</h3>
                                <p>Welcome to the new dashboard!</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ***** ContactInfo Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Register Us End ***** -->

@endsection
