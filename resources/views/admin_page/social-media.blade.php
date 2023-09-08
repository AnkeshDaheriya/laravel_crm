@extends('layouts.admin_header')
@section('title', 'Social-Media Link')
@section('content')
 
  <main id="main" class="main">

    <div class="pagetitle">
      <h2>Social Media</h2>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">COPONENT </li>
          <li class="breadcrumb-item active">Social Media</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
   <div class="container py-3">
      <div class="row justify-content-center col-md-6">
       <div class="card">
            <div class="card-body">
              <div class="pagetitle">
                <div class="">
              <h3><code>Social Media</code></h3>
                  <form action="{{url('Social_media')}}" method="POST">
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
                     <label class="form-label" for="customFile"><i class="bi bi-facebook"></i>FaceBook</label>
                     <input  name="facebook" type="text" value="{{$from['facebook link']}}" class="form-control" id="customFile"><br>
                     <label class="form-label" for="customFile"><i class="bi bi-instagram"></i>Instagram</label>
                     <input type="text" name="instagram" value="{{$from['instagram link']}}" class="form-control " id="customFile" /><br>
                     <label class="form-label" for="customFile"><i class="bi bi-twitter"></i>Twitter</label>
                     <input type="text" name="twitter" value="{{$from['twitter link']}}" class="form-control " id="customFile" /><br>
                     <label class="form-label" for="customFile"><i class="bi bi-linkedin"></i>linkedin</label>
                     <input type="text" name="linkedin" value="{{$from['linkedIn link']}}" class="form-control " id="customFile" /><br>
                     <div class="text-center py-3">
                     <input type="submit" name="upload_image" class="btn btn-outline-primary " value="Upadate Link" />
                   </div>
                  </form>
                  @endforeach
                </div>
              </div><!-- End Breadcrumbs with a page title -->
               </div>
            </div>
        </div>
    </div>

  </main><!-- End #main -->
@endsection
