@extends('admin.master')
@section('title', 'Subscribers')
@section('subscribers-active', 'active')


@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline"> Subscribers</h4>
        </div>

        <!-- Table -->
        <div class="card mb-4">
            <div class="card-body">
                <!--******************* Skills Data *******************-->
                @livewire('admin.subscribers.subscribers-data')
                <!--***************************************************-->
            </div>
            <!--*********************** Delete  ***********************-->
            @livewire('admin.subscribers.subscribers-delete')
            <!--*******************************************************-->
        </div>

    </div>
    <!-- / Content -->

@endsection
