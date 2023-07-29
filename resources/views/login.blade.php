@extends('app.app')

<style>
    .flex-center{
        min-height: calc(100vh - 80px);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-title a{
        text-decoration: none;
        color: gray;
    }
    .login-title.active a{
        padding-bottom: 3px;
        color:#0d6efd;
        border-bottom: 3px solid #0d6efd;
    }


</style>

<div class="flex-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-around">

                        <h4 class="login-title {{ $activeIn }}"><a href="{{ url('log-in') }}">Acceso</a></h4>
                        <h4 class="login-title {{ $activeUp }}"><a href="{{ url('log-up') }}">Resgistro</a></h4>
                    </div>
                    <div class="card-body">

                        @if (request()->routeIs('log-up'))
                            @include('auth.log-up')
                        @else
                            @include('auth.log-in')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
