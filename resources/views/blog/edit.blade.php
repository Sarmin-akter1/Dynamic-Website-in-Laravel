@extends('layouts.master')
@section('bodySection')
    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Edit Your Post</h2>
                        <p><strong>Create your blog</strong></p>
                    </div>
                </div>

            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
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


                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="{{route('insights.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>


                                        <input name="user_id" type="hidden" class="form-control" id="user_id" value="{{$post->user_id}}" >
                                        <input name="id" type="hidden" class="form-control" id="user_id" value="{{$post->id}}" >

                                        <label>Image</label>
                                             <input name="image"  class="form-control" id="image" value="{{$post->image}}">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control" id="title" value="{{$post->title}}">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <label>Description</label>
                                        <textarea name="description" rows="6" class="form-control" id="description" >{{$post->description}}</textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Edit</button>
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
    <!-- ***** Contact Us End ***** -->
@endsection

