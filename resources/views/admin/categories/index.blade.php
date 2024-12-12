@extends('admin.master')
@section('title', 'Categories')
@section('categories-active', 'active')


@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline"> Categories</h4>
            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
                Add New
            </button>

            <!--******************* categories Create *******************-->
            @livewire('admin.categories.categories-create')
            <!--***************************************************-->
        </div>

        <!-- Table -->
        <div class="card mb-4">
            <div class="card-body">
                <!--******************* categories Data *****************-->
                @livewire('admin.categories.categories-data')
                <!--*************************************************-->
            </div>
            <!--******************* Delete & edit *******************-->
            {{-- @livewire('admin.categories.categories-edit') --}}
            {{-- @livewire('admin.categories.categories-delete') --}}
            <!--*****************************************************-->
        </div>

    </div>
    <!-- / Content -->

@endsection
