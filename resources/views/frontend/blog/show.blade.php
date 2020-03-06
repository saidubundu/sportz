@extends('layouts.frontend')

@section('content')

    <div class="bdcmb-bg4 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>sports news</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>sports news</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.page-header -->
    <!-- page title & breadcrumbs end -->

    <div class="news-area pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                    <div class="sports-news mb60">
                        @if($post->image_url)
                            <div class="sports-img zoom mb40">
                                <img width="100%" height="100%" src="{{$post->image_url}}" alt="news img">
                            </div>
                        @endif
                        <div class="sports-title mb20">
                            <h3>{{$post->title}}</h3>
                            <p>By <span>{{$post->user->name}}</span> / {{$post->published_at->diffForHumans()}} / 3 Comments / Categories: <a href="{{route('category', $post->category->id)}}"> <span>{{$post->category->name}}</span></a></p>
                        </div>
                        <p>{{$post->body}}</p> <br>
{{--                        <div class="sports-arrow mt60">--}}
{{--                            <a href="#">previous</a>--}}
{{--                            <a href="#">next</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    @include('frontend.includes.blogPopular')
                    <br>
                    @include('frontend.includes.categoryTable')
                    <div class="bnr-img mt50 zoom">
                        <img class="full-width" src="assets/images/bg-banner/bnr1.jpg" alt="banner img">
                    </div>
                    <div class="follow-us-area mt50">
                        <div class="section-title news-title">
                            <h4> <span>follow us</span></h4>
                        </div>
                        <div class="link-box mt30">
                            <a href="#"><i class="fa fa-facebook"></i>faceboook</a>
                            <a href="#"><i class="fa fa-twitter"></i>twitter</a>
                            <a href="#"><i class="fa fa-google-plus-official"></i>google plus</a>
                            <a href="#"><i class="fa fa-linkedin"></i>linkedin</a>
                            <a href="#"><i class="fa fa-instagram"></i>instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
