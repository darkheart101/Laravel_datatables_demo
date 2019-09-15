@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cars</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Manufactor</th>
                                <th>Model</th>
                                <th>Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td>{{ $car->CarManufactor }}</td>
                                    <td>{{ $car->CarModel }}</td>
                                    <td>{{ $car->CarYear }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection