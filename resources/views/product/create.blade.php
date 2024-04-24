@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-7">
              <div class="card">
                  <div class="card-header">Add Product</div>
                  <div class="card-body">
  
                    <form action="{{ route('product.store') }}" method="POST">
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
  
                          <!--
                          <div class="form-group row mt-3">
                            <label for="Product_Type_ID" class="col-md-4 col-form-label text-left">Product Type ID</label>
                            <div class="col-md-6">
                                <select class="custom-select" id="Product_Type_ID" name="Product_Type_ID" aria-label="Product_Type_ID">
                                    <option value="">|Choose</option>
                                    @foreach($product__types as $val)
                                        <option value="{{$val->Product_Type}}">{{$val->Product_Type}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('id'))
                                    <span class="text-danger">{{ $errors->first('id') }}</span>
                                @endif
                            </div>
                          </div>
-->

                        <div class="form-group row mt-3">
                            <label for="Product_Type_ID" class="col-md-4 col-form-label text-right">Product Type ID</label>
                            <div class="col-md-6 col-form-label text-left" id="select-box" id="app-cover">
                                <input type="checkbox" id="options-view-button">
                                <div class="custom-select" id="Product_Type_ID">
                                        
                                </div>    
                                <div id="options">
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="platform" value="codepen">
                                        <input class="s-c bottom" type="radio" name="platform" value="codepen">
                                        <i class="fab fa-codepen"></i>
                                        <span class="label">CodePen</span>
                                        <span class="opt-val">CodePen</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="platform" value="dribbble">
                                        <input class="s-c bottom" type="radio" name="platform" value="dribbble">
                                        <i class="fab fa-dribbble"></i>
                                        <span class="label">Dribbble</span>
                                        <span class="opt-val">Dribbble</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="platform" value="behance">
                                        <input class="s-c bottom" type="radio" name="platform" value="behance">
                                        <i class="fab fa-behance"></i>
                                        <span class="label">Behance</span>
                                        <span class="opt-val">Behance</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="platform" value="hackerrank">
                                        <input class="s-c bottom" type="radio" name="platform" value="hackerrank">
                                        <i class="fab fa-hackerrank"></i>
                                        <span class="label">HackerRank</span>
                                        <span class="opt-val">HackerRank</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="platform" value="stackoverflow">
                                        <input class="s-c bottom" type="radio" name="platform" value="stackoverflow">
                                        <i class="fab fa-stack-overflow"></i>
                                        <span class="label">StackOverflow</span>
                                        <span class="opt-val">StackOverflow</span>
                                    </div>
                                    <div class="option">
                                        <input class="s-c top" type="radio" name="platform" value="freecodecamp">
                                        <input class="s-c bottom" type="radio" name="platform" value="freecodecamp">
                                        <i class="fab fa-free-code-camp"></i>
                                        <span class="label">FreeCodeCamp</span>
                                        <span class="opt-val">FreeCodeCamp</span>
                                    </div>
                                    <div id="option-bg"></div>
                                </div>  
                            </div>
                            </div>
                            <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                                <button type="submit" class="btn btn-primary">
                                  Submit
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