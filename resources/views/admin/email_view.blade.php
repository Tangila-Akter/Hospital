<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
    	label{
    		display: inline-block;
    		width: 200px;
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

        


      <div class="container-fluid page-body-wrapper">





      	<div class="container" align="container" style="padding-top: 100px;">


          <h1 style="text-align: center; font-size: 25px;">Send Email to {{$data->email}}</h1>

          
      		@if(session()->has('message'))
      		<div class="alert alert-success">
      			 
      			{{session()->get('message')}}
      		</div>

      		@endif
      		<form action="{{url('sendemail',$data->id)}}" method="post">
      			@csrf
      			<div style="padding: 15px;">
      				<label>Greeting</label>
      				 


              <textarea type="text" style="color:black; width: 350px;" name="greeting" placeholder="wrtie a greeting" required></textarea>

      			</div>
      			<div style="padding: 15px;">
      				<label>Body</label>
      				 

               <textarea type="text" style="color:black; width: 350px;" name="body" placeholder="wrtie email body text" required></textarea>


      			</div>
      			
      			<div style="padding: 15px;">
      				<label>Action Text</label>
      				<input type="text" style="color:black;" name="actiontext" placeholder="button name" required>
      			</div>
            <div style="padding: 15px;">
              <label>Action Url</label>
              <input type="text" style="color:black;" name="actionurl" placeholder="give button url link" required>
            </div>
            <div style="padding: 15px;">
              <label>End Part</label>
               

               <textarea type="text" style="color:black; width: 350px;" name="endpart" placeholder="wrtie email body text" required></textarea>
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