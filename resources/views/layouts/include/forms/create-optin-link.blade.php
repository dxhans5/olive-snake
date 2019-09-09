
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">Create Optin Link</div>

              <div class="card-body">
                <form method="POST" action="/create-optin-link">
                  @csrf

                  <div class="form-group">
                    <label for="iframe">IFrame Address</label>
                    <input type="text" class="form-control" name="iframe" id="iframe">
                  </div>

                  <div class="form-group">
                    <label for="title">Page Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                  </div>

                  <div class="form-group">
                    <label for="funnel">Funnel</label>
                    <select class="form-control" name="funnel" id="funnel">
                      @foreach ($funnels as $funnel)
                      <option value='{{ $funnel->id }}'>{{ $funnel->name }}</option>
                      @endforeach
                    </select>
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
