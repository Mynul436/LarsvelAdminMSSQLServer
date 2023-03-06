{{-- @extends('admin.layouts.app') --}}
@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            {{-- <h5 class="mb-0">Country List</h5><br><br> --}}
            <a href="{{ route('countries.create') }}" class="btn btn-primary"> Add Country</a>
        </div>


        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Country List</h5><br><br>
            {{-- <a href="{{ route('countries.create') }}" class="btn btn-primary"> Add Country</a> --}}
        </div>

        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Code</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->name }}</td>
                            <td>{{ $country->code }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
