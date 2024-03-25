@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register Product</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row mt-3">
                              <label for="Product_Name" class="col-md-4 col-form-label text-right">Product Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="Product_Name" class="form-control" name="Product_Name" required autofocus>
                                  @if ($errors->has('Product_Name'))
                                      <span class="text-danger">{{ $errors->first('Product_Name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row mt-3">
                              <label for="Qty" class="col-md-4 col-form-label text-right">Quantity</label>
                              <div class="col-md-6">
                                  <input type="text" id="Qty" class="form-control" name="Qty" required autofocus>
                                  @if ($errors->has('Qty'))
                                      <span class="text-danger">{{ $errors->first('Qty') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row mt-3">
                              <label for="Selling_Price" class="col-md-4 col-form-label text-right">Selling Price</label>
                              <div class="col-md-6">
                                  <input type="text" id="Selling_Price" class="form-control" name="Selling_Price" required autofocus>
                                  @if ($errors->has('Selling_Price'))
                                      <span class="text-danger">{{ $errors->first('Selling_Price') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mt-3">
                              <label for="Buying_Price" class="col-md-4 col-form-label text-right">Buying Price</label>
                              <div class="col-md-6">
                                  <input type="text" id="Buying_Price" class="form-control" name="Buying_Price" required autofocus>
                                  @if ($errors->has('Buying_Price'))
                                      <span class="text-danger">{{ $errors->first('Buying_Price') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row mt-3">
                            <label for="Product_Type_ID" class="col-md-4 col-form-label text-right">Product Type ID</label>
                            <div class="col-md-6">
                                <select class="form-select" id="Product_Type_ID" name="Product_Type_ID" aria-label="Product_Type_ID">
                                    <option value="">Choose</option>
                                    @foreach($Product_Types_ID as $val)
                                        <option value="{{$val->Product_Type_ID}}">{{$val->Product_Type_ID}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Product_Type_ID'))
                                    <span class="text-danger">{{ $errors->first('Product_Type_ID') }}</span>
                                @endif
                            </div>
                          </div>

                          
                  <!-- class="form-group row mt-3">
                            <label for="role" class="col-md-4 col-form-label text-right">Status</label>
                            <div class="col-md-6">
                                <select class="form-select" id="status" name="status" aria-label="status">
                                    <option value="">Choose</option>
                                    @foreach($roles as $val)
                                        <option value="{{$val->status}}">{{$val->status}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('statuss') }}</span>
                                @endif
                            </div>
                         </div>-->  
  
                          <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection