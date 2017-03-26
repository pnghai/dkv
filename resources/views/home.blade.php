<!-- Stored in resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Homepage')
@section('content')
    <div class="container-fluid viewport">
        <div class="row align-items-center h-100 justify-content-md-center">
            <div class="mw340">
                @include('partials.journey.search-form');
            </div>
        </div>
    </div>
@endsection