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

<h1>Company:</h1>

    <div class="jumbotron text-center">
        <h2>{{ $company->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $company->email }}<br>
            <strong>Logo:</strong> {{ $company->logo }}<br>
            <strong>Website:</strong> {{ $company->website }}<br>
        </p>
    </div>

</div>
</body>
</html>