@extends('back.layout')
@section('style')
    <link rel="stylesheet" href="{{asset('Theme/AdminLTE-master/plugins/dropzone/min/dropzone.min.css')}}">
@endsection
@section('contenu')
    <div class="row justify-content-center">
        <form class=" col-md-7 p-3 card" action="{{url('admin/concour/ajouter')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Titre</label>
                <input class="form-control" name="title" type="text"  />
            </div>
            <div class="form-group">
                <label>Categorie</label>
                <select class="form-control" name="concour_categorie_id">
                    @foreach (App\concourCategorie::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Fichier à charger(format excel)</label>
                <input class="form-control" name="excel" type="file"  />
            </div>
            <section class="text-center">
                <button class="btn btn-dark" type="submit">Charger</button>
            </section>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{asset('Theme/AdminLTE-master/plugins/dropzone/min/dropzone.min.js')}}"></script>
@endsection
