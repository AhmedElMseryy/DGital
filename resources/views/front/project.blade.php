@extends('front.master')
@section('title', 'Projects')
@section('project-active', 'active')

@section('hero-content')
    @include('front.partials.sub-header', ['heroName' => 'Projects'])
@endsection

@section('content')

    <!--*****************************************-->
    @livewire('front.components.projects-component')
    <!--*****************************************-->

@endsection
