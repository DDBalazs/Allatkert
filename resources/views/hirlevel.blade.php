@extends('layout')
@section('content')

    <main>
        <h1 class="text-center">Hirlevél</h1>
        <form action="/hirlevel" method="POST" class="w-50 mx-auto">
            @csrf
            <div class="card">
                <div class="card-body">
                    <p>Kérjük iratkozzon fel a hírlevelünkre!</p>
                    <div>
                        <label for="nev" id="nev" class="form-label">Név:</label>
                        <input type="text" id="nev" name="nev" value="{{old('nev')}}" class="form-control">
                        @error('nev')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="email" id="email" class="form-label">E-Mail:</label>
                        <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <button class="btn btn-success" type="submit">Feliratkozás</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection