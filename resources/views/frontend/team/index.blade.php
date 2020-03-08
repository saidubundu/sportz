@extends('layouts.frontend')

@section('content')
    <div class="bdcmb-bg1 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Premiere League Clubs</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">home</a></li>
                        <li>।</li>
                        <li>club list</li>
                        <li>।</li>

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

    <!--club-list-area start-->
    <div class="club-list-area pad60">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12">

                    <div class="team-box">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"  role="tab" aria-controls="nav-home" aria-selected="true">Clubs List</a>

                        </div>
                        <div class="tab-content mt40" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    @foreach($teams as $team)
                                    <div class="col-lg-4 col-md-12">

                                        <div class="team-mem mb30">
                                            <a href="{{route('team.show', $team->id)}}">
                                            <img height="" class="full-width img-thumbnail" src="{{$team->team_logo_url}}" alt="player img">
                                            <h5 class="mt10">{{$team->name}}</h5>
                                            </a>
                                            <br>

                                        </div>

                                    </div>
                                    @endforeach


                                </div>
                                {{$teams->render()}}
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
