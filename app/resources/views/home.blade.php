@extends('layouts.app')

@section('content')

<div class="container">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Book A Trainer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Services
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Add New User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Add Trainer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2>Gym Members</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Alex</td>
              <td>Selemani</td>
              <td>selemani@gym.com</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>Shirley</td>
              <td>Goldsuck</td>
              <td>shirley@gmail.com</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Amina</td>
              <td>Amani</td>
              <td>amina@gmail.com</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>lusukama</td>
              <td>selemani</td>
              <td>selemani@gmail.com</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>fiston</td>
              <td>mbayo</td>
              <td>fiston@gmail.com</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>useni</td>
              <td>lusukama</td>
              <td>useni@email.com</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>katebe</td>
              <td>lusukama</td>
              <td>katebe@email.com</td>
              <td>Duis</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>Sifa</td>
              <td>Lusukama</td>
              <td>sifa@gmail.com</td>
              <td>mauris</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>Tantine</td>
              <td>Lusukama</td>
              <td>tantine@gmail.com</td>
              <td>sed</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>Nathalie</td>
              <td>Lusukama</td>
              <td>nathalie@gmail.com</td>
              <td>Mauris</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>Adolph</td>
              <td>Lusukama</td>
              <td>adolph@email.com</td>
              <td>arcu</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>










<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
