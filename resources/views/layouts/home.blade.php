@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'panel'
])
@section('title', 'Panel')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card card-user">
                <div class="image">
                    <img src="{{ url('assets_template/img/bg/eyza-banner.jpg')}}" alt="aux_img">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{ asset('assets_template/img/default-avatar.png') }}" alt="...">

                            <h5 class="title">{{ __(auth()->user()->name)}}</h5>
                        </a>
                        <p class="description">
                            @ {{ __(auth()->user()->name)}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
