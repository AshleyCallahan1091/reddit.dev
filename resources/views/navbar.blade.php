@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/posts">Cruddit</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/posts">Posts <span class="sr-only"></span></a></li>
        <li><a href="/posts/create">Create</a></li>
        <li><a href="{{ action('UsersController@show') }}">Profile</a></li>
      </ul>
      <form method="GET" action="{{ action('PostsController@index') }}" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="search_input" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="/posts">Welcome {{ Auth::user()->name }}!</a></li>
        <li><a href="/auth/logout">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

