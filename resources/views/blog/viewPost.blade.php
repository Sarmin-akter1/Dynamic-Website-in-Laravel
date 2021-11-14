@extends('layouts.master')
@section('bodySection')
    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">All post</h2>
                        <p><strong>You can see here, all blog post</strong></p>
                    </div>
                </div>
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


            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">


                <div class="col-lg-8 col-md-6 col-sm-12">
                   <table class="table table-responsive">
                       <thead>
                       <tr>
                           <td>SL</td>
                           <td>Title</td>
                           <td>Description</td>
                           <td>Image</td>
                           <td>Action</td>

                       </tr>
                       </thead>
                       <tbody>
                       @if(!empty($blogpost))
                           @foreach($blogpost as $index =>$post)
                              <tr>
                                 <td>{{$post->id}}</td>
                                 <td>{{$post->title}}</td>
                                  <td>{{$post->description}}</td>
                                 <td><img src="{{asset('assets/blogimg/'. $post->image)}}" class="img img-thumbnail " width="120"></td>
                                <td>
                                  <a href="{{route('insights.edit',$post->id)}}">Edit</a>
                                  <a href="{{route('viewYourPost',$post->id)}}">View</a>
                                  <a href="{{route('deletePost', $post->id)}}">Delete</a>
                                </td>
                              </tr>
                          @endforeach
                       @else
                           <h2>Sorry! no data found</h2>
                       @endif
                       </tbody>
                   </table>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
@endsection


