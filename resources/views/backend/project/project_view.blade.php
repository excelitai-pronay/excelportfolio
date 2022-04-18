@extends('admin.admin_master')

@section('admin')

<div class="row">
    <div class="col-lg-8">

        <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title"> Project View</h3>
        </div>
        <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>

                    <th>Icon</th>
                    <th>Title</th>
                    <th>Descripton</th>
                    <th>Action</th>
            
                    </tr>
                </thead>
                    <tbody>

                        @foreach($projects as $project)
                        <tr>					
                            <td>
                            <img src="{{asset($project->icon)}}" height="80px;" width="80px;">
                            </td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->description}}</td>
                            <td>
                            <a href="{{ route('project.edit', $project->id)  }}"><i class="fa fa-edit btn btn-success"></i></a>
                            <a href="{{ route('project.delete', $project->id ) }}"> <i class="fa fa-trash btn btn-danger"></i></a> 
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
            <h3 class="box-title">Add Project</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
    
                <form  method="POST" action="{{route('project.store')}}" enctype="multipart/form-data">
    
                    @csrf
   
                        <div class="form-group">
                            <h5> Project Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" id="icon" name="icon" class="form-control" >
    
                            @error('icon')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
    
                        <div class="form-group">
                            <h5>Project Title <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text"  id="title" name="title" class="form-control" >
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <h5>Description </h5>
                        <div class="controls">
                            <input type="text"  id="description" name="description" class="form-control" >
    
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>

                    
    
                    </div>
                    <br>
    
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-info" value="Add Project">
                    </div> 
    
                </form>
            
                </div> <!-- table res.. end -->
            </div>  <!-- box body end -->
        </div>      <!-- box end -->
    </div> 

</div>

@endsection