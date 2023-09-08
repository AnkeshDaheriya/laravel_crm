@extends('layouts.admin_header')
@section('title', 'Gallery Image')
@section('content')
  <main id="main" class="main">
   <div class="pagetitle">
      <h1></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Gallery</li>
        </ol>
      </nav>
     </div><!-- End Page Title -->
     <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
             <div  class="row  py-2">
              <div class="col">
              <h5 class="card-title">Gallery tables</h5>
               </div>
               <div class="col">
                 <a  class="float-end btn btn-outline-primary" href="#"><span >ADD NEW</span></a>
              </div>
            </div>
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-bordered table-striped datatable">
                <thead>
                 <tr>
                    <th scope="col">So/n.</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $a = 1;?>
               @foreach($data as $data) 
                    <th scope="row">{{$a++;}}</th>
                    <td>{{$data['gallery_category']}}</td>
                    <td>
                        <img src="{{asset('assets1/saveimage/'.$data['gallery_image'])}}" style="width: 150px; height:150px; border-radius: 50%;" >
                       </td>
                    <td>{{$data['gallery_description']}}</td>
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