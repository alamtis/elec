@extends('layouts.master')

@section('title', 'الرئيسية')

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

    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <button type="button" class="button x-small d-block mb-3 w-100" data-toggle="modal"
                        data-target=".bd-example-modal-lg">أضف مصوت
                </button>
                <div class="table-responsive">
                    <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable" class="table table-striped table-bordered p-0 dataTable"
                                       role="grid" aria-describedby="datatable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                            rowspan="1"
                                            colspan="1" aria-sort="ascending">الرقم الترتيبي
                                        </th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                            rowspan="1"
                                            colspan="1" aria-sort="ascending">ب.ت.و
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">الإسم
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">النسب
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">الجماعة
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">الدائرة
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">المكتب
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">مكتب التصويت
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">المؤطر
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">الحالة
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                            colspan="1">الحدث
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($voters as $voter)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $voter->ord_num }}</td>
                                            <td >{{ Str::upper($voter->cin) }}</td>
                                            <td>{{ $voter->fname }}</td>
                                            <td>{{ $voter->lname }}</td>
                                            <td>{{ $voter->municipality->name }}</td>
                                            <td>{{ $voter->circle }}</td>
                                            <td>{{ $voter->bureau }}</td>
                                            <td>{{ $voter->bureau_addr }}</td>
                                            <td>BJ-1</td>
                                            <td>
                                                @if($voter->status_value === 0)
                                                    <label class="badge badge-secondary">
                                                        {{ $voter->status }}
                                                    </label>
                                                @elseif($voter->status_value === 1)
                                                    <label class="badge badge-danger">
                                                        {{ $voter->status }}
                                                    </label>
                                                @elseif($voter->status_value === 2 )
                                                    <label class="badge badge-success">
                                                        {{ $voter->status }}
                                                    </label>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    @if($voter->status_value === 0)
                                                        <form action="{{ route('voters.update', $voter) }}"
                                                              method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="reserved"
                                                                   value="reserved">
                                                            <button type="button" class="btn btn-outline-danger btn-sm mx-2" id="reserved">
                                                                تم
                                                                الحجز
                                                            </button>
                                                        </form>
                                                    @elseif($voter->status_value === 1 && !auth()->user()->can('cadre'))
                                                        <form action="{{ route('voters.update', $voter) }}"
                                                              method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="voted" value="voted">
                                                            <button type="button" class="btn btn-outline-success btn-sm mx-2" id="voted">تم التصويت</button>
                                                        </form>
                                                    @endif
                                                    @can('admin')
                                                        <form action="{{ route('voters.update', $voter) }}"
                                                              method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="unreserved"
                                                                   value="unreserved">
                                                            <button type="button" class="btn btn-outline-secondary btn-sm mx-2" id="unreserved">غير محجوز</button>
                                                        </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of datatable -->
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
                                <input type="text" name="fname" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="lname">نسب المصوت</label>
                                <input type="text" name="lname" class="form-control" id="name">
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
                    toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
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
                        @endif

            </script>
@endsection
