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
          <h4 class="card-title"> Blogs</h4>
        </div>
        
        <div class="card-header" 
          style="
            width: 50%;
            float: right;
          "
        >
        <a href="/dashboard/create">
          <h5 
          style="
          float: right;
          background-color: #F96332;
          padding: 10px;
          color: white;
          -webkit-box-shadow: 0px 0px 9px -3px rgba(0,0,0,0.75);
          -moz-box-shadow: 0px 0px 9px -3px rgba(0,0,0,0.75);
          box-shadow: 0px 0px 9px -3px rgba(0,0,0,0.75);
          border-radius: 5px;
          "
          >
            New Blog
          </h4>
        </a>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Title
                </th>
                <th>
                  Image
                </th>
                <th>
                  Date
                </th>
              </thead>
              <tbody>
              @foreach($blog as $key => $data)
                <tr>
                  <td>
                    {{$data->id}}
                  </td>
                  <td>
                    {{$data->titel}}
                  </td>
                  <td>
                    {{$data->image}}
                  </td>
                  <td>
                    {{$data->datum}}
                  </td>
                  <td>
                    <a href="/dashboard/edit/{{$data->id}}">Edit</a>
                  </td>
                  <td>
                  <form method="POST" action="{{$data->id}}" >
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