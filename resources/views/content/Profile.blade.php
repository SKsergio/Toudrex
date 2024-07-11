@extends('templates.App')

@push('css')
    <link rel="stylesheet" href="{{asset('css/profiles.css')}}">
@endpush

@section('content')
    {{-- import the component --}}
    <x-profiles>
    </x-profiles>
@endsection