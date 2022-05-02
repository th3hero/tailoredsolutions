@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Student List') }}  <button type="button" id="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary float-end">Add Subject</button></div>

                    <div class="card-body">
                       <table class="table table-hover table-striped">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Term</th>
                                   <th>Subject Name</th>
                                   <th>action</th>
                               </tr>
                           </thead>
                           <tbody>
                           @if(count($subjects)>0)
                               @foreach($subjects as $key=>$subject)
                                   <tr>
                                       <td>{{ $key+1 }}</td>
                                       <td>{{ $subject->term->name }}</td>
                                       <td>{{ $subject->subject_name }}</td>
                                   </tr>
                               @endforeach
                               @else
                               <tr>
                                   <td colspan="4" class="text-danger text-center">No record found</td>
                               </tr>

                               @endif
                           </tbody>

                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->



@endsection
@section('modal')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">//modal-dialog-centered

            <div class="modal-content">
                <form method="post" action="{{ route('subject.store') }}">@csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <label>Term</label>
                            <select class="form-select @error('term_id') is-invalid @enderror" name="term_id" required aria-label="Default select example">
                                <option selected>Open this select menu</option>
                              @if(count($terms)>0)
                                  @foreach( $terms as $key => $term)
                                      <option value="{{ $term->id }}">{{ $term->name  }}</option>
                                  @endforeach
                                @endif

                            </select>
                            @error('term_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-2">
                            <label>Subject</label>
                            <input type="text" value="{{ old('subject_name') }}" required class="form-control @error('subject_name') is-invalid @enderror" name="subject_name" autocomplete>
                            @error('subject_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>


        </div>
    </div>
@endsection
