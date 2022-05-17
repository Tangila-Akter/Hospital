<x-app-layout>
    <h1>admin</h1>
    </x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <base href="public">
    @include('admin.css')
    <style>
        body{
          background: #191c24;
          color: white;
        }
        a:link {
          color: white;
        text-decoration: none;
      }
      .text{
            color: black !important;
        }
      </style>
  </head>
  <body>
   
        <div class="container-fluid page-body-wrapper">
          @if (session()->has('message'))
            <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{ session()->has('message') }}
            </div>
          @endif
            <form action="{{ url('editdoctor', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
               
                
                <div>
                   <label>Doctor name</label>
                   <input type="text" class="text" name="name" value="{{$data->name }}" placeholder="Write a name" >
               </div>
               <div>
                   <label>Phone number</label>
                   <input type="text" class="text" name="phone" value="{{$data->phone }}" placeholder="Phone number" >
               </div>
               <div>
                <label>Speciality</label>
                <select class="text" name="speciality" value="{{$data->speciality }}">
                    <option style="color:black;">--select--</option>
                    <option value="skin" style="color:black;">skin</option>
                    <option value="heart" style="color:black;">heart</option>
                    <option value="eye" style="color:black;">eye</option>
                    <option value="nose" style="color:black;">nose</option>
                </select>
            </div>
               <div>
                   <label>Image</label>
                   <input type="file" name="file" >
               </div>
               <div>
                   <label>Room no</label>
                   <input type="text" class="text" name="room" value="{{$data->room }}" placeholder="Room no" >
                   <div>
                    
                       <input  class="btn btn-primary" style="background-color: #2798bb; color:white;" type="submit" value="Save">
                   </div>
               </div>
                
            </form>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

  </body>
</html>