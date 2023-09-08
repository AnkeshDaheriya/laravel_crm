@extends('layouts.admin_header')
@section('title', 'Video Gallery')
@section('content')
  <main id="main" class="main">
   <div class="pagetitle">
      <h1></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Video Gallery</li>
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
              <h5 class="card-title">Video Gallery</h5>
               </div>
               <div class="col">
                 <a  class="float-end btn btn-outline-primary" href="#"><span >ADD NEW</span></a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered datatable" >
                <thead>
                 <tr>
                    <th scope="col">So/n.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Video Link</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $a = 1;?>
                  @foreach($data as $data) 
                    <th scope="row">{{$a++;}}</th>
                    <td>{{$data['video_title']}}</td>
                    <td>
                      <a target="__blank" href="{{$data['video_link']}}">{{$data['video_link']}}</a>
                    </td>
                    <td>{{$data['video_description']}}</td>
                  </tr>
                  @endforeach   
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection