<!DOCTYPE html>
<html>
<head>
    <title>Employees Data</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('admin/home') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('admin/employees') }}">View All Employees</a></li>
        <li><a href="{{ URL::to('admin/employees/create') }}">Create Employees Data</a>
    </ul>
</nav>

<h1>Edit Employee {{ $employees->name }}</h1>

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

{{ Form::model($employees, array('route' => array('employees.update', $employees->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('fname', 'First Name') }}
        {{ Form::text('fname', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lname', 'Last Name') }}
        {{ Form::text('lname', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Phone') }}
        {{ Form::text('phone',null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit Employee', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>