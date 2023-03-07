

@extends('layouts.main')

@section('role-create-content')
    <h1>Create User</h1>

    <form method="POST" action="{{ route('users.store') }}"  enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="admin">Admin</option>
                <option value="Retail Outlet Officer">Retail Outlet Officer</option>
                <option value="Retail Territory Manager">Retail Territory Manager</option>
            </select>
        </div>
        <div>
            <label for="is_aproved">Is Approved:</label>
            <input type="checkbox" name="is_aproved" id="is_aproved" value="1" {{ old('is_aproved') ? 'checked' : '' }}>
            @error('is_aproved')
              <div class="text-red-500">{{ $message }}</div>
            @enderror
          </div>
        
          <div>
            <label for="is_locked">Is Locked:</label>
            <input type="checkbox" name="is_locked" id="is_locked" value="1" {{ old('is_locked') ? 'checked' : '' }}>
            @error('is_locked')
              <div class="text-red-500">{{ $message }}</div>
            @enderror
          </div>
        
          <div>
            <label for="ref_number_roo_rtm">Ref Number Roo/Rtm:</label>
            <input type="text" name="ref_number_roo_rtm" id="ref_number_roo_rtm" value="{{ old('ref_number_roo_rtm') }}">
            @error('ref_number_roo_rtm')
              <div class="text-red-500">{{ $message }}</div>
            @enderror
          </div>
        
          <div>
            <label for="referer_id">Referer ID:</label>
            <input type="text" name="referer_id" id="referer_id" value="{{ old('referer_id') }}">
            @error('referer_id')
              <div class="text-red-500">{{ $message }}</div>
            @enderror
          </div>
        


        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>


        {{-- <button type="submit" class="btn btn-primary">Create User</button> --}}

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Create') }}
                </button>
            </div>
        </div>

    </form>
@endsection
