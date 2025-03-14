@extends('layout')
@section('content')

    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Hüllők</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach ($hullok as $row)
            <div class="col">
                <img src="{{asset('img/'.$row->allat_id.'.jpg')}}" alt="{{$row->allat_id}}" class="w-100">
                <p><b>{{$row->nev}}</b> <i>({{$row->latin_nev}})</i><br>Előfordulása: {{$row->elofordulas}}</p>
                <hr>
            </div>
        @endforeach
    </div>
    </main>
@endsection