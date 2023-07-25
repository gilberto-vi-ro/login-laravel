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
        color:#000;
        border-bottom: 3px solid #000;
    }


</style>

<div class="flex-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-around">
                        <h4 class="login-title {{ (request()->routeIs('log-in')) ? 'active' : '' }}"><a href="{{ url('log-in') }}">Acceso</a></h4>
                        <h4 class="login-title {{ (request()->routeIs('log-up')) ? 'active' : '' }}"><a href="{{ url('log-up') }}">Resgistro</a></h4>
                    </div>
                    <div class="card-body">

                        @if (request()->routeIs('log-in'))
                            @include('auth.log-in')
                        @else
                            @include('auth.log-up')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
