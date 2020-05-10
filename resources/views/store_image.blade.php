<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Insert Image into Mysql Database in Laravel 6</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<style>
.containerform {background-color: #151515;}

</style>


@extends('layout')

@section('body')
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>Recipes</h2>
                            <div class="breadcrumb-controls">
                                <a href="/"><i class="fa fa-home"></i> Home</a>
                                <span>Recipes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb End -->



 <div class="containerform">    
  <br />
  <h3 align="center">Insert your recipes and images here!</h3>
    <br />
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif

    @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
    <br />

    <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">User Form</h3>
         </div>
         <div class="panel-body">
         <br />
        
         <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
          @csrf

          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Enter Name</label>
           <div class="col-md-8">
            <input type="text" name="user_name" class="form-control" />
           </div>
          </div>
         </div>
         <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Select Profile Image</label>
           <div class="col-md-6">
            <input type="file" name="user_image" />
           </div>
          </div>
         </div>
         <div class="form-group" align="center">
          <br />
          <br />
          <input type="submit" name="store_image" class="btn btn-primary" value="Save" />
         </div>
         </form>
      
      </div>
     </div>
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">User Data</h3>
         </div>
         <div class="panel-body">
         <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <tr>
                     <th width="30%">Image</th>
                     <th width="70%">Name</th>
                  </tr>
                  @foreach($data as $row)
                  <tr>
                   <td>
                    <img src="store_image/fetch_image/{{ $row->id }}"  class="img-thumbnail" width="70" />
                   </td>
                   <td>{{ $row->user_name }}</td>
                  </tr>
                  @endforeach
              </table>
              {!! $data->links() !!}
             </div>
         </div>
     </div>
    </div>
 </body>
</html>