@extends('layout.master')

@section('content')
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center">
            <h5 class="mb-0">Archive List</h5>

            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="{{ route('admin.dashboard') }}">Dashbord</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Archive</li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="card col-12 mt-4 p-3">
                {{-- <a href="{{ route('admin.office.create') }}" class="text-end"> --}}
                    <button class="btn btn-primary mb-3">Tambah data</button>
                </a>
                <div class="table-responsive rounded">
                    <table id="datatable" class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom p-3">ID</th>
                                <th class="border-bottom p-3">Name</th>
                                <th class="border-bottom p-3">Phone</th>
                                <th class="border-bottom p-3">Address</th>
                                <th class="border-bottom p-3">Email</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($office as $offices)
                                <tr>
                                    <td>{{ $offices->id }}</td>
                                    <td>{{ $offices->name }}</td>
                                    <td>{{ $offices->phone }}</td>
                                    <td>{{ $offices->address }}</td>
                                    <td>{{ $offices->email }}</td>                                    
                                    <td>
                                        {{-- <a href="{{  route('admin.office.edit', [$offices->id]) }}" class="btn btn-info">Edit</a> --}}
                                        <form action="{{ route('user.archive.destroy', $offices->id) }}" method="POST"
                                            id="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" class="btn btn-danger"
                                                onclick="document.getElementById('delete-form').submit();">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
@endsection
