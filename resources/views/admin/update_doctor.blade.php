<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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


        
        <div class="container" align="container" style="padding-top: 100px;">
          @if(session()->has('message'))
          <div class="alert alert-success">
            
            {{session()->get('message')}}
          </div>

          @endif
          <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
              <label>Doctor Name</label>
              <input type="text" style="color:black;" name="name" value="{{$data->name}}">
            </div>
            <div style="padding: 15px;">
              <label>Phone</label>
              <input type="number" style="color:black;" name="phone" value="{{$data->phone}}" required>
            </div>
            <div style="padding: 15px;">
              <label>Speciality</label>
              <input style="color: black;" type="text" name="speciality" value="{{$data->speciality}}">
            </div>
            <div style="padding: 15px;">
              <label>Room No</label>
              <input type="text" style="color:black;" name="room" value="{{$data->room}}" required>
            </div>
            <div style="padding: 15px;">
              <label>Old Image</label>
              <img height="200" width="200" src="doctorimage/{{$data->image}}">
            </div>
            <div style="padding: 15px;">
              <label>Change Image</label>
              <input type="file" name="file">
            </div>
            <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>  
    </div>
    <!-- container-scroller -->
    @include('admin.script')


    <script type="text/javascript">
      
      $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 4000 ); // 3 secs

});
    </script>


  </body>
</html>