@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                    <img alt="" src="">
                </div>
                <div class="avatar">
                    <img alt="" src="">
                </div>
                <div class="info">
                    <div class="title">
                        <p>{{ $user->name }}</p>
                        
                    </div>
                    <div class="desc">I like coffee</div>
                    <div class="desc">Coffee is good</div>
                    <div class="desc">I am addicted to coffee</div>
                </div>
            </div>
        </div>

    </div>
</div>

@stop