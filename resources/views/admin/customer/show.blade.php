@extends('layouts.app')

@section('content')
<style type="text/css">
    .card-title{
        
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Customer - show</div>

                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>{{$customer->name}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{$customer->address}}</td>
                            </tr>
                            <tr>
                                <td>Orders</td>
                                <td>{{$customer->orders}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{$customer->phone}}</td>
                            </tr>
                        </table>
                        <hr>
                        <a href="{{route('home')}}" class="btn btn-sm btn-info">Go back</a>
                        <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                    </div>  
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
