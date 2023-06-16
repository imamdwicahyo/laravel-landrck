@extends('layout.master')

@section('content')
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Elements</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                    <li class="breadcrumb-item text-capitalize"><a href="">Components</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Form Elements</li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <!-- Forms Start -->
            <div class="col-lg-12 mt-4">
                <div class="card rounded shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="title mb-0"> Edit user </h5>
                    </div>

                    <div class="p-4">

                        <form action="{{ route('user.archive.update', [$archive->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Name" value="{{ $archive->name }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Type <span class="text-danger">*</span></label>
                                        <input name="type" id="type" type="text" class="form-control"
                                            placeholder="Type" value="{{ $archive->type }}">
                                    </div>
                                </div>                                
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Consultant <span class="text-danger">*</span></label>
                                        <input name="consultant" id="consultant" type="text" class="form-control"
                                            placeholder="Consultant" value="{{ $archive->consultant }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                        <input name="contract_number" id="contract_number" type="text" class="form-control"
                                            placeholder="Contract Number" value="{{ $archive->contract_number }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Asal BBWS <span class="text-danger">*</span></label>
                                        <input name="bbws_office_id" id="bbws_office_id" type="text" class="form-control"
                                            placeholder="Bbws Office Id" value="{{ $archive->bbws_office_id }}">
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-sm-12 text-end">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary"
                                        value="Simpan">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                        <!--end form-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
@endsection
