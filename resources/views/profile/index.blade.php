@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="text-center">{{$user->name}}'s Profile</p>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="" height="70px" width="70px" alt="avatar" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
