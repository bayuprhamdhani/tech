@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-9">
              <div class="card">
                  <div class="card-header">Add Purchase</div>
                  <div class="card-body">
  
                    <form action="{{ route('purchase.store') }}" method="POST" class="row g-1">
                          @csrf
                        <div class="col-md-6">
                              <label for="Vendor_Id" class="col-md-14 col-form-label text-left">Vendor ID</label>
                              <div class="col-md-14">
                                  <input type="text" id="Vendor_Id" class="form-control" name="Vendor_Id" required autofocus>
                                  @if ($errors->has('Vendor_Id'))
                                      <span class="text-danger">{{ $errors->first('Vendor_Id') }}</span>
                                  @endif
                              </div>
                        </div>
  
                        <div class="col-md-6">
                              <label for="Admin_Id" class="col-md-14 col-form-label text-left">Admin ID</label>
                              <div class="col-md-14">
                                  <input type="text" id="Admin_Id" class="form-control" name="Admin_Id" required autofocus>
                                  @if ($errors->has('Admin_Id'))
                                      <span class="text-danger">{{ $errors->first('Admin_Id') }}</span>
                                  @endif
                              </div>
                        </div>
  
                        <div class="col-md-6">
                              <label for="Date_Purchase" class="col-md-14 col-form-label text-left">Date</label>
                              <div class="col-md-14">
                                  <input type="date" id="Date_Purchase" class="form-control" name="Date_Purchase" required autofocus>
                                  @if ($errors->has('Date_Purchase'))
                                      <span class="text-danger">{{ $errors->first('Date_Purchase') }}</span>
                                  @endif
                              </div>
                        </div>

                        <div class="col-md-6">
                              <label for="Purchase_Status" class="col-md-14 col-form-label text-left">Status</label>
                              <div class="col-md-14">
                              <select class="custom-select" id="Purchase_Status" name="Purchase_Status" aria-label="Purchase_Status">
                                    <option value="">Choose</option>
                                    @foreach($transaction_status as $val)
                                        <option value="{{$val->Purchase_Status}}">{{$val->status}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Transaction_Status'))
                                    <span class="text-danger">{{ $errors->first('Transaction_Status') }}</span>
                                @endif
                              </div>
                        </div>

                        <div class="col-12">
                            <div class="row p-1" style="margin-top: 20px;">
                                    <div class="col-md-2 ">
                                    <label for="Grand_Total" class="col-md-14 col-form-label text-left">GRAND TOTAL</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="Grand_Total" >
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