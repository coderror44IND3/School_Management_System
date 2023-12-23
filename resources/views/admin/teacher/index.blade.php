@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    @if(Auth::user()->role_users != 'student' || Auth::user()->role_users == 'admin')
    @include('admin.dashboard.teacher_admin')
    @else
    @include('admin.access_denied.access_denied_teacher')
    @endif
</div>
@endsection