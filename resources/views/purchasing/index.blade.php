@extends('layout')  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">{{ __('Table Product') }}</div>
  
                <div class="card-body">
                    <a href="{{ route('purchase.create') }}" class="btn btn-sm btn-secondary">
                        Add Purchase
                    </a>
                    <table class="table table-responsive" style="width:100%" id="users">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Vendor</th>
                                <th scope="col">ID Admin</th>
                                <th scope="col">Date Purchase</th>
                                <th scope="col">Purchasing Status</th>
                                <th scope="col">Grand Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            
                            @foreach($purchasings as $row)
                            <?php $no++ ?>
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{$row->Vendor_ID}}</td>
                                <td>{{$row->Admin_ID}}</td>
                                <td>{{$row->Date_Purchase}}</td>
                                <td>{{$row->Purchase_Status}}</td>
                                <td>{{$row->Grand_Total}}</td>
                                <td> 
                                    <a href="{{ route('purchase.edit', $row->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('purchase.destroy',$row->id) }}" method="POST"
                                    style="display: inline" onsubmit="return confirm('Do you really want to delete {{ $row->Vendor_ID }}?');">
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