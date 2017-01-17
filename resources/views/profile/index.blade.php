@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$user->name}}'s Profile</div>
                    <div class="panel-body">
                        <img src="{{ Storage::url($user->avatar) }}" height="70px" width="70px" alt="avatar">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
