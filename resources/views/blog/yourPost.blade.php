@extends('layouts.master')
@section('bodySection')
    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">


            <div class="row">

                <div class="col-lg-12">
                    <div class="contact-form">

                        <div class="center-heading">
                            <h2 class="section-title">View Your Post</h2>
                            <p><strong>Here you can view your post in details </strong></p>
                        </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control" id="title" value="{{$post->title}}" >
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <label>Description</label>
                                        <textarea name="description" type="email" class="form-control" id="description" >{{$post->description}}</textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <label>Image</label>
                                    <input name="image" type="email" class="form-control" id="image" value="{{$post->image}}">
                                  </fieldset>
                                </div>
                            </div>

                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
@endsection

