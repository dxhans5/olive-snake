
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
                    <label for="email_list_id">Email List</label>
                    <select class="form-control" name="email_list_id" id="email_list_id">
                      @foreach ($lists as $list)
                      <option value='{{ $list->id }}'>{{ $list->name }}</option>
                      @endforeach
                    </select>
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
