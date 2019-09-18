
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">Create Email</div>

              <div class="card-body">
                <form method="POST" action="/create-email">
                  @csrf

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>

                  <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="10"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
