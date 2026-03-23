@extends('layouts.app')

@section('title', 'js - 程式練習')

@section('content')
    
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-3.6.4.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>

    
@endpush