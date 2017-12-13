<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>

<style>
.center{
    text-align: center;
}
</style>

<body>

    <div class="container" style="margin-top:50px;">
        <div class="form-group">
            <button id="create" class="btn btn-primary" data-toggle="modal" data-target="#create-modal">
                Add Data
            </button>    
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>CRUD with AJAX </strong>                        
                    </div>
                    <div class="card-block">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Address</th>
                              <th scope="col">E-mail</th>
                              <th scope="col" class="center">Actions</th>
                          </tr>
                          </thead>
                          <tbody>
                            <template id="table-template">
                            <tr data-id="@{{ id }}">
                              <th scope="row"> @{{ id }}</th>
                              <td> @{{ firstname }} </td>
                              <td> @{{ lastname }} </td>
                              <td> @{{ address }} </td>
                              <td> @{{ email }} </td>                             
                              <td class="center">
                                  <a href="" data-id="@{{ id }}" class="detail btn btn-sm btn-primary">Detail</a>
                                  <a href="" class="edit btn btn-sm btn-success" data-id="@{{ id }}">Edit</a>
                                  <a href="" class="delete btn btn-sm btn-danger" data-id="@{{ id }}">Delete</a>
                              </td>
                            </tr>
                            </template>                                                
                          </tbody>
                      </table>
                    </div>
                    <div class="card-footer">
                        Example CRUD data with jQuery Ajax and Mustache.js for Javascript templating
                    </div>
                </div>
            </div>
        </div>

       

        @include('forms.create')
        @include('forms.detail')
        @include('forms.edit')

    </div>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mustache.min.js') }}"></script>
    <script src="{{ asset('js/employee.js') }}"></script>

</body>
</html>