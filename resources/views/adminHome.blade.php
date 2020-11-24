@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
            </div>
        </div>
    </div>
</div>

&nbsp;

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">COMPANY DATA</div>
                <div class="card-body">
                    Click here if you want to see Company's data :
                    <button type="button" onclick="window.location='{{ url("admin/company") }}'">COMPANY</button>
                </div>
            </div>
        </div>
    </div>
</div>

&nbsp;

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EMPLOYEES DATA</div>
                <div class="card-body">
                    Click here if you want to see Employees' data :
                    <button type="button" onclick="window.location='{{ url("admin/employees") }}'">EMPLOYEES</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection