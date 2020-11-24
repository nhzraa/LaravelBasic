<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
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

<h1>All Employees</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Company ID</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->company_id }}</td>

            <td>

                {{ Form::open(array('url' => 'admin/employees/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete Employee', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                
                <a class="btn btn-small btn-success" href="{{ URL::to('admin/employees/show/' . $value->id) }}">View Employee</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('admin/employees/edit/' . $value->id ) }}">Edit Employee</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>