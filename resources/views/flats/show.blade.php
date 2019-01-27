@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-8 col-lg-5">
            <table class="table table-striped table-sm">
                <tbody>
                    <tr>
                        <td>Flat size:</td>
                        <td>{{$flat->size}} (sqf)</td>
                    </tr>
                    <tr>
                        <td>Rent:</td>
                        <td>{{$flat->rent}} tk.</td>
                    </tr>
                    <tr>
                        <td>Electricity unit price:</td>
                        <td>{{$flat->electricity}} tk.</td>
                    </tr>
                    <tr>
                        <td>Gas bill:</td>
                        <td>{{$flat->gas}} tk.</td>
                    </tr>
                    <tr>
                        <td>Others bill:</td>
                        <td>{{$flat->others}} tk.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>

    <a href="{{route('flats.index')}}" class="btn btn-secondary mr-4">Go Back</a>
    <a href="{{route('flats.edit', $flat->id)}}" class="btn btn-secondary">Edit</a>

@endsection