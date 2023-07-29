
  @include('includes.header', ['title' => 'Borrowed Books'])

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
          <h5 class="card-title">Borrowed Books</h5>
          
          <!-- Primary Color Bordered Table -->
          <table class="table table-bordered border-primary datable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">REG NO</th>
                <th scope="col">Book Id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Status</th>
                <th scope="col">Date Borrowed</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>ST01</td>
                <td>18</td>
                <td>Comp Scifi</td>
                <td>Not Returned</td>
                <td><?php $date = Date('y-m-d');
                echo $date ?></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>ST01</td>
                <td>28</td>
                <td>Comp hi-fi</td>
                <td>Not Returned</td>
                <td><?php $date = Date('y-m-d');
                echo $date ?></td>
              </tr>
            </tbody>
          </table>
          <!-- End Primary Color Bordered Table -->
        </div>
    </div>
  </main><!-- End #main -->

  @include('includes.footer')