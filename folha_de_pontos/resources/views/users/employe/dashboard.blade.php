@extends('layouts.dashboard')

@section('title')
Dashboard - Gerente
@endsection

@section('content-dashboard')

@if(auth()->user()->role == 1)
	@include('partials.dashboard-content._content_manager')
@else
	@include('partials.dashboard-content._content_employe')
@endif

@endsection