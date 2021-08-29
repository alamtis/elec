@extends('layouts.master')
@section('css')

@section('title', 'الإحصائيات')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="mb-0"> الإحصائيات</h4>
            </div>

        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <!-- widgets -->
    @can('admin')
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-users highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">عدد المصوتين</p>
                            <h4>{{ $votersCount }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-bookmark-o highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">عدد المحجوزين</p>
                            <h4>{{ $votersReserved }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-address-card-o highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">عدد الذين صوتو بنجاح</p>
                            <h4>{{ $votersVoted }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-circle-thin highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">عدد المصوتين في جماعة بوجدور</p>
                            <h4>{{ $votersBjdrVoted }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-circle-thin highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">عدد المصوتين في جماعة الجريفية</p>
                            <h4>{{ $votersJrfVoted }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-circle-thin highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">عدد المصوتين في جماعة كلتة زمور</p>
                            <h4>{{ $votersZmrVoted }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan

    @if (auth()->user()->hasAnyPermission(['admin', 'boujdour']))
    <h3 class="mt-2 mb-4">مكاتب التصويت بجماعة بوجدور</h3>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الثانوية التأهيلية جابر ابن حيان</p>
                            <h4>{{ $votersVoted_1 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">ثانوية القدس الإعدادية</p>
                            <h4>{{ $votersVoted_2 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">ثانوية الوحدة الإعدادية</p>
                            <h4>{{ $votersVoted_3 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">ثانوية عمر بن الخطاب الإعدادية</p>
                            <h4>{{ $votersVoted_4 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">مدرسة مولاي رشيد</p>
                            <h4>{{ $votersVoted_5 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">مدرسة ابن الهيثم</p>
                            <h4>{{ $votersVoted_6 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">مدرسة ابن طفيل</p>
                            <h4>{{ $votersVoted_7 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-bar-chart " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">مدرسة الحسن الثاني</p>
                            <h4>{{ $votersVoted_8 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if (auth()->user()->hasAnyPermission(['admin', 'jrayfia']))
    <h3 class="mt-2 mb-4">مكاتب التصويت بجماعة الجريفية</h3>
    <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 1</p>
                            <h4>{{ $votersVotedJrf_1 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 2</p>
                            <h4>{{ $votersVotedJrf_2 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 3</p>
                            <h4>{{ $votersVotedJrf_3 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 4</p>
                            <h4>{{ $votersVotedJrf_4 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 5</p>
                            <h4>{{ $votersVotedJrf_5 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 6</p>
                            <h4>{{ $votersVotedJrf_6 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 7</p>
                            <h4>{{ $votersVotedJrf_7 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 8</p>
                            <h4>{{ $votersVotedJrf_8 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 9</p>
                            <h4>{{ $votersVotedJrf_9 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 10</p>
                            <h4>{{ $votersVotedJrf_10 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-8 col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 11</p>
                            <h4>{{ $votersVotedJrf_11 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if (auth()->user()->hasAnyPermission(['admin', 'zemmour']))
    <h3 class="mt-2 mb-4">مكاتب التصويت بجماعة كلتة زمور</h3>
    <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 1</p>
                            <h4>{{ $votersVotedZmr_1 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 2</p>
                            <h4>{{ $votersVotedZmr_2 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 3</p>
                            <h4>{{ $votersVotedZmr_3 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 4</p>
                            <h4>{{ $votersVotedZmr_4 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 5</p>
                            <h4>{{ $votersVotedZmr_5 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 6</p>
                            <h4>{{ $votersVotedZmr_6 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 7</p>
                            <h4>{{ $votersVotedZmr_7 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 8</p>
                            <h4>{{ $votersVotedZmr_8 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 9</p>
                            <h4>{{ $votersVotedZmr_9 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 10</p>
                            <h4>{{ $votersVotedZmr_10 }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-8 col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-circle-thin " aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الدائرة 11</p>
                            <h4>{{ $votersVotedZmr_11 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection

