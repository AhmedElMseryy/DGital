@extends('admin.master')
@section('title', 'Counters')
@section('counters-active', 'active')


@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline"> Counters</h4>
        </div>

        <!-- Table -->
        <div class="card mb-4">
            <div class="card-body">
                <!--******************* Skills Data *******************-->
                @livewire('admin.counters.counters-data')
                <!--***************************************************-->
            </div>
            <!--*********************** Delete  ***********************-->
            {{-- @livewire('admin.subscribers.subscribers-delete') --}}
            <!--*******************************************************-->
        </div>

    </div>
    <!-- / Content -->

@endsection
