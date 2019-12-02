@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="col-lg-4" style="background: none; min-height: 300px; float: left;">
                <ul style="display: block;">
                    <li>Home</li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/orders">Orders</a></li>
                    <li>Dispatch Orders</li>
                    <li><a href="/clients">Clients</a></li>
                    <li><a href="/users">Users</a></li>
                </ul>
            </div>
            <div class="col-lg-8" style="background-color: red; min-height: 300px; float: right;"></div>
        </div>
    </div>
</div>
@endsection
