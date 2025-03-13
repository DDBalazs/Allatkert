@extends('layout')
@section('content')

    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Jegyárak</h1>
        <h2>Egyéni jegyek</h2>
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Megnevezés</th>
                    <th>Leírás</th>
                    <th>Ár</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $row)
                    <tr>
                        <td>{{$row->megnevezes}}</td>
                        <td>{{$row->reszletek}}</td>
                        <td>{{number_format($row->ar,0,',',' ')}} Ft</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Családi jegyek</h2>
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Megnevezés</th>
                    <th>Leírás</th>
                    <th>Ár</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result2 as $row)
                    <tr>
                        <td>{{$row->megnevezes}}</td>
                        <td>{{$row->reszletek}}</td>
                        <td>{{number_format($row->ar,0,',',' ')}} Ft</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Csoportos jegyek</h2>
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Megnevezés</th>
                    <th>Leírás</th>
                    <th>Ár</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result3 as $row)
                    <tr>
                        <td>{{$row->megnevezes}}</td>
                        <td>{{$row->reszletek}}</td>
                        <td>{{number_format($row->ar,0,',',' ')}} Ft</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@endsection