@extends('layouts.app')

{{-- Begin Page Content --}}
@section('page-title')
    Order Production
    <small></small>
@endsection
@section('page-breadcrumb')
    <li>
        <a href="{{ url('/') }}">Home</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
        <span>OP Page</span>
    </li>
@endsection