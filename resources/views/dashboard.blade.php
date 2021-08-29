@extends('layouts.master')

@section('title', 'الرئيسية')

@section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
@endsection

@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الرئيسية</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row my-5">
    <div class="col">
    <div class="card">

        <div class="card-header">
            <h5>لائحة المصوتين</h5>
        </div>
        <div class="card-body">
            <button type="button" class="button x-small d-block mb-3 w-100" data-toggle="modal" data-target=".bd-example-modal-lg">أضف مصوت
            </button>
            {!!$dataTable->table()!!}
        </div>
    </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" style="display: none;"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <div class="mb-30">
                                <h6>إضافة مصوت</h6>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('voters.store') }}" method="POST" id="voter">
                            @csrf
                            <div class="form-group">
                                <label for="fname">إسم المصوت</label>
                                <input type="text" name="fname" class="form-control" id="fname">
                            </div>
                            <div class="form-group">
                                <label for="lname">نسب المصوت</label>
                                <input type="text" name="lname" class="form-control" id="lname">
                            </div>
                            <div class="form-group">
                                <label for="cin">رقم البطاقة الوطنية</label>
                                <input type="text" name="cin" class="form-control" id="cin">
                            </div>
                            <div class="form-group">
                                <label for="municipality">الجماعة الترابية</label>
                                <select name="municipality" class="form-control">
                                    @foreach($municipalities as $municipality)
                                        <option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="circle">الدائرة</label>
                                <input type="number" name="circle" class="form-control" id="circle">
                            </div>
                            <div class="form-group">
                                <label for="bureau">المكتب</label>
                                <input type="number" name="bureau" class="form-control" id="bureau">
                            </div>
                            <button type="submit" class="button x-small">حفظ</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')

    <script>

            // toastr config
            toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "500",
            "timeOut": "2000",
            "extendedTimeOut": "500",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @elseif(Session::has('unreserved'))
        toastr.success('{{ Session::get('unreserved') }}');
        @elseif(Session::has('reserved'))
        toastr.success('{{ Session::get('reserved') }}');
        @elseif(Session::has('voted'))
        toastr.success('{{ Session::get('voted') }}');
        @endif

    </script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@endsection


