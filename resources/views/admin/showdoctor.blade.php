<x-app-layout>
    <h1>admin</h1>
    </x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div style="position: relative; top:60px; right:-60px;">
            <table bgcolor="black" id="table_id" class="display">
              <thead>
                  <tr>
                      <th style="padding: 30px">Doctor Name</th>
                      <th style="padding: 30px">Phone Number</th>
                      <th style="padding: 30px">Speciality</th>
                      <th style="padding: 30px">Room no</th>
                      <th style="padding: 30px">Image</th>
                      <th style="padding: 30px">Action</th>
                      
                  </tr>
                </thead>
                  @foreach ($data as $doctor)
                  <tbody >
                  <tr align="center" style="color:black;">
                      <td>{{$doctor->name }}</td>
                      <td>{{$doctor->phone }}</td>
                      <td>{{$doctor->speciality }}</td>

                      <td>{{$doctor->room }}</td>
                      <td><img height="100" width="100" src="doctorimage/{{$doctor->image }}" ></td>
                      <td><a class="btn btn-warning" href="{{ url('/deletedoctor',$doctor->id) }}">Delete</a>&nbsp<a class="btn btn-primary" href="{{ url('/updatedoctor',$doctor->id) }}">Edit</a></td>
                      
          
      
                  </tr>
              </tbody>
                  @endforeach
              </table>
          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    <script>
        function myFunction() {
            $('#exampleModal').modal('show');
        }
        </script>
  </body>

</html>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>