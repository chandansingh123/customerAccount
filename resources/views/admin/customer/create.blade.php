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
                <div class="card-header">Customer</div>

                <div class="card-body">
                    <form action="{{route('customer.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="customer name here.." value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="customer address here.." value="{{ old('address') }}" required>
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name">Orders</label>
                            <input type="text" name="orders" class="form-control" placeholder="customer orders here.." value="{{ old('orders') }}" required>
                            @if ($errors->has('orders'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('orders') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="customer phone here.." value="{{ old('phone') }}" required>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" value="submit" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
