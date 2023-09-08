@extends('layouts.admin_header')
@section('title', 'Services')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h2>Services</h2>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div>
     <div class="container py-3">
      <div class="row justify-content-center col-md-6">
       <div class="card">
            <div class="card-body">
              <div class="pagetitle">
                <div class="">
              <h3><code> Add services</code></h3>
              <form action="{{url('services_data')}}" method="POST" enctype="multipart/form-data">
                 @if(session('success'))
                 <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                 </div>
                 @endif
                  @if($errors->any())
                  <div class="alert alert-danger">
                 
                    @foreach ($errors->all() as $error)
                   <li class="error">{{ $error }}</li>
                   @endforeach
                      
                  </div>
                  @endif
                    @csrf
                      @foreach($data as $from)
                     <input type="text" name="services_title" value="{{$from['services_title']}}" class="form-control " id="customFile" />
                     <label class="form-label" for="customFile"><h5>Title</h5></label>
                     <input type="File" name="services_image"  class="form-control " id="customFile" />
                     <label class="form-label" for="customFile"><h5>Image</h5></label>
                     <textarea name="services_description" class="form-control " rows="6" id="customFile">{{$from['services_description']}}</textarea>
                     <label class="form-label" for="customFile"><h5>Description</h5></label>
                     <div class="text-center">
                     <input type="submit" name="upload_image" class="btn btn-outline-primary py-auto" value="Upadet Services" />
                   </div>
                </form>
                 @endforeach
                </div>
              </div><!-- End Breadcrumbs with a page title -->
               </div>
            </div>
        </div>
    </div>
     <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">About tables</h5>
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-bordered table-striped datatable" >
                <thead>
                 <tr>
                    <th scope="col">So/n.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    
                  </tr>
                </thead>
                <tbody>
               <?php $a = 1;?>
                @foreach($data as $data )
                  <tr>
                      <th scope="row">{{$a++;}}</th>
                     <td>{{$data['services_title']}}</td>
                      <td>
                       <img src="{{asset('assets1/saveimage/'.$data['services_image'])}}" style="width: 150px; height: 150px; border-radius: 50%;" >
                      </td>
                      <td>{{$data['services_description']}}</td>
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
