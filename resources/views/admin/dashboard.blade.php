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
                  Title
                </th>
                <th>
                  Body
                </th>
                <th>
                  Image
                </th>
                <th>
                  Date
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    14
                  </td>
                  <td>
                    Blog Titel 1
                  </td>
                  <td>
                    Lorem ipsum
                  </td>
                  <td>
                    1589274529.jpg
                  </td>
                  <td>
                    2020-05-12 11:08:50
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