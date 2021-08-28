@extends('frontoffice.dashboard.layout')
@section('content')
<div class="row mt-5">
    <div class="col-lg-12 column-lmd-2-half column-md-2-full">
        <div class="icon-box d-flex align-items-center">
            <div class="icon-element icon-element-bg-1 flex-shrink-0">
                <i class="la la-mouse-pointer"></i>
            </div><!-- end icon-element-->
            <div class="info-content">
                <h4 class="info__title mb-2">Quiz enrollés</h4>
                <span class="info__count">{{count(App\enrollement::where('user_id',"=",Auth::guard('Visitor')->user()->id)->get())}}</span>
            </div><!-- end info-content -->
        </div>
    </div><!-- end col-lg-4 -->
    {{-- <div class="col-lg-4 column-lmd-2-half column-md-2-full">
        <div class="icon-box d-flex align-items-center">
            <div class="icon-element icon-element-bg-2 flex-shrink-0">
                <i class="la la-file-text-o"></i>
            </div><!-- end icon-element-->
            <div class="info-content">
                <h4 class="info__title mb-2">Active Courses</h4>
                <span class="info__count">5</span>
            </div><!-- end info-content -->
        </div>
    </div><!-- end col-lg-4 --> --}}
    {{-- <div class="col-lg-4 column-lmd-2-half column-md-2-full">
        <div class="icon-box d-flex align-items-center">
            <div class="icon-element icon-element-bg-3 flex-shrink-0">
                <i class="la la-graduation-cap"></i>
            </div><!-- end icon-element-->
            <div class="info-content">
                <h4 class="info__title mb-2">Completed Courses</h4>
                <span class="info__count">6</span>
            </div><!-- end info-content -->
        </div>
    </div><!-- end col-lg-4 --> --}}
    {{-- <div class="col-lg-4 column-lmd-2-half column-md-2-full">
        <div class="icon-box d-flex align-items-center">
            <div class="icon-element icon-element-bg-4 flex-shrink-0">
                <i class="la la-users"></i>
            </div><!-- end icon-element-->
            <div class="info-content">
                <h4 class="info__title mb-2">Total Students</h4>
                <span class="info__count">300</span>
            </div><!-- end info-content -->
        </div>
    </div><!-- end col-lg-4 --> --}}
     {{-- <div class="col-lg-4 column-lmd-2-half column-md-2-full">
        <div class="icon-box d-flex align-items-center">
            <div class="icon-element icon-element-bg-5 flex-shrink-0">
                <i class="la la-file-video-o"></i>
            </div><!-- end icon-element-->
            <div class="info-content">
                <h4 class="info__title mb-2">Total Courses</h4>
                <span class="info__count">11</span>
            </div><!-- end info-content -->
        </div>
    </div><!-- end col-lg-4 --> --}}
     <div class="col-lg-12 column-lmd-2-half column-md-2-full">
        <div class="icon-box d-flex align-items-center">
            <div class="icon-element icon-element-bg-6 flex-shrink-0">
                <i class="la la-dollar"></i>
            </div><!-- end icon-element-->
            <div class="info-content">
                <h4 class="info__title mb-2">Points total gagnés</h4>
                <span class="info__count">{{totalpoint()}}</span>
            </div><!-- end info-content -->
        </div>
    </div><!-- end col-lg-4 -->
</div><!-- end row -->
@endsection