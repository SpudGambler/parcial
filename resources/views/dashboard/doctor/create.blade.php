@extends('dashboard.master')
@section('content')
    <form action="{{ route('doctor.store')}}" method="post">
        @include('dashboard.doctor._form')
    </form>
@endsection