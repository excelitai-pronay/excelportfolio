@extends('admin.admin_master')

@section('css')
    <!-- Icons Css -->
    <link href="{{ asset('wordform') }}/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('wordform') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
@endsection

@section('admin')
    <div class="row">

        <div class="col-lg-8">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> Features Details View</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($features as $feature)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($feature->image)}}" height="80px" width="80px">
                                        </td>
                                        <td>{{ $feature->title }}</td>
                                        <td>{!! $feature->content !!}</td>
                                        <td>
                                            <a href="{{ route('feature.edit', $feature->id) }}"><i
                                                    class="fa fa-edit btn btn-success"></i> </a>
                                            <a href="{{ route('feature.delete', $feature->id) }}"> <i
                                                   class="fa fa-trash btn btn-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-lg-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Features Details</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <form method="POST" action="{{ route('feature.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h5>Project Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <div class="me-sm-3" style="width: 100%">
                                        <select name="project_id" class="form-select form-select my-1 my-lg-0">
                                            <option selected="">Choose...</option>
                                            @foreach($projects as $project)
                                                 <option value="{{$project->id}}">{{$project->title}}</option>
                                            @endforeach     
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Features Image<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" id="image" name="image" class="form-control">

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Features Title<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" id="title" name="title" class="form-control">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <h5>Feature Content<span class="text-danger">*</span></h5>
                                            <div class="card-body">

                                                <textarea id="elm1" name="content" style="width: 100%"></textarea>

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                    </div>
                    <br>
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-info" value="Add Feature Details">
                    </div>
                    </form>
                </div> <!-- table res.. end -->
            </div> <!-- box body end -->
        </div> <!-- box end -->
    </div>
    </div>
@endsection

@section('script')
    <script>
        console.log('here');
    </script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <!--tinymce js-->
    <script src="{{ asset('wordform') }}/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script src="{{ asset('wordform') }}/js/pages/form-editor.init.js"></script>

    <script src="{{ asset('wordform') }}/js/app.js"></script>
@endsection
