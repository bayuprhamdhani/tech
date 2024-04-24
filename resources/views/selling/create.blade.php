@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-9">
              <div class="card">
                  <div class="card-header">Add Selling</div>
                  <div class="card-body">
  
                    <form action="{{ route('product.store') }}" method="POST" class="row g-1">
                          @csrf
                        <div class="col-md-6">
                              <label for="Customer_ID" class="col-md-14 col-form-label text-left">Customer ID</label>
                              <div class="col-md-14">
                                  <input type="text" id="Customer_ID" class="form-control" name="Customer_ID" required autofocus>
                                  @if ($errors->has('Customer_ID'))
                                      <span class="text-danger">{{ $errors->first('Customer_ID') }}</span>
                                  @endif
                              </div>
                        </div>
  
                        <div class="col-md-6">
                              <label for="Cashier_ID" class="col-md-14 col-form-label text-left">Cashier ID</label>
                              <div class="col-md-14">
                                  <input type="text" id="Cashier_ID" class="form-control" name="Cashier_ID" required autofocus>
                                  @if ($errors->has('Cashier_ID'))
                                      <span class="text-danger">{{ $errors->first('Cashier_ID') }}</span>
                                  @endif
                              </div>
                        </div>
  
                        <div class="col-md-6">
                              <label for="Date_Sell" class="col-md-14 col-form-label text-left">Date</label>
                              <div class="col-md-14">
                                  <input type="date" id="Date_Sell" class="form-control" name="Date_Sell" required autofocus>
                                  @if ($errors->has('Date_Sell'))
                                      <span class="text-danger">{{ $errors->first('Date_Sell') }}</span>
                                  @endif
                              </div>
                        </div>

                        <div class="col-md-6">
                              <label for="Selling_Status" class="col-md-14 col-form-label text-left">Status</label>
                              <div class="col-md-14">
                              <select class="custom-select" id="Selling_Status" name="Selling_Status" aria-label="Selling_Status">
                                    <option value="">Choose</option>
                                    @foreach($transaction_status as $val)
                                        <option value="{{$val->status}}">{{$val->status}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('statuss') }}</span>
                                @endif
                              </div>
                        </div>
                        <div class="col-12"  id="target_area">
                            <div class="row g-1 p-1" >
                                <div class="col-md-2">
                                    <label for="Buying_Price" class="col-md-14 col-form-label text-left">ID Product</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="Buying_Price" class="col-md-14 col-form-label text-left">Product</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="Buying_Price" class="col-md-14 col-form-label text-left">Price</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="Buying_Price" class="col-md-14 col-form-label text-left">Quantity</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="sub_total" class="col-md-14 col-form-label text-left">Sub Total</label>
                                </div>
                                <div class="row-md-2 ">
                                    <label for="Buying_Price" class="col-md-14 col-form-label text-left">Action</label>
                                </div>
                            </div>
                            <div class="row g-1 p-1" data-area="area_50">
                                <div class="col-md-2">
                                    <input type="text" id="Id_Product" class="form-control" name="Id_Product" required autofocus>
                                    @if ($errors->has('Id_Product'))
                                        <span class="text-danger">{{ $errors->first('Id_Product') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <input type="text" id="Product_Name" class="form-control" name="Product_Name" required autofocus>
                                    @if ($errors->has('Product_Name'))
                                        <span class="text-danger">{{ $errors->first('Product_Name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                <input type="text" id="Price" class="form-control" name="Price[]" required autofocus>
                                    @if ($errors->has('Price'))
                                        <span class="text-danger">{{ $errors->first('Price') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                <input type="text" id="Qty" class="form-control" name="Qty[]" required autofocus>
                                    @if ($errors->has('Qty'))
                                        <span class="text-danger">{{ $errors->first('Qty') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                <input type="text" id="Sub_Total" class="form-control" name="Sub_Total[]" readonly>
                                    @if ($errors->has('Sub_Total'))
                                        <span class="text-danger">{{ $errors->first('Sub_Total') }}</span>
                                    @endif
                                </div>
                                <div class="row-md-2">
                                    <button type="button" id="delete_colom" class="btn btn-danger" >Delete</button>
                                    <button type="button" id="add_colom" class="btn btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row p-1" style="margin-top: 20px;">
                                    <div class="col-md-2 ">
                                    <label for="Buying_Price" class="col-md-14 col-form-label text-left">GRAND TOTAL</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="Grand_Total" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-1 p-4" style="margin-top: 1px;">
                                <button type="submit" class="btn btn-primary">
                                Submit
                                </button>  
                            </div>
                        </div>
                    </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
@push('other-scripts')

@endpush
<!-- 
                              <div class="drop">
  <div class="option active placeholder" data-value="placeholder">
    Choose wisely
  </div>
  <div class="option" data-value="wow">
    Wow!
  </div>
  <div class="option" data-value="drop">
    So dropdown!
  </div>
  <div class="option" data-value="select">
    Very select!
  </div>
  <div class="option" data-value="custom">
    Much custom!
  </div>
  <div class="option" data-value="animation"> 
    Such animation!
  </div>
</div>
-->