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
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-secondary">
                        Add Product
                    </a>
                    <table class="table table-responsive" style="width:100%" id="users">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Product Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            
                            @foreach($product as $row)
                            <?php $no++ ?>
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{$row->Product_Name}}</td>
                                <td>{{$row->Qty}}</td>
                                <td>{{$row->Selling_Price}}</td>
                                <td>
                                    @if ($row->Qty == 0)
                                        Sold Out
                                    @else
                                        Ready
                                    @endif
                                </td>
                                <td>{{$row->Product_Type_ID}}</td>
                                <td> 
                                    <a href="{{ route('product.edit', $row->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('product.destroy',$row->id) }}" method="POST"
                                    style="display: inline" onsubmit="return confirm('Do you really want to delete {{ $row->Product_Name }}?');">
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