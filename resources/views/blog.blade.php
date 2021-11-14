@extends('layouts.master')
@section('bodySection')
    <section>
        </br>
        </br>
    </section>
    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Blog Entries</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                @if(!empty($blogpost))
                    @foreach($blogpost as $index =>$post)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{$imgPath . $post->image }}" alt="" style="width: 370px; height: 220px" >
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">{{$post->title}}</a>
                            </h3>
                            <div class="text">
                               {{$post->description}}
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                    @endforeach
                @else
                    <h2>Sorry! no data found!</h2>
                @endif

            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->
@endsection
