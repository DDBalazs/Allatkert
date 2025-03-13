@extends('layout')
@section('content')

    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Jegyárak</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach ($result as $row)
            <div class="col">
                
            </div>
        @endforeach
    </div>
    </main>
@endsection