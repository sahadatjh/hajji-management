@extends('layouts.master')
@section('title','THG | Package Edit')
@section('content')
<div class="card">
    <div class="card-header bg-dark text-uppercase">
        Edit Package
    </div>
    <div class="card-body ">
        <form action="{{route('packages.update',$package->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="package_title">Package Title</label>
                <input type="text" name="package_title" class="form-control" value="{{$package->package_title}}">
            </div>
            <div class="form-group">
                <label for="price">Package Price</label>
                <input type="number" name="price" class="form-control" value="{{$package->price}}">
            </div>
            <button type="submit" class="btn btn-success float-right"><i class="far fa-save"></i> Update</button>
        </form>
    </div>
</div>
@endsection
