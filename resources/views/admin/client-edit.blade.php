@extends('admin.admin_master')
@section('admin.index')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.client.update', $client->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" value="{{ old('name', $client->user->name) }}"
                        id="exampleInputEmail1" placeholder="Enter name" name="name">
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" value="{{ old('email', $client->user->email) }}"
                        id="exampleInputEmail1" placeholder="Enter email" name="email">
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                        name="password">
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" class="form-control" value="{{ old('phone', $client->phone) }}"
                        id="exampleInputEmail1" placeholder="Enter Phone" name="phone">
                    @error('phone')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    {{-- <div>
    <form action="{{ route('admin.fixer.store') }}" method="POST">
        @csrf
        <input type="text" value="{{ old('name') }}" name="name" placeholder="Name">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <input type="email" value="{{ old('email') }}" name="email" placeholder="Email">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <input type="password" name="password" placeholder="Password">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <input type="number" name="nik" placeholder="NIK">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <input type="number" value="{{ old('phone') }}" name="phone" placeholder="Phone">
        @error('phone')
            <p>{{ $message }}</p>
        @enderror
        <input type="text" value="{{ old('address') }}" name="address" placeholder="Address">
        @error('address')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
        </form>
</div> --}}
@endsection
