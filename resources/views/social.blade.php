@extends('welcome')


@include('hero', ['name' => 'socials', 'heading' => 'social medias'])

@section('content')
<div class="mt-4 mb-4">
    <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-normal">Create</button>
   </div>

   <!-- Normal Block Modal -->
  <div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
          <div class="block-header bg-primary-dark">
            <h3 class="block-title">Create social media</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-fw fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
                <form action="{{route('social.post')}}" method="POST">
                    @csrf
                        
                    <div class="mb-4">
                        <label for=""> Name :  </label>
                        <input type="text" class="form-control" placeholder="" name="name">
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
                    <td>created</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($socials as $item)
                <tr>
                    <td>{{$item->name}}</td>
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
                                                <form action="{{route('social.update')}}" method="POST">
                                                  <div class="modal-body">
                                                
                                                        @csrf
                                                        
                                                        <div class="mt-4">
                                                            <label for="">Name</label>
                                                            <input class="form-control" type="hidden" placeholder="..." name="id" value="{{$item->id}}" required>
                                                            <input class="form-control" type="text" placeholder="..." name="name" value="{{$item->name}}" required>
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
                                                      <h5 class="modal-title" id="exampleModalLabel">Delete <span class="badge bg-dark">{{$item->name}}</span></h5>
                                                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                <form action="{{route('social.delete')}}" method="POST">
                                                  @csrf
                                                  <input type="hidden" value="{{$item->id}}" name="id">
                                                  <input type="hidden" value="{{$item->name}}" name="name">
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