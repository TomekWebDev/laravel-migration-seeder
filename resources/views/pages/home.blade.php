@extends('layouts.app')

@section('main')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($trains as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $item['destinazione'] }}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
