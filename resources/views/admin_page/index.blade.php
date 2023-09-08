
@extends('layouts.admin_header')
@section('title', 'Dashboard')
@section('content')
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="">
        <div >
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
    
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-bordered table-striped datatable">
                <thead>
                 <tr>
                    <th scope="col">So/n.</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Company Email ID</th>
                    <th scope="col">Website (URL)</th>
                    <th scope="col">Company Address</th>
                    <th scope="col">Company Experience </th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $a = 1;?>
                   @foreach($data as $data)
                    <th scope="row">{{$a++;}}</th>
                    <td>{{$data['company name']}}</td>
                    <td>{{$data['company email']}}</td>
                    <td><a target="__blank" href="{{$data['website(URL)']}}">{{$data['website(URL)']}}</a></td>
                    <td>{{$data['company address']}}</td>
                    <td>{{$data['company experience']}}</td>
                    <td><a href="{{('company-information')}}">Edit</a> </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
