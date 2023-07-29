  @include('includes.header', ['title' => 'Library - Borrow Books'])

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Library</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Library</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Borrow Books</h5>
          <p><em><b><u>NOTE</u>: </b></em>You can only borrow upto 5 books.</p>
          <!-- Primary Color Bordered Table -->
          <table class="table table-bordered border-primary datable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Book Id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>08</td>
                <td>IOT Scifi</td>
                <td><button class="btn btn-primary">Borrow</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>38</td>
                <td>API Scifi</td>
                <td><button class="btn btn-primary">Borrow</button><</td>
              </tr>
            </tbody>
          </table>
          <!-- End Primary Color Bordered Table -->
        </div>
    </div>
  </main><!-- End #main -->

  @include('includes.footer')