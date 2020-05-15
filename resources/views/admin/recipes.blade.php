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
          <h4 class="card-title"> Recipes</h4>
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
                  Gerecht
                </th>
                <th>
                  Recept
                </th>
                <th>
                  Image
                </th>
              </thead>
              <tbody>
              @foreach($recipes as $key => $recipe)
                <tr>
                  <td>
                    {{$recipe->id}}
                  </td>
                  <td>
                    {{$recipe->titel}}
                  </td>
                  <td>
                    {{$recipe->body}}
                  </td>
                  <td>
                    {{$recipe->image}}
                  </td>
                  <td>
                    <a href="/recipesd/edit/{{$recipe->id}}">Edit</a>
                  </td>
                  <td>
                  <form method="POST" action="rd/{{$recipe->id}}" >
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