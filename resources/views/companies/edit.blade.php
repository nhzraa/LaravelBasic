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
        <li><a href="{{ URL::to('admin/company/create') }}">Create Company Data</a>
    </ul>
</nav>

<h1>Edit Company: {{ $company->name }}</h1>

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

{{ Form::model($company, array('route' => array('companies.update', $company->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('logo', 'Logo') }}
        {{ Form::text('logo',null, array('class' => 'form-control')) }}
    </div>

	<div class="form-group">
        {{ Form::label('website', 'Website') }}
        {{ Form::text('website', null,array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit Company', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>