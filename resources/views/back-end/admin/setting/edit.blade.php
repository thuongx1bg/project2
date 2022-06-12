@extends('back-end.index')
@section('back-end.contents')
<div class="container-fluid py-4">
   
    
        <div class="col-md-12" >
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
                
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('setting.update',['id'=>$setting->id])}}" method="post"> <div class="row">
                  @csrf
                  @method('post')
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Config_key</label>
                    <input class="form-control" type="text" name="config_key" value="{{$setting->config_key}}" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Config_value</label>
                    <input class="form-control" type="text" name="config_value" value="{{$setting->config_value}}">
                  </div>
                </div>
            </div>
                <button type=" submit" class="btn btn-primary btn-sm ms-auto">Submit</button>
              </form>
             
             
            </div>
          </div>
        </div>
        
      </div>
</div>
@endsection