@extends('layouts.app')

@section('main')
    <h1 class="text-center my-4">Meglio di trenitalia</h1>

    <div class=" d-flex justify-content-center">

        <table class="table table-dark text-center">
            <thead class="text-danger">
                <tr>

                    <th scope="col">Destinazione</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Binario</th>
                    <th scope="col">Compagnia</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($trains as $item)
                    <tr>

                        <td>{{ $item->destinazione }}</td>
                        <td>{{ $item->partenza }}</td>
                        <td>{{ $item->arrivo }}</td>
                        <td>{{ $item->binario }}</td>
                        <td>{{ $item->compagnia }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div>ciao</div>
@endsection
