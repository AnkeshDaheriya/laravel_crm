
@extends('layouts.admin_header')
@section('title', 'Slider Update')
@section('content')
  <main id="main" class="main">
             <div class="pagetitle">
                <h2>Slider</h2>
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active"></li>
                  </ol>
                </nav>
              </div><!-- End Page Title -->
              <div class="container py-3">
                <div class="row col-md-6">
                 <div class="card">
                      <div class="card-body">
                        <h3><code>Update Slider</code></h3>
                            <form action="{{('slider_data')}}" method="POST" enctype="multipart/form-data">
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
                         <input type="text" name="slider_title" value="{{$from['slider_title']}}" class="form-control " id="" />
                         <label class="form-label" for=""><h5>Title</h5></label>
                         <input type="file" name="slider_image" class="form-control"/>
                         <label class="form-label" for=""><h5>Image</h5></label>
                         <textarea  name="slider_description"  rows="6" class="form-control" id="">{{$from['slider_description']}}</textarea>
                         <label class="form-label" for=""><h5>Description</h5></label>
                         <div class="text-center">
                         <input type="submit" name="upload_image" class="btn btn-outline-primary py-auto" value="Update Slider" />
                             </div>
                            </form>
                             @endforeach
                         </div>
                      </div>
                  </div>
              </div>

            <section class="section">
                <div class="row">
                  <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Slider Data</h5>
                      <div class="table-responsive">
                      <table class="table table-bordered datatable" >
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
                       @foreach($data as  $data)
                          <tr>
                            <th scope="row">{{$a++;}}</th>
                            <td>{{$data['slider_title']}}</td>
                             <td>
                              <img src="{{asset('assets1/saveimage/'.$data['slider_image'])}}" style="width: 150px; height:150px; border-radius: 50%;" >
                             </td>
                            <td>{{$data['slider_description']}}</td>
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