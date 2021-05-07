@extends('layouts.app')

@section('content')
    @include('partials.header')
    @include('heros')
    <main id="main">
        @include('about')
        @include('facts')
        @include('skills')
        @include('resume')
        @include('portofolio')
        @include('services')
        @include('contact')
    </main>
    @include('partials.footer')
@endsection