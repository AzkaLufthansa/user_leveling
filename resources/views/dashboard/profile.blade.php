@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Profile</h1>
        <p class="text-muted h6 text-capitalize">role: {{ auth()->user()->role->role }}</p>
    </div>
@endsection