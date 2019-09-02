
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">Create Optin Link</div>

              <div class="card-body">
                <form method="POST" action="/create-opin-link">
                  @csrf

                  <div class="form-group">
                    <label for="iframe">IFrame Address</label>
                    <input type="text" class="form-control" name="iframe" id="iframe">
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
