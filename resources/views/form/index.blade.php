@extends('form.layout')
@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        <!-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif -->

        <div class="user">
            <div class="card-header">DetailsList </div>
            <div class="det">
                <!-- <a href="{{ route('form.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New User</a> -->
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Subject</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($userdetails as $userdetail)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $userdetail->firstname }}</td>
                            <td>{{ $userdetail->lastname }}</td>
                            <td>{{ $userdetail->email }}</td>
                            <td>{{ $userdetail->address }}</td>
                            <td>{{ $userdetail->gender }}</td>
                            <td>{{ $userdetail->subject }}</td>
                            <td>
                            

                                    <a href="{{ route('form.show', $userdetail->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('form.edit', $userdetail->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   
                                
                                    <form action="{{ route('form.destroy', $userdetail->id) }}" method="post">
                                    @csrf
                                   @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');">
                                 <i class="bi bi-trash"></i> Delete
                                </button>
                              </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Detail found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  

            </div>
        </div>
    </div>    
</div>
    
@endsection