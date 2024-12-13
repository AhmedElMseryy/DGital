@extends('admin.master')
@section('title', 'Projects')
@section('projects-active', 'active')


@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline"> Projects</h4>
            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
                Add New
            </button>

            <!--******************* projects Create *******************-->
            @livewire('admin.projects.projects-create')
            <!--***************************************************-->
        </div>

        <!-- Table -->
        <div class="card mb-4">
            <div class="card-body">
                <!--******************* projects Data *****************-->
                @livewire('admin.projects.projects-data')
                <!--*************************************************-->
            </div>
            <!--******************* Delete & edit *******************-->
            {{-- @livewire('admin.projects.projects-update') --}}
            {{-- @livewire('admin.projects.projects-delete') --}}
            <!--*****************************************************-->
        </div>

    </div>
    <!-- / Content -->

@endsection
