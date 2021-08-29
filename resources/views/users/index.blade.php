
@extends('layouts.master')

@section('title', 'المستخدمين')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.css') }}">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="mb-0"> قائمة المستخدمين</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <button type="button" class="button x-small d-block w-100" data-toggle="modal"
                            data-target=".bd-example-modal-lg">أضف مستخدم
                    </button>
                    <div class="col-xl-12 mb-30">
                        <div class="table-responsive mt-15">
                            <table class="table center-aligned-table mb-0" id="table">
                                <thead>
                                <tr class="text-dark">
                                    <th>الإسم</th>
                                    <th>الدور</th>
                                    <th>الحدث</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <label class="badge badge-success">
                                                @if($user->role === 'admin')
                                                    مدير
                                                @elseif($user->role === 'candidate')
                                                    مترشح
                                                @elseif($user->role === 'cadre')
                                                    مؤطر
                                                @elseif($user->role === 'chef_bureau')
                                                    رئيس مكتب
                                                @elseif($user->role === 'other')
                                                    آخر
                                                @endif
                                            </label>
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="#" id="editbtn" data-id="{{ $user->id }}" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#myModaledit">تعديل</a>
                                                <form action="{{ route('users.destroy', $user) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-outline-danger btn-sm mx-2">حذف
                                                    </button>
                                                </form>
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
        </div>

    </div>
    <!-- row closed -->
    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" style="display: none;"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <div class="mb-30">
                            <h6>إضافة مستخدم</h6>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">إسم المستخدم</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="cin">رقم البطاقة الوطنية</label>
                            <input type="text" name="cin" class="form-control" id="cin">
                        </div>
                        <div class="form-group">
                            <label for="password">كلمة السر</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="role" class="d-block">الدور</label>
                                <select class="select" name="role" style="width: 100%">
                                    <option value="admin">مدير</option>
                                    <option value="candidate">مترشح</option>
                                    <option value="cadre">مؤطر</option>
                                    <option value="chef_bureau">رئيس مكتب</option>
                                    <option value="other">آخر</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="permissions" class="d-block">الصلاحيات</label>
                            <select class="select" name="permissions[]" multiple="multiple" style="width: 100%">
                                <option value="admin">مدير</option>
                                <option value="candidate">مترشح</option>
                                <option value="cadre">مؤطر</option>
                                <option value="chef_bureau">رئيس مكتب</option>
                                <option value="boujdour">جماعة بوجدور</option>
                                <option value="jrayfia">جماعة الجريفية</option>
                                <option value="zemmour">جماعة كلتة زمور</option>
                                <option value="other">آخر</option>
                                <option value="c1">االدائرة 1</option>
                                <option value="c2">الدائرة 2</option>
                                <option value="c3">الدائرة 3</option>
                                <option value="c4">الدائرة 4</option>
                                <option value="c5">الدائرة 5</option>
                                <option value="c6">الدائرة 6</option>
                                <option value="c7">الدائرة 7</option>
                                <option value="c8">الدائرة 8</option>
                                <option value="c9">الدائرة 9</option>
                                <option value="c10">الدائرة 10</option>
                                <option value="c11">الدائرة 11</option>
                                <option value="c12">الدائرة 12</option>
                                <option value="c13">الدائرة 13</option>
                                <option value="c14">الدائرة 14</option>
                                <option value="c15">الدائرة 15</option>
                                <option value="c16">الدائرة 16</option>
                                <option value="c17">الدائرة 17</option>
                                <option value="c18">الدائرة 18</option>
                                <option value="c19">الدائرة 19</option>
                                <option value="c20">الدائرة 20</option>
                                <option value="c21">الدائرة 21</option>
                                <option value="c22">الدائرة 22</option>
                                <option value="c23">الدائرة 23</option>
                                <option value="c24">الدائرة 24</option>
                                <option value="c25">الدائرة 25</option>
                            </select>
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
    <div id="myModaledit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" style="display: none;"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <div class="mb-30">
                            <h6>إضافة مستخدم</h6>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="editform">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">إسم المستخدم</label>
                            <input type="text" name="name" class="form-control" id="editname">
                        </div>
                        <div class="form-group">
                            <label for="cin">رقم البطاقة الوطنية</label>
                            <input type="text" name="cin" class="form-control" id="editcin">
                        </div>
                        <div class="form-group">
                            <label for="password">كلمة السر</label>
                            <input type="password" name="password" class="form-control" id="editpassword">
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
        $('#table').DataTable({
            paging: true,
            ordering: true
        });
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
        @elseif(Session::has('updated'))
            toastr.success('{{ Session::get('updated') }}');
        @elseif(Session::has('deleted'))
            toastr.success('{{ Session::get('deleted') }}');
        @endif

        $('#editbtn').click(function (e) {
            e.preventDefault();
             var id;
            $('body').on('click', '#editbtn', function(e) {
                e.preventDefault();
                id = $(this).data('id');
                $.ajax({
                    url: "users/"+id+"/edit",
                    method: 'GET',
                    data: {
                        id: id,
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#editform').attr('action', 'users/' + result.id);
                        $('#editname').val(result.name);
                        $('#editcin').val(result.email);
                    }
                });
            });

        });
    </script>
@endsection
