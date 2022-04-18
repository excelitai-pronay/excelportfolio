@extends('admin.admin_master')

@section('admin')
    <div class="row">
        <div class="col-lg-8">
             <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> Image Galary View</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        
                        @foreach ($projects as $project)

                            <div class="row my-20">
                                <div class="row"><h4>{{$project->title}}</h4></div>

                                <div class="row">
                                    @foreach ($project->galary as $item)
                                        <div class="card" style="width:8rem;height:15rem">
                                            <img src="{{ asset($item->image) }}" style="height: 100px;width:100px" class="card-img-top" alt="...">
                                            
                                            <div class="card-body">
                                                
                                                <a href="{{ route('galary.edit', $item->id) }}"><i class="fa fa-edit btn btn-success"></i> </a>
                                                <a href="{{ route('galary.delete', $item->id) }}"> <i class="fa fa-trash btn btn-danger"></i></a>

                                            </div>
                                        </div>
                                    @endforeach
                                   
                                </div>
                            </div>

                        @endforeach

                           
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-lg-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Image Galary</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <form method="POST" action="{{ route('galary.store') }}" enctype="multipart/form-data">
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
                                <h5>Galary Image<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" id="image" name="image" class="form-control">

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                               </div>
                            </div>
                    </div>
                    <br>

                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-info" value="Add Image Galary">
                    </div>

                    </form>

                </div> <!-- table res.. end -->
            </div> <!-- box body end -->
        </div> <!-- box end -->
    </div>
    </div>
@endsection
