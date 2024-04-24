@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">{{ __('Table Users') }}</div>
  
                <div class="card-body mb-4">
                <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-secondary float-end" href="{{ route('users.create') }}">Tambah User</a>
                    <a class="btn btn-warning float-end" href="{{ route('users.export') }}">Export User Data</a>
            </form>

                    <table class="table table-responsive" style="width:100%" id="users">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            
                            @foreach($users as $row)
                            <?php $no++ ?>
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->role}}</td>
                                <td>{{$row->Status}}</td>
                                <td> 
                                    <a href="{{ route('users.edit', $row->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('users.destroy',$row->id) }}" method="POST"
                                    style="display: inline" onsubmit="return confirm('Do you really want to delete {{ $row->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><span class="text-muted">
                                        Delete
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection