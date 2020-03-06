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
                            <li><a href="/">home</a></li>
                            <li>।</li>
                            <li>sports news</li>
                            <li>|</li>
                            <li>{{$categoryName}}</li>
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
                    <div class="col-md-12 col-lg-3">
                        <div class="news-box mb50">
                            <div class="news-search">
                                <form action="#">
                                    <input type="text" placeholder="search">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        @include('frontend.includes.blogPopular')


                            @include('frontend.includes.categoryTable')


                        <div class="bnr-img mt50 zoom">
                            <img class="full-width" src="{{asset('images/bg-banner/bnr5.png')}}" alt="banner img">
                        </div>

                    </div>
                        @if(!$posts->count())
                            <div width="100"  class="sports-title mb20">
                                <strong class="alert alert-danger">No record</strong>
                            </div>
                    @else
                    <div class="col-md-12 col-lg-9">
                        @foreach($posts as $post)
                        <div class="sports-news mb60 xs-mt-50">
                            @if($post->image_url)
                            <div class="sports-img zoom mb40">
                                <img width="100%" height="" src="{{$post->image_url}}" alt="news img">
                            </div>
                            @endif
                            <div class="sports-title mb20">
                                <h3>{{$post->title}}</h3>
                                <p>By <span>{{$post->user->name}}</span> / {{$post->published_at->diffForHUmans()}} / 3 Comments / Categories: <a href="{{route('category', $post->category->id)}}"> <span>{{$post->category->name}}</span></a></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ea id, voluptate, iusto, ullam quos maiores animi quo tempore laboriosam laborum magni aliquam molestias aperiam ut libero ipsam sequi harum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ipsum excepturi, ad unde laudantium voluptatum fugiat molestiae in tempore, deserunt hic quibusdam, non nam quaerat eligendi ipsam laboriosam. Facilis, excepturi.</p>
                            <div class="news-btn mt40">
                                <a href="#">read more</a>
                            </div>

                        </div>
                        @endforeach
                        @endif

                        <nav aria-label="Page navigation mt60">
                            {{$posts->render()}}
{{--                            <ul class="pagination justify-content-left">--}}
{{--                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                            </ul>--}}
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    @stop

