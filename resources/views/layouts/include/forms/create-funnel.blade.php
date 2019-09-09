
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">Create Funnel</div>

              <div class="card-body">
                <form method="POST" action="/create-funnel">
                  @csrf

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
