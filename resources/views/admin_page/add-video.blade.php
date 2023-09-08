@extends('layouts.admin_header')
@section('title', 'Add-video')
@section('content')
<style type="text/css">
</style>
<main id="main" class="main">
     <div class="pagetitle">
      <h2>Gallery</h2>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Gallery</li>
        </ol>
      </nav>
    </div>
     <div class="container py-3">
      <div class="row justify-content-center col-md-6">
       <div class="card">
            <div class="card-body">
            <div class="pagetitle">
                <div class="">
            <div  class="row  py-2">
              <div class="col">
              <h3><code>Video Gallery</code></h3>
            </div>
            <div class="col">
              <a  class="float-end btn btn-outline-primary" href="#"><span >List Show</span></a>
            </div>
            </div>
                  <form action="{{url('gallery_video')}}" method="POST">
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
                    <div class="py-2">
                    <label class="form-label" for="customFile">Title</label>
                     <input type="text" name="video_title" class="form-control " id="customFile" />
                       </div>
                        <div class="py-2">
                     <label class="form-label" for="customFile">Web link(url)</label>
                     <input type="text" name="video_link" class="form-control " id="customFile" />
                      </div>
                       <div class="py-2">
                     <label class="form-label" for="customFile">Description</label>
                     <textarea  name="video_description" class="form-control" rows="6" id="customFile"> </textarea>
                       </div>
                     <div class="text-center">
                     <input type="submit" name="upload_image"  class="btn btn-outline-primary py-auto" value="ADD Video Link" />
                   </div>
                  </form>
                </div>
              </div><!-- End Breadcrumbs with a page title -->
               </div>
            </div>
        </div>
    </div>
  </main><!-- End #main -->

  @endsection