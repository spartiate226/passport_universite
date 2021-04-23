@extends('back.layout')
@section('style')
    <link rel="stylesheet" href="{{asset('Theme/AdminLTE-master/plugins/dropzone/min/dropzone.min.css')}}">
@endsection
@section('contenu')
    <form action="{{url('admin/concour/ajouter')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Fichier à charger(format excel)</label>
            <input class="form-control" name="excel" type="file"  />
        </div>
        <button class="btn btn-dark" type="submit">Charger</button>
    </form>
@endsection
@section('script')
    <script src="{{asset('Theme/AdminLTE-master/plugins/dropzone/min/dropzone.min.js')}}"></script>
@endsection
