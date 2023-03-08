

@extends('layouts.main')

@section('user-edit-content')
   
<!-- resources/views/users/edit.blade.php -->
<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')
    <div>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>
</div>
<div>
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>
</div>

<div>
    <label for="username">Username:</label>
    <input type="text" name="username" value="{{ $user->username }}" required>
  
</div>  
    
    <div>
   
    <label for="is_approved">Is Approved:</label>
    <input type="checkbox" name="is_approved" {{ $user->is_approved ? 'checked' : '' }}>
</div>
    <div>
 
    <label for="role">Role:</label>
    <select name="role" required>
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="Retail Outlet Officer" {{ $user->role == 'Retail Outlet Officer' ? 'selected' : '' }}>Retail Outlet Officer</option>
        <option value="Retail Territory Manager" {{ $user->role == 'Retail Territory Manager' ? 'selected' : '' }}>Retail Territory Manager</option>
    </select>
</div>
    <div>

    <label for="is_locked">Is Locked:</label>
    <input type="checkbox" name="is_locked" {{ $user->is_locked ? 'checked' : '' }}>
</div>
    <div>

    <label for="ref_number_roo_rtm">Reference Number:</label>
    <input type="text" name="ref_number_roo_rtm" value="{{ $user->ref_number_roo_rtm }}" required>
</div>
    <div>
  
    <label for="referer_id">Referer ID:</label>
    <input type="number" name="referer_id" value="{{ $user->referer_id }}" required>
   
</div>
 <div>
 
    <label for="password">Password:</label>
    <input type="password" name="password" required>
   </div>
    <div>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required>
</div>
    <div>

    <label for="image">Profile Image:</label>
    <input type="file" name="image">
</div>
    <div>
  
    <button type="submit">Update User</button>
</div>
</form>


@endsection

                    