

@extends('layouts.main')

@section('user-show-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Name:</strong> {{ $user->name }}</li>
                            <li><strong>Email:</strong> {{ $user->email }}</li>
                            <li><strong>Username:</strong> {{ $user->username }}</li>
                            <li><strong>Approved:</strong> {{ $user->is_approved ? 'Yes' : 'No' }}</li>
                            <li><strong>Role:</strong> {{ $user->role }}</li>
                            <li><strong>Locked:</strong> {{ $user->is_locked ? 'Yes' : 'No' }}</li>
                            <li><strong>Reference Number:</strong> {{ $user->ref_number_roo_rtm }}</li>
                            <li><strong>Referer ID:</strong> {{ $user->referer_id }}</li>
                            <li><strong>Created At:</strong> {{ $user->created_at }}</li>
                            <li><strong>Updated At:</strong> {{ $user->updated_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
