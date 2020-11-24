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
        <li><a href="{{ URL::to('admin/employees/create') }}">Create New Employee</a>
    </ul>
</nav>

<h1>Create New Employees Data</h1>

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

{{ Form::open(array('url' => 'admin/employees')) }}

    <div class="form-group">
        {{ Form::label('fname', 'First Name:') }}
        {{ Form::text('fname', '', array('required' => 'required')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lname', 'Last Name:') }}
        {{ Form::text('lname', '', array('required' => 'required')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email', '') }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Phone:') }}
        {{ Form::text('phone', '') }}
    </div>

    <div class="form-group">
        {{ Form::label('company_id', 'Company ID:') }}
        {{ Form::select('company_id', $companies, null, ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Create Employee', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>