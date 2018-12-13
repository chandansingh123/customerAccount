@extends('layouts.app')

@section('content')
<style type="text/css">
    .card-title{

    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-title">
                        <h3>Customer list </h3> 
                        <a href="{{route('customer.create')}}" style="float:right;" class="btn btn-sm btn-primary">Add Customer</a>
                    </div>
                    <div class="clearfix"></div>
                    <table class="table table-bordered table-stripped">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Orders</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        
                        @if($count<1)
                            <tr><td colspan="6">{{'No record found!'}}</td></tr>
                        @else
                            @foreach($customers as $k=>$customer)
                            <tr>
                                <td>{{$k+1}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->orders}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>
                                    
                                    <form action="{{route('customer.delete',$customer->id)}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="{{route('customer.show',$customer->id)}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        {{-- <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger" value="DELETE"> --}}
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
