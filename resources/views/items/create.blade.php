
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Add Customer</div>
                  <div class="card-body">
  
                      <form action="{{ route('item.create') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="item_name" class="col-md-4 col-form-label text-md-right">item Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="customer_name" class="form-control" name="item_name" required autofocus>
                                  @if ($errors->has('item_name'))
                                      <span class="text-danger">{{ $errors->first('item_name') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                            <<label for="item_price">Item Price:</label>
                            <input type="number" id="item_price" name="item_price">
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
