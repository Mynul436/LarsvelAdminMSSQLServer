@extends('layouts.main')
@section('dis-content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('districts.create') }}" class="btn btn-primary"> Add District</a>
    </div>


    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">District List</h5><br><br>
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
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($districts as $district)
                    <tr>
                        <td>{{ $district->id }}</td>
                        <td>{{ $district->name }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

 @endsection
