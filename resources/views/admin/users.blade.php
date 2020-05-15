@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        
        <div class="card-header" 
          style="
            width: 50%;
            float: left;
          "
        >
          <h4 class="card-title"> Users</h4>
        </div>
        
        <div class="card-header" 
          style="
            width: 50%;
            float: right;
          "
        >
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Role
                </th>
              </thead>
              <tbody>
              @foreach($users as $key => $user)
                <tr>
                  <td>
                    {{$user->id}}
                  </td>
                  <td>
                    {{$user->name}}
                  </td>
                  <td>
                    {{$user->email}}
                  </td>
                  <td>
                    {{$user->usertype}}
                  </td>
                  <td>
                    <a href="/users/edit/{{$user->id}}">Edit</a>
                  </td>
                  <td>
                  <form method="POST" action="ud/{{$user->id}}" >
					          @csrf
            		    @method('DELETE')
						        <button type="submit" style="border:none"><i class="fas fa-trash-alt"></i>
					          </button>
					          </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection