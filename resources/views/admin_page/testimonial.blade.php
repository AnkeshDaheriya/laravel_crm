@extends('layouts.admin_header')
@section('title', 'Testimonial Page')
@section('content')
 
  <main id="main" class="main">

    <div class="pagetitle">
      <h2>Testimonial</h2>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Charts</li>
          <li class="breadcrumb-item active">Testimonial</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <p>Chart.JS Examples. You can check the <a href="https://www.chartjs.org/docs/latest/samples/" target="_blank">official website</a> for more examples.</p>

 <div class="container py-3">
      <div class="row justify-content-center col-md-6">
       <div class="card">
            <div class="card-body">
              <div class="">
                <div class="">
              <h3><code>Add Testimonial</code></h3>
                  <form action="{{url('testimonial_data')}}" method="POST" enctype="multipart/form-data">
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
                     @foreach($data as $from)
                     <input type="text"name="reviews" value="{{$from['reviews']}}" class="form-control " id="" />
                     <label class="form-label" for=""><h5>Reviews</h5></label>
                     <input type="number" min="1" value="{{$from['reviews_star']}}" max="5" name="reviews_star" class="form-control " id="" />
                     <label class="form-label" for=""><h5>No Of Star</h5></label>
                     <input type="file" name="testimonial_image" class="form-control " id="" />
                     <label class="form-label" for=""><h5>Image</h5></label>
                     <textarea  name="testimonial_description" rows="6" class="form-control" id="">{{$from['testimonial_description']}} </textarea>
                     <label class="form-label" for=""><h5>Description</h5></label>
                     <div class="text-center">
                     <input type="submit" name="upload_image" class="btn btn-outline-primary py-auto" value="Upadte Testimonial" />
                   </div>
                  </form>
                  @endforeach
                </div><br>
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
              <h5 class="card-title">Testimonial tables</h5>
              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-bordered table-striped datatable" >
                <thead>
                 <tr>
                    <th scope="col">So/n.</th>
                    <th scope="col">Reviews</th>
                    <th scope="col">No Of Star</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $a = 1;?>
               @foreach($data as $data)
                  <tr>
                     <th scope="row">{{$a++;}}</th>
                      <td>{{$data['reviews']}}</td>
                      <td>{{$data['reviews_star']}}</td>
                      <td>
                        <img src="{{asset('assets1/saveimage/'.$data['testimonial_image'])}}" style="width: 150px; height:150px; border-radius: 50%;" >
                       </td>
                      <td>{{$data['testimonial_description']}}</td>
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
