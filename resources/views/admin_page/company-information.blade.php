@extends('layouts.admin_header')
@section('title', 'company Information')
@section('content')
  <main id="main" class="main">
    <div class="pagetitle ">
      <h1>Basic of company Information</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Company Information</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      <div class="card py-3">
    <div class="card-body">
     <form class="container py-3" action="{{url('company_information')}}" method="POST" enctype="multipart/form-data">
      @csrf
          <h3><code>Update Information</code></h3>
     
         @if (session('success'))
        <div class="alert alert-success" role="alert">
              {{ session('success') }}
          </div>
        @endif
         @if($errors->any())
            <div class="alert alert-danger">
               
           @foreach ($errors->all() as $error)
           <ol>
             <li class="error">{{ $error }}</li>
           </ol>
           @endforeach
           </div>
          @endif
          @foreach ($data as $data)
          <div class="row mb-3">
            <div class="col">
              <div class="form-outline">
                <label class="form-label">Company name</label>
                <input type="text" name="company_name" value="{{$data['company name']}}"  class="form-control" />
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label">Company Address</label>
                <input type="text" name="company_address" value="{{$data['company address']}}"  class="form-control" />
              </div>
            </div>
          </div>
           <div class="row mb-3">
            <div class="col">
              <div class="form-outline mb-">
                <label class="form-label"> Company Email</label>
                <input type="email" name="company_email" value="{{$data['company email']}}"  class="form-control" />
              </div>
              </div>

              <!-- Number input -->
              <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label"> Company Phone No.</label>
                <input type="number" name="company_number" value="{{$data['company phone']}}"  class="form-control" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <div class="form-outline">
                <label class="form-label">Website(URL)</label>
                <input type="text" name="url"  value="{{$data['website(URL)']}}" class="form-control" />
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label">Company Experience</label>
                <input type="text" name="experience"  value="{{$data['company experience']}}" class="form-control" />
              </div>
            </div>
          </div>
          <!-- Text input -->
          <div class="row mb-3">
            <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label">Title Text</label>
                <input type="text" name="title"  value="{{$data['title text']}}" class="form-control" />
              </div>
             </div>  
              <!-- Text input -->
             <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label">Description Text</label>
                <input type="text" name="description"  value="{{$data['description text']}}" class="form-control" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label">Logo Image</label>
                <input type="file" name="logo_image"  class="form-control" />
              </div>
             </div>  
              <!-- Text input -->
             <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label">Favicon Image</label>
                <input type="file" name="favicon_image"  class="form-control" />
              </div>
            </div>
          </div>
         <div class="row mb-3">
            <label class="form-label">ADD Social Media Link</label>
            <div class="col">
              <div class="form-outline mb-">
                <label class="form-label">Facebook Link</label>
                <input type="text" name="facebook"  value="{{$data['facebook link']}}" class="form-control" />
              </div>
              </div>

              <!-- Number input -->
              <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label">Instagram Link</label>
                <input type="text" name="instagram"  value="{{$data['instagram link']}}" class="form-control" />
              </div>
            </div>
             <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label">Twitter Link</label>
                <input type="text" name="twitter"  value="{{$data['twitter link']}}" class="form-control" />
              </div>
            </div>
             <div class="col">
              <div class="form-outline mb-1">
                <label class="form-label"> LinkedIn Link</label>
                <input type="text" name="linkedIn"  value="{{$data['linkedIn link']}}" class="form-control" />
              </div>
            </div>
            </div>
            <div class="form-outline mb-3">
              <label class="form-label">Additional information </label>
              <textarea class="form-control" name="additional_information"  rows="4">{{$data['additional information']}}</textarea>
            </div>
            @endforeach
             <div class="form-outline mb-1 text-center">
             <input class="form-label btn btn-primary" type="submit"  value="Update information" name="save">
           </div>
        </form>
        </div>
    </div>

    <section class="section">
      <div class="container-fluid">
           
          <div class="card-body">
            <div class="container-fluid">
              <iframe style="border:0; width: 100%; height:200px; margin: auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4596.539150007022!2d77.42804927607575!3d23.251245307754594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c424107eaaaab%3A0x9a63543084858453!2sIncubation%20Masters!5e1!3m2!1sen!2sus!4v1692596174761!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
            </div>
           
          </div>
        </div>
      </section>
    </main>
@endsection