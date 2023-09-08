@extends('layouts.admin_header')
@section('title', 'About Us')
@section('content')
<main id="main" class="main">
     <div class="pagetitle">
      <h2>About Us</h2>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">About Us</li>
        </ol>
      </nav>
    </div>
     <div class="container py-3">
      <div class="row justify-content-center col-md-6">
       <div class="card">
            <div class="card-body">
              <div class="pagetitle">
                <div class="">
              <h3><code>Add About</code></h3>
                  <form action="{{url('about_data')}}" method="post" enctype="multipart/form-data">
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
                     <textarea  name="about_description" class="form-control" rows="6" id="customFile">{{$from['about_description']}}</textarea>
                     <label class="form-label" for="customFile"><h5>Description</h5></label>
                     <input type="File" name="about_image" class="form-control " id="customFile" />
                     <label class="form-label" for="customFile"><h5>Image</h5></label>
                     <div class="text-center">
                     <input type="submit" name="add_about" class="btn btn-outline-primary py-auto" value="Update About" />
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
              <!-- Table w ith stripped rows -->
              <div class=" table-responsive">
              <table class="table table-bordered table-striped datatable">
                <thead>
                 <tr>
                    <th scope="col">So/n.</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $a = 1;
                  ;
                  ?>
                   @foreach($data as  $data)
                    <tr>
                      <th scope="row">{{$a++;}}</th>

                      <td>{{$data['about_description']}}</td>
                      <td>
                       <img src="{{asset('assets1/saveimage/'.$data['about_image'])}}" style="width: 150px; height: 150px; border-radius: 50%;" >
                      </td>
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