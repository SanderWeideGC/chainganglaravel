@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
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
                  Password
                </th>
                <th>
                  User Type
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Sander Weide
                  </td>
                  <td>
                    sanderweide11@gmail.com
                  </td>
                  <td>
                    ********
                  </td>
                  <td>
                    admin
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