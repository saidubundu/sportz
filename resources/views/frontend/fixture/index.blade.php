@extends('layouts.frontend')

@section('content')

    <div class="bdcmb-bg1 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>LA LIGA FIXTURE</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>club fixtures</li>
{{--                        <li>।</li>--}}
{{--                        <li>barcelona</li>--}}
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

    <!--fixtures area start-->
    <div class="laliga-box pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">la liga</h4>
                    @foreach($fixtures as $fixture)
                    <div class="fixture-box bb-1  ">
                        <div class="club-fixture">
                            <a href="{{route('team.show', $fixture->homeTeam->id)}}">
                            <div class="club-img">
                                <img class="sm-img img-thumbnail" src="{{$fixture->homeTeam->team_logo_url}}" alt="club logo">
                                <span class="img-fluid">{{$fixture->homeTeam->name}}</span>
                            </div>
                                <br>
                            </a>
                            <div class="club-schedule text-center">
                                <h5>{{$fixture->date}}</h5>
                                <p>{{$fixture->pitch}}</p>
                            </div>
                            <a href="{{route('team.show', $fixture->awayTeam->id)}}">
                            <div class="club-img">
                                <span>{{$fixture->awayTeam->name}}</span>
                                <img class="sm-img img-thumbnail" src="{{$fixture->awayTeam->team_logo_url}}" alt="club logo">
                            </div>
                            </a>

                        </div>
                    </div>
                        @endforeach



                </div>
            </div>
        </div>
    </div>

    @stop
