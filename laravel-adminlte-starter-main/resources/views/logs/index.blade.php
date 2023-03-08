

@extends('layouts.main')

@section('user-logs-content')
<div class="container">
    <h1>All Users Logs</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Action</th>
                <th>Description</th>
                <th>IP Address</th>
                <th>User Agent</th>
                <th>Type</th>
                <th>Level</th>
                <th>Context</th>
                <th>URL</th>
                <th>HTTP Method</th>
                <th>Response Code</th>
                <th>Request Payload</th>
                <th>Response Payload</th>
                <th>Date/Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->user->name }}</td>
                <td>{{ $log->action }}</td>
                <td>{{ $log->description }}</td>
                <td>{{ $log->ip_address }}</td>
                <td>{{ $log->user_agent }}</td>
                <td>{{ $log->type }}</td>
                <td>{{ $log->level }}</td>
                <td>{{ $log->context }}</td>
                <td>{{ $log->url }}</td>
                <td>{{ $log->http_method }}</td>
                <td>{{ $log->response_code }}</td>
                <td>{{ $log->request_payload }}</td>
                <td>{{ $log->response_payload }}</td>
                <td>{{ $log->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $logs->links() }}
</div>
@endsection
