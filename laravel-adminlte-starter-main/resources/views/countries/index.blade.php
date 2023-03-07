{{-- @extends('admin.layouts.app') --}}
@extends('layouts.main')

 @section('content')

 {{-- Country List --}}

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="{{ route('countries.create') }}" class="btn btn-primary"> Add Country</a>
        </div>


        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Country List</h5><br><br>
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
{{-- Division List --}}

    {{-- <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="{{ route('countries.create') }}" class="btn btn-primary"> Add Division</a>
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
    </div> --}}

{{-- District List --}}

    {{-- <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="{{ route('countries.create') }}" class="btn btn-primary"> Add District</a>
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
    </div> --}}



@endsection
 







{{-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h3>Filters</h3>
            <form method="GET" action="{{ route('countries.index') }}">
                <div class="form-group">
                    <label for="country_id">Country:</label>
                    <select class="form-control" id="country_id" name="country_id">
                        <option value="">All</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" {{ $country->id == request('country_id') ? 'selected' : '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="division_id">Division:</label>
                    <select class="form-control" id="division_id" name="division_id">
                        <option value="">All</option>
                        @foreach($divisions as $division)
                            <option value="{{ $division->id }}" {{ $division->id == request('division_id') ? 'selected' : '' }}>{{ $division->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="district_id">District:</label>
                    <select class="form-control" id="district_id" name="district_id">
                        <option value="">All</option>
                        @foreach($districts as $district)
                            <option value="{{ $district->id }}" {{ $district->id == request('district_id') ? 'selected' : '' }}>{{ $district->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
        <div class="col-md-9">
            <h3>Service Points</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>Division</th>
                        <th>District</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicepoints as $servicepoint)
                        <tr>
                            <td>{{ $servicepoint->name }}</td>
                            <td>{{ $servicepoint->address }}</td>
                            <td>{{ $servicepoint->district->division->country->name }}</td>
                            <td>{{ $servicepoint->district->division->name }}</td>
                            <td>{{ $servicepoint->district->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $servicepoints->appends(request()->except('page'))->links() }}
        </div>
    </div>
</div>
@endsection --}}