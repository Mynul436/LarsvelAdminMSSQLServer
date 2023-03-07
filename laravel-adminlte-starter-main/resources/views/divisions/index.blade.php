@extends('layouts.main')
@section('div-content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('divisions.create') }}" class="btn btn-primary"> Add Division</a>
    </div>


    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Division List</h5><br><br>
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
                @foreach ($divisions as $division)
                    <tr>
                        <td>{{ $division->id }}</td>
                        <td>{{ $division->name }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection