@extends('layouts.admin')

@section('style')
    <style>
        .card{
            background: #333;
            min-height: 100px;
        }
        .card-block .mi{
            font-size: 46px;
        }
        .card-title{
            /*float: right;*/
        }
    </style>
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card dark">
                    <a href="">
                        <div class="card-block">
                            <i class="mi mi-people dark"></i>
                            <div class="pull-right">
                                <h5 class="card-title dark">Members</h5>
                                <h4 class="dark">122</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dark">
                    <a href="">
                        <div class="card-block">
                            <i class="mi mi-face dark"></i>
                            <div class="pull-right">
                                <h5 class="card-title dark">Interns</h5>
                                <h4 class="dark">12</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dark">
                    <a href="">
                        <div class="card-block">
                            <i class="mi mi-verified-user dark"></i>
                            <div class="pull-right">
                                <h5 class="card-title dark">Supervisors</h5>
                                <h4 class="dark">11</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card dark">
                    <a href="">
                        <div class="card-block">
                            <i class="mi mi-event-note dark"></i>
                            <div class="pull-right">
                                <h5 class="card-title dark">Programs</h5>
                                <h4 class="dark">4</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
@endsection
