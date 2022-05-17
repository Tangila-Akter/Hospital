<x-app-layout>
    <h1>admin</h1>
    </x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style>
        .text{
            color: black !important;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
    <!-- Button trigger modal -->
<button type="button" style="    height: 33px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Doctor
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Doctor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/upload_doctor') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                
                <div>
                   <label>Doctor name</label>
                   <input type="text" class="text" name="name" placeholder="Write a name" required>
               </div>
               <div>
                   <label>Phone number</label>
                   <input type="text" class="text" name="phone" placeholder="Phone number" required>
               </div>
               <div>
                <label>Speciality</label>
                <select class="text" name="speciality">
                    <option style="color:black;">--select--</option>
                    <option value="skin" style="color:black;">skin</option>
                    <option value="heart" style="color:black;">heart</option>
                    <option value="eye" style="color:black;">eye</option>
                    <option value="nose" style="color:black;">nose</option>
                </select>
            </div>
               <div>
                   <label>Image</label>
                   <input type="file" name="image" required>
               </div>
               <div>
                   <label>Room no</label>
                   <input type="text" class="text" name="room" placeholder="Room no" required>
                   <div>
                    <button type="button" style="background:rgb(230, 230, 230); color:black;" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <input  class="btn btn-primary" type="submit" value="Save">
                   </div>
               </div>
                
            </form>
        </div>
      </div>
    </div>
  </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>