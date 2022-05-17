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
            <form action="{{ url('sendemail', $data->id) }}" method="post" >
                @csrf
               
                
                <div>
                   <label>Greeting</label>
                   <input type="text" class="text" name="greeting"  placeholder="Write a greeting" >
               </div>
               <div>
                   <label>Body</label>
                   <input type="text" class="text" name="body"  placeholder="Phone number" >
               </div>
               <div>
                <label>Action URL</label>
                <input type="text" class="text" name="actionurl"  placeholder="Action URL" >
            </div>
               
               <div>
                   <label>Action text</label>
                   <input type="text" class="text" name="actiontext"  placeholder="Action text" >
                   
               </div>
               <div>
                <label>End part</label>
                <input type="text" class="text" name="endpart"  placeholder="End part" >
                
            </div>
               <div>
                    
                <input  class="btn btn-primary" style="background-color: #2798bb; color:white;" type="submit" value="Save">
            </div>
            </form>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

  </body>
</html>