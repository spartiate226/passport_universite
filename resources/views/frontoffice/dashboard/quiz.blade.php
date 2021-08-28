@extends('frontoffice.dashboard.layout')
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card-box-shared">
                <div class="card-box-shared-title">
                    <h3 class="widget-title">Quizs disponibles</h3>
                </div>
                <div class="card-box-shared-body">
                    @foreach($quizs as $quiz)
                        <div class="card-item card-list-layout">
                        <div class="card-image">
                            <a href="" class="card__img"><img src="{{asset('images/question-mark.jpg')}}" alt=""></a>
                        </div>
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="">{{$quiz->title}}</a>
                            </h3>

                            <div class="card-action">
                                <ul class="card-duration d-flex">
                                    <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Type:</span>
                                                    <span class="badge bg-success text-white">Gratuit</span>
                                                </span>
                                    </li>
                                    <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Categorie:</span>
                                                    <span class="status-text primary-color-3">{{$quiz->concour_categorie->nom}}</span>
                                                </span>
                                    </li>

                                </ul>
                            </div><!-- end card-action -->
                            <div class="card-price-wrap d-flex align-items-center">
                                <p class="card__price">{{$quiz->prix ?? ""}}</p>
                                <div class="edit-action">
                                    <ul class="edit-list">
                                        <li><a href="{{url("page/enrollement/$quiz->id")}}" class="theme-btn view-btn">S'enroller</a></li>
                                    </ul>
                                </div>
                            </div><!-- end card-price-wrap -->
                        </div><!-- end card-content -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div><!-- end col-lg-12 -->
    </div><!-- end row -->
@endsection
