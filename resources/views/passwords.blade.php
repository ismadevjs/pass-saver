@extends('welcome')

@include('hero', ['name' => 'Authentication', 'heading' => 'Passwords'])
@section('content')
<div class="mt-4 mb-4">
    <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-normal">Create</button>
   </div>
   {{-- <div class="mb-4 mt-4">
    <button type="button"  class="btn btn-warning showPass">Show</button>
   </div> --}}

   <!-- Normal Block Modal -->
  <div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
          <div class="block-header bg-primary-dark">
            <h3 class="block-title">Add your password</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-fw fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
                <form action="{{route('authentications.post')}}" method="POST">
                    @csrf
                        
                    <div class="mb-4">
                        <label for="">ٍSocial Media :  </label>
                        <select name="social_id" id="" class="form-control">
                            @foreach ($socials as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for=""> email / phone :  </label>
                        <input type="text" class="form-control" placeholder="" name="email">
                    </div>

                    <div class="mb-4">
                        <label for=""> Password :  </label>
                        <input type="text" class="form-control" placeholder="" name="password">
                    </div>
                    <div class="mb-4">
                        <input type="submit" class="btn btn-success" >
                    </div>
                </form>
            </div>
       
        </div>
      </div>
    </div>
  </div>
  <!-- END Normal Block Modal -->


      <div class="block block-rounded">
        <div class="block-content table-responsive">
          <table class="table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>email</td>
                    <td>Auth</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($passwords as $item)
                <tr>
                    <td>{{$item->social_id}}</td>
                    <td>{{$item->email}}</td>
                    <td>

                        
                            <input type="text" class="form-control passwordArea "   value="{{$item->password}}" name="example-group1-input2" readonly>
                            
                        
                        
                    </td>
                    <td>{{$item->created_at->diffForHumans()}}</td>
                    <td>
                        <button class="btn btn-xs btn-primary"  data-bs-toggle="modal" data-original-title="test" data-bs-target="#edit-{{$item->id}}"><i class="fa fa-pen"></i></button>
                           
                        <button class="btn btn-xs btn-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target="#delete-{{$item->id}}"><i class="fa fa-trash"></i></button>
  
  
                    </td>

                      {{-- this model for update --}}


                      <div class="modal fade" id="edit-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update  {{$item->name}}</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                          <form action="{{route('authentications.update')}}" method="POST">
                            <div class="modal-body">
                          
                                  @csrf
                                  <input class="form-control" type="hidden" placeholder="..." name="id" value="{{$item->id}}" required>
                                  
                                  <div class="mb-4">
                                    <label for="">ٍSocial Media :  </label>
                                    <select name="social_id" id="" class="form-control">
                                        @foreach ($socials as $soc)
                                        <option value="{{$soc->id}}">{{$soc->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for=""> email / phone :  </label>
                                    <input type="text" class="form-control" placeholder="" value="{{$item->email}}" name="email">
                                </div>
                                <div class="mb-4">
                                    <label for=""> Password :  </label>
                                    <input type="text" class="form-control" placeholder="" value="{{$item->password}}" name="password">
                                </div>
                                 
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-success" type="button" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-dark" type="submit">Save changes</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>

                    {{-- this is for delete --}}

                    
                    <div class="modal fade" id="delete-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete <span class="badge bg-dark">{{$item->password}}</span></h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                          <form action="{{route('authentications.delete')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$item->id}}" name="id">
                            <input type="hidden" value="{{$item->password}}" name="name">
                            <h2 class="text text-center mt-4"> <span class="badge bg-danger">Are you sure?</span></h2>

                            <div class="modal-footer">
                              <button class="btn btn-success" type="button" data-bs-dismiss="modal">No</button>
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>


                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>

  
@endsection

@push('scripts')
<script>

// $('.showPass').click(function(counter) {
    
   
//     console.log($(this).text())
//     if ( $(this).text('Hide') || $(this).text('Show') ) {

//         $('.passwordArea').toggle('type', 'password')
//         $(this).text('Show')

//     } 
    
//     if ( $(this).text('Show') ) {
//         $('.passwordArea').attr('type', 'text')
//         $(this).text('Hide')
//     }

      
// });

</script>
@endpush