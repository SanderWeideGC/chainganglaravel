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
        <a href="/dashboard">
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
            Back
          </h4>
        </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Nieuwe user toevoegen
                </th>
              </thead>
              <tbody>
                <tr>
                   <td> <form enctype="multipart/form-data" method="POST" action="/recipes">
                    @csrf
                        <div>
                            <div>
                                <input type="text" name="titel" id="titel" placeholder="Title" required>
                            </div>
                            <div>
                                <textarea placeholder="Text" name="body" id="body" required></textarea>
                            </div>
                            <div>
                                <button type="submit" style="margin: 10px 0 0 0;" >Add user</button>
                            </div>
                        </div>
                    </form>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection