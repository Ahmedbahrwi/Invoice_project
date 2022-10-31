
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Add Customer</div>
                  <div class="card-body">
  
                      <form action="{{ route('post.create') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="customer_name" class="col-md-4 col-form-label text-md-right">Customer Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="customer_name" class="form-control" name="customer_name" required autofocus>
                                  @if ($errors->has('customer_name'))
                                      <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="customer_email" class="col-md-4 col-form-label text-md-right">Customer Email</label>
                            <div class="col-md-6">
                                <input type="text" id="customer_email" class="form-control" name="customer_email" required autofocus>
                                @if ($errors->has('customer_email'))
                                    <span class="text-danger">{{ $errors->first('customer_email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customer_address" class="col-md-4 col-form-label text-md-right">Customer Address</label>
                            <div class="col-md-6">
                                <input type="text" id="customer_address" class="form-control" name="customer_address" required autofocus>
                                @if ($errors->has('customer_address'))
                                    <span class="text-danger">{{ $errors->first('customer_address') }}</span>
                                @endif
                            </div>
                        </div>
                          <div class="col-md-6 offset-md-4">
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
