
@extends('layouts.admin_header')
@section('title', 'Client Pages')
@section('content')
<main id="main" class="main">
     <div class="pagetitle">
      <h2>Client</h2>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Client</li>
        </ol>
      </nav>
    </div>
     <div class="container py-3">
      <div class="row justify-content-center col-md-6">
       <div class="card">
            <div class="card-body">
              <div class="pagetitle">
                <div class="">
              <h3><code>Add Client</code></h3>
                  <form action="{{url('client_data')}}" method="POST">
                    @csrf
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
                     <input type="text" name="client_title" value="{{$from['client_title']}}" class="form-control " id="customFile" />
                     <label class="form-label" for="customFile"><h5>Title</h5></label>
                     <textarea  name="client_description" rows="6" class="form-control" id="customFile">{{$from['client_description']}} </textarea>
                     <label class="form-label" for="customFile"><h5>Description</h5></label>
                     <div class="text-center">
                     <input type="submit" name="upload_image" class="btn btn-outline-primary py-auto" value="Update Client Infomation " />
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
                    <th scope="col">Description</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $a = 1;?>
               @foreach($data as $data)
                  <tr>
                    <th scope="row">{{$a++;}}</th>
                    <td>{{$data['client_title']}}</td>
                    <td>{{$data['client_description']}}</td>
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
  </main>
@endsection

