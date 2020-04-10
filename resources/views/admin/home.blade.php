@extends('admin/template/app')

@section('page-title',('Admin Page'))

@section('main-content')

    <section class="content">

      <!-- Default box -->
      @if (count($postDataObjects)>0)
      @foreach ($postDataObjects as $data)
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">{{ $data['title'] }}</h3>

            <div class="card-tools">
              <a href="{{ route('admins.edit', $data->id) }}" class="btn btn-tool"  title="Edit">
                <i class="fas fa-edit"></i></a>

              <form id="delete-data-{{ $data->id }}" action="{{ route('admins.destroy',$data->id) }}" method="post" style="display: none;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
              </form>
              <a onclick="event.preventDefault(); document.getElementById('delete-data-{{ $data->id }}').submit()" href="" class="btn btn-tool"  title="Delete">
                <i class="fas fa-trash"></i></a>
            </div>
          </div>
            <div class="card-body">
            {{ $data['body'] }}
          </div>
          <!-- /.card-body -->
            <div class="card-footer">
            Posted By  : {{ $data->posted_by }}
          </div>
          <!-- /.card-footer-->
        </div>
      @endforeach
    @else
      <h1>Currently no news available !</h1>
      <h1>Please Add One</h1>
    @endif
      <!-- /.card -->

    </section>


@endsection
