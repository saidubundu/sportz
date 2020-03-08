@extends('layouts.frontend')

@section('content')

    <div class="bdcmb-bg1 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>barcelona</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">home</a></li>
                        <li>।</li>
                        <li><a href="{{route('team.index')}}">club list</a></li>
                        <li>।</li>
                        <li>{{$team->name}}</li>
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
                <div class="col-md-12 col-lg-3">
                    <div class="club-authority">
                        <img src="{{$team->team_logo_url}}" alt="club logo">
                        <h4 class="mt30">fc {{$team->name}}</h4>
                        <p>football club</p>
                        <div class="authority-box mt30">
                            <p><strong>Established in</strong> : {{$team->established_in}}</p>
{{--                            <p><strong>Arena/Stadium</strong> : Camp Nou</p>--}}
                            <p><strong>Manager</strong> : {{$team->manager}}</p>
                            <p><strong>Training ground</strong>: {{$team->ground}}</p>
                            <p><strong>Coach</strong> : {{$team->coach}} </p>
{{--                            <p><strong>Leagues</strong> : {{}}</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="club-history">
                        <div class="section-title mb30 xs-mt-30">
                            <h4><span>club history</span></h4>
                        </div>
                        <p>{{$team->history}}</p> <br>
                        <div class="history-img pad40">
                            <img class="img-fluid full-width" src="{{$team->squad_photo_url}}" alt="club img">

                        </div>
                    </div>
                    <div class="team-box">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">squad</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">honours</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">photos</a>
                            <a class="nav-item nav-link" id="nav-jersy-tab" data-toggle="tab" href="#nav-jersy" role="tab" aria-controls="nav-jersy" aria-selected="false">jersy</a>
                        </div>
                        <div class="tab-content mt40" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    @foreach($players as $player)
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <a href="{{route('player.show', $player->id)}}">
                                            <img class="full-width img-thumbnail img-fluid" src="{{$player->profile_image_url}}" alt="player img">
                                            <h5 class="mt10">{{$player->nickName}}</h5>
                                            <p>{{$player->position->name}}</p>
                                            </a>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/1.jpg" alt="player img">
                                            <h5 class="mt10">robbie brady</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/2.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/3.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/4.jpg" alt="player img">
                                            <h5 class="mt10">robbie brady</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/5.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/6.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/7.jpg" alt="player img">
                                            <h5 class="mt10">robbie brady</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/8.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/9.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/10.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/11.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/1.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/2.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/3.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/4.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/5.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/6.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/7.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/8.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/9.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/10.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/11.jpg" alt="player img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-jersy" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/1.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/2.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/3.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/4.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/5.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/6.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/7.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/8.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/9.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/10.jpg" alt="player img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/11.jpg" alt="player img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop
