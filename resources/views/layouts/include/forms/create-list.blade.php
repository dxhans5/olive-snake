
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">Create List</div>

              <div class="card-body">
                <form method="POST" action="/create-list">
                  @csrf

                  <div class="form-group">
                    <label for="name">List Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>

                  <div class="form-group">
                    <label for="vendorId">Vendor ID</label>
                    <input type="text" class="form-control" name="vendorId" id="vendorId">
                  </div>

                  <div class="form-group">
                    <label for="trackingId">Tracking ID</label>
                    <input type="text" class="form-control" name="trackingId" id="trackingId" value="{{ $uuid }}">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
