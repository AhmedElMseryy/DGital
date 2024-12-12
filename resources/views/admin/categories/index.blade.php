@extends('admin.master')
@section('title', 'Categories')
@section('categories-active', 'active')


@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline"> Categories</h4>
        </div>

        <!-- Table -->
        <div class="card mb-4">
            <div class="card-body">
                <!--******************* Skills Data *****************-->
                {{-- @livewire('admin.categories.categories-data') --}}
                <!--*************************************************-->
            </div>
            <!--******************* Delete & Show *******************-->
            {{-- @livewire('admin.categories.categories-delete') --}}
            {{-- @livewire('admin.categories.categories-show') --}}
            <!--*****************************************************-->
        </div>

    </div>
    <!-- / Content -->

@endsection
