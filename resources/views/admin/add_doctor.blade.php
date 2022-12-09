<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
    	label{
    		display: inline-block;
    		width: 200px;
        color: white;
    	}
    </style>
  </head>
  <body>
    <div class="container-scroller">
        
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
 
  <div class="main-panel">
          <div class="content-wrapper">

 
      		  @if(session()->has('message'))

            <div class="alert alert-success">

             
              
              {{session()->get('message')}}
              
            </div>

            @endif
      		<form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
      			@csrf
      			<div style="padding: 15px;">
      				<label>Doctor Name</label>
      				<input type="text" style="color:black;" name="name" placeholder="wrtie the name">
      			</div>
      			<div style="padding: 15px;">
      				<label>Phone</label>
      				<input type="number" style="color:black;" name="phone" placeholder="wrtie the number" required>
      			</div>
      			<div style="padding: 15px;">
      				<label>Speciality</label>
      				<select name="speciality" style="color:black; widows: 200px;" required>
      					<option>--Select--</option>
      					<option value="skin">skin</option>
      					<option value="heart">heart</option>
      					<option value="eye">eye</option>
      					<option value="nose">nose</option>
      				</select>
      			</div>
      			<div style="padding: 15px;">
      				<label>Room No</label>
      				<input type="text" style="color:black;" name="room" placeholder="wrtie the room number" required>
      			</div>
      			<div style="padding: 15px;">
      				<label>Doctor Image</label>
      				<input type="file" name="file" required>
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