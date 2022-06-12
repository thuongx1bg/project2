@extends('back-end.index')
@section('css')
<style>
    .pagiante_bottom{
        margin-left: 10px;margin-top:30px;width:300px;
        position: relative;
        bottom: 0px

    }
</style>
@endsection
@section('back-end.contents')
<div class="container-fluid py-4">
<div class="row">
    
    <div class="col-12">
      <div class="card mb-4 " style="min-height: 550px" >
        <div class="card-header pb-0 " style="display:flex;justify-content: space-between">
          <h6>Authors table</h6>
          @if (session()->has('success'))
          <div id="notify_success" >
              
            
          </div>
          
          @endif
         
          <a class="btn   btn-success" href="{{route('setting.create')}}" role="button" id="dropdownMenuLink" >
            <i class="fas fa-plus"></i>&nbsp;&nbsp; ADD SETTING
            </a>
        </div>
           
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Config_key</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Confix_value</th>
                  <th class="text-secondary text-xs font-weight-bolder opacity-7 ps-2">Action</th>
                </tr>
              </thead>
              <tbody>
                  @if (count($settings))
                      
                  
                
                    @foreach ($settings as $setting )
                        
                    <tr>
                        <td >
                        <div class="d-flex px-2 py-1">
                            
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$setting->config_key}}</h6>
                            
                            </div>
                        </div>
                        </td>
                        <td>
                        <p class="text-xs font-weight-bold mb-0">{{$setting->config_value}}</p>
                        
                        </td>
                        
                        
                        <td class="align-middle">
                            <a onclick="return functionDelete()" class="btn btn-link text-danger text-gradient px-3 mb-0 delete" href="{{route('setting.delete',['id'=>$setting->id])}}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                            <a  class="btn btn-link text-dark px-3 mb-0" href="{{route('setting.edit',['id'=>$setting->id])}}"><i class="fas fa-pencil-alt text-dark me-2" ></i>Edit</a>
                        </td>
                        
                    </tr>
                    
                    @endforeach
                   @endif
              </tbody>
            </table>
            
        </div>
    </div>
    <div class="pagiante_bottom" >{{ $settings->links('pagination::bootstrap-4') }}</div>
      </div>
    </div>
  </div>
</div>

  @endsection

@section('js')
<script>
function functionDelete(){
              
if(!confirm("Bạn có chắc chắn muốn xóa !"))
        event.preventDefault();
            }






if(document.getElementById("notify_success")){
                  const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
              })

              Toast.fire({
                icon: 'success',
                title: 'Done in successfully'
              })
            };
            
            


  
  </script>
@endsection