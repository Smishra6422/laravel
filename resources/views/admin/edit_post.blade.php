@extends('admin/template/app')

@section('page-title',('Edit News'))

@section('main-content')
  <div class="col-md-12">
    <!-- general form elements -->
    @if (count($errors)>0)
      @foreach ($errors->all() as $error )
        <p class="alert alert-danger">{{ $error }}</p>
      @endforeach

    @endif

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Add News</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{route('admins.update', $postDataObjects->id)}}" method="post">

        {{ csrf_field()}}
        {{ method_field('PUT') }}
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input value="{{ $postDataObjects->title }}" type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Slug</label>
                <input value="{{ $postDataObjects->slug }}" type="text" class="form-control" name="slug" id="exampleInputEmail1" placeholder="Enter SLug">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input value="{{ $postDataObjects->image }}" type="text" class="form-control" name="image" id="exampleInputEmail1" placeholder="Enter Image Address">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Posted By</label>
                <input value="{{ $postDataObjects->posted_by }}" type="text" class="form-control" name="posted_by" id="exampleInputEmail1" placeholder="Posted By">
              </div>
            </div>
          </div>




        </div>
        <!-- /.card-body -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    News

                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="textarea" placeholder="Write your news here"
                          name="body"    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{ $postDataObjects->body }}
                          </textarea>
                  </div>

                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->



  </div>
@endsection
