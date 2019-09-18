
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

                  <div class="form-group">
                    <label for="stage_1_email_id">Stage 1 Email</label>
                    <select class="form-control" name="stage_1_email_id" id="stage_1_email_id">
                      @foreach ($emails as $email)
                      <option value='{{ $email->id }}'>{{ $email->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="stage_2_email_id">Stage 2 Email</label>
                    <select class="form-control" name="stage_2_email_id" id="stage_2_email_id">
                      @foreach ($emails as $email)
                      <option value='{{ $email->id }}'>{{ $email->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="stage_3_email_id">Stage 3 Email</label>
                    <select class="form-control" name="stage_3_email_id" id="stage_3_email_id">
                      @foreach ($emails as $email)
                      <option value='{{ $email->id }}'>{{ $email->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="stage_4_email_id">Stage 4 Email</label>
                    <select class="form-control" name="stage_4_email_id" id="stage_4_email_id">
                      @foreach ($emails as $email)
                      <option value='{{ $email->id }}'>{{ $email->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
        </div>
    </div>
