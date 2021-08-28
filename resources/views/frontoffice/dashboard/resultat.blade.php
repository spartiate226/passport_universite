@extends('frontoffice.dashboard.layout')
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card-box-shared">
                <div class="card-box-shared-title">
                    <h3 class="widget-title">Mes resultats</h3>
                </div>
                <div class="card-box-shared-body">
                    <div class="statement-table purchase-table table-responsive mb-5">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Titre du concours</th>
                                <th scope="col">Questions trouvées</th>
                                <th scope="col">Nombre de question sautées</th>
                                <th scope="col">Points gagnés</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (App\concourResultat::where('user_id',"=",Auth::guard('Visitor')->user()->id)->paginate(5) as $result)
                            <tr>
                                <th scope="row">
                                    <div class="statement-info">
                                        <ul class="list-items">
                                            <li class="mb-1">
                                                <span class="badge bg-success text-white p-1"></span>
                                                <span>{{$result->concourQuestion->created_at}}</span>
                                            </li>
                                            <li class="mb-1">
                                                <a href="course-details.html" class="primary-color">{{$result->concourQuestion->title}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </th>
                                <td>
                                    <div class="statement-info">
                                        <ul class="list-items">
                                            <li>12</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="statement-info">
                                        <ul class="list-items">
                                            <li>{{$result->skip}}</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="statement-info">
                                        <ul class="list-items">
                                            <li>{{$result->point}}</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- end col-lg-12 -->
    </div><!-- end row -->
@endsection
