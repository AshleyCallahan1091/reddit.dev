@extends('layouts.master')

@section('content')

<form style="margin-left: 5%; margin-top: 5%;" method="POST" action="{{ action('UsersController@update', ['id' => $user->id]) }}">
        
        {!! csrf_field() !!}
        {{ method_field('PUT')}}

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
                        <div>
                            <!-- <p>{{ $user->name }}</p> -->
                             <div class="form-group">
                                 <label>Name: <input type="text" name="name" class="form-control" value="{{ $user->name }}"></label>
                            </div>
                        </div>
                        <div class="desc">

                            <div class="form-group">
                                 <label>Email: <input type="text" name="email" class="form-control" value="{{ $user->email }}"></label>
                            </div>
                       
                        </div>
                        <!-- <div class="desc">

                            <div class="form-group">
                                 <label>Change Password: <input type="password" name="password" class="form-control"></label>
                            </div>
                       
                        </div>
                        <div class="desc">

                            <div class="form-group">
                                 <label>Confirm Password: <input type="password" name="confirm_password" class="form-control"></label>
                            </div>
                       
                        </div> -->
                        <div class="desc">Coffee is good</div>
                        <div class="desc">I am addicted to coffee</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <input type="submit" class="btn btn-default">

</form>

@stop


       <!--  <div class="form-group">
            <label>Title: <input type="text" name="title" class="form-control" value="{{ old('title') }}"></label>
        </div>

        <div class="form-group">
            <label>Content: <input type="text" name="content" rows="5" cols="40" class="form-control" value="{{ old('content') }}"></label>
        </div>

        <div class="form-group">
            <label>URL: <input type="text" name="url" class="form-control" value="{{ old('url') }}"></label>
        </div>

        <input type="submit" class="btn btn-default">

    </form>
    </div> -->