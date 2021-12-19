@extends('layouts.master')
@section('content')
    <form action="{{route('packages.store')}}" method="post">
        @csrf
        
    </form>
@endsection

@push('css')
    
@endpush

@push('scripts')
    
@endpush