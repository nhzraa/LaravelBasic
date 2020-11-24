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

<h1>Employee: </h1>

    <div class="jumbotron text-center">
        <h2>{{ $employees->fname }}</h2>
        <p>
            <strong>Last Name:</strong> {{ $employees->lname }}<br>
            <strong>Email:</strong> {{ $employees->email }}<br>
            <strong>Phone:</strong> {{ $employees->phone }}<br>
            <strong>Company ID:</strong> {{ $employees->company_id }}<br>
        </p>
    </div>

</div>
</body>
</html>