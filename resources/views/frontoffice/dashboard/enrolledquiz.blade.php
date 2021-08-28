@extends('frontoffice.dashboard.layout')
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">

            <div class="card-box-shared">
                <div class="card-box-shared-title">
                    <h3 class="widget-title">Enrollements</h3>
                </div>
                <div class="card-box-shared-body">
                    <div class="section-tab section-tab-2">
                        <ul class="nav nav-tabs" role="tablist" id="review">
                            <li role="presentation">
                                <a href="#all-course" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                    Tous
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#active-course" role="tab" data-toggle="tab" aria-selected="false">
                                    En cours
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#completed-course" role="tab" data-toggle="tab" aria-selected="false">
                                    Complètés
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard-tab-content mt-5">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active show" id="all-course">
                                @foreach(App\enrollement::where('user_id',"=",\Illuminate\Support\Facades\Auth::guard('Visitor')->user()->id)->paginate(5) as $enrolled)
                                <div class="card-item card-list-layout">
                                    <div class="card-image">
                                        <a href="course-details.html" class="card__img"><img src="{{asset('images/question-mark.jpg')}}" alt=""></a>
                                    </div><!-- end card-image -->
                                    <div class="card-content">
                                        <h3 class="card__title">
                                            <a href="">{{$enrolled->concour_question->title}}</a>
                                        </h3>
                                        <div class="card-action mt-2">
                                            <ul class="card-duration d-flex">
                                                <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Type :</span>
                                                                <span class="status-text primary-color-3">Gratuit </span>
                                                            </span>
                                                </li>
                                                <li>
                                                            <span class="meta__date">
                                                                <span class="status-text"> Categorie:</span>
                                                                <span class="status-text primary-color-3">{{$enrolled->concour_question->concour_categorie->nom}}</span>
                                                            </span>
                                                </li>
                                            </ul>
                                        </div><!-- end card-action -->
                                        <div class="edit-action">
                                            <ul class="edit-list">
                                                <li><a href="{{url("page/quiz-run/".$enrolled->concour_question->id)}}" class="theme-btn view-btn">Commencer</a></li>
                                            </ul>
                                        </div>

                                    </div><!-- end card-content -->
                                </div>
                                @endforeach
                            </div><!-- end tab-pane-->
                            <div role="tabpanel" class="tab-pane fade" id="active-course">
                                <div class="card-item card-list-layout">
                                    <div class="card-image">
                                        <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                    </div><!-- end card-image -->
                                    <div class="card-content">
                                        <h3 class="card__title">
                                            <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                        </h3>
                                        <p class="card__author">
                                            <a href="teacher-detail.html">kamran paul</a>
                                        </p>
                                        <div class="card-action mt-2">
                                            <ul class="card-duration d-flex">
                                                <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                </li>
                                                <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">0/5</span>
                                                            </span>
                                                </li>
                                            </ul>
                                        </div><!-- end card-action -->
                                        <div class="progress-bar-wrap mb-3">
                                            <div class="progress-item course-complete-bar">
                                                <p class="skillbar-title">Complete</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar" data-percent="0%">
                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                    </div> <!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">0%</div>
                                            </div>
                                        </div>
                                        <div class="rating-wrap d-flex">
                                            <div class="rating-shared">
                                                <fieldset>
                                                    <input type="radio" id="star16" name="rating" value="5" /><label for="star16" title="Outstanding"></label>
                                                    <input type="radio" id="star17" name="rating" value="4" /><label for="star17" title="Very Good"></label>
                                                    <input type="radio" id="star18" name="rating" value="3" /><label for="star18" title="Good"></label>
                                                    <input type="radio" id="star19" name="rating" value="2" /><label for="star19" title="Poor"></label>
                                                    <input type="radio" id="star20" name="rating" value="1" /><label for="star20" title="Very Poor"></label>
                                                </fieldset>
                                            </div>
                                            <p class="primary-color-3 ml-2">Leave a Rating</p>
                                        </div>
                                    </div><!-- end card-content -->
                                </div><!-- end card-item -->
                            </div><!-- end tab-pane-->
                            <div role="tabpanel" class="tab-pane fade" id="completed-course">
                                <div class="card-item card-list-layout">
                                    <div class="card-image">
                                        <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                    </div><!-- end card-image -->
                                    <div class="card-content">
                                        <h3 class="card__title">
                                            <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                        </h3>
                                        <p class="card__author">
                                            <a href="teacher-detail.html">kamran paul</a>
                                        </p>
                                        <div class="card-action mt-2">
                                            <ul class="card-duration d-flex">
                                                <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                </li>
                                                <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">5/5</span>
                                                            </span>
                                                </li>
                                            </ul>
                                        </div><!-- end card-action -->
                                        <div class="progress-bar-wrap mb-3">
                                            <div class="progress-item course-complete-bar">
                                                <p class="skillbar-title">Complete</p>
                                                <div class="skillbar-box">
                                                    <div class="skillbar" data-percent="100%">
                                                        <div class="skillbar-bar skillbar-bar-1"></div>
                                                    </div> <!-- End Skill Bar -->
                                                </div>
                                                <div class="skill-bar-percent">100%</div>
                                            </div>
                                        </div>
                                        <div class="rating-wrap d-flex">
                                            <div class="rating-shared">
                                                <fieldset>
                                                    <input type="radio" id="star26" name="rating" value="5" /><label for="star26" title="Outstanding"></label>
                                                    <input type="radio" id="star27" name="rating" value="4" /><label for="star27" title="Very Good"></label>
                                                    <input type="radio" id="star28" name="rating" value="3" /><label for="star28" title="Good"></label>
                                                    <input type="radio" id="star29" name="rating" value="2" /><label for="star29" title="Poor"></label>
                                                    <input type="radio" id="star30" name="rating" value="1" /><label for="star30" title="Very Poor"></label>
                                                </fieldset>
                                            </div>
                                            <p class="primary-color-3 ml-2">Leave a Rating</p>
                                        </div>
                                    </div><!-- end card-content -->
                                </div><!-- end card-item -->
                            </div><!-- end tab-pane-->
                        </div><!-- end tab-content -->
                    </div><!-- end dashboard-tab-content -->
                </div>
            </div>
        </div><!-- end col-lg-12 -->
    </div><!-- end row -->
@endsection
