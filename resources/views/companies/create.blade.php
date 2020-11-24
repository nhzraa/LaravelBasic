<!DOCTYPE html>
<html>
<head>
    <title>Company Data</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('admin/home') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('admin/company') }}">View All Company</a></li>
        <li><a href="{{ URL::to('admin/company/create') }}">Create New Company</a>
    </ul>
</nav>

<h1>Create New Company Data</h1>

<!-- if there are creation errors, they will show here -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{Form::open(array('url' => 'admin/company', 'method' => 'post', 'files' => true))}}

    <div class="form-group">
        {{ Form::label('name', 'Company Name:') }}
        {{ Form::text('name', '') }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email', '') }}
    </div>

    <div class="form-group">
        {{ Form::label('logo', 'Logo') }}
        {{ Form::text('logo','') }}
    </div>

    <div class="form-group">
        {{ Form::label('website', 'Website:') }}
        {{ Form::text('website', '') }}
    </div>

    {{ Form::submit('Create Company', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>