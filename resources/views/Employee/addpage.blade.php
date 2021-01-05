@include('partials.head')
@include('partials.nav')
@include('partials.sidebar')
@if (session('error'))
  <!-- <div class="alert alert-danger">{{ session('error') }}</div>
 @endif
<div class="container">
<form  class="form-horizontal" action="{{ action('EmployeeController@store')}}" method="POST" id="form_reg">
@csrf -->
  
  <div class="row">
  <div class="offset-md-3 col-md-6">
    <div class="form-group" >
      <label class=" control-label">Name</label>
      <input type="text" name="name" class="form-control" placeholder="NAME" id="nname" autocomplete="off">
      
      <p id="namechk"></p>
    </div>
    </div>
  </div>
  <div class="row">
<div class="offset-md-3 col-md-6">
    <div class="form-group" >
    
        <label class=" control-label">Adress</label>
        <textarea class="form-control" name="address" placeholder="ADDRESS" id="addr" required=""></textarea>
        <p class="error_form" id="address_chk"></p>

      </div>
      </div>
  </div>
      <div class="row">
        <div class="offset-md-3 col-md-6">
  <div class="form-group">
 
<div class="form-group">
<label for="country">Country</label>
<select name="country" class="form-control" id="country-dropdown">
<option value="">Select Country</option>
@foreach ($countries as $country) 
<option value="{{$country->id}}">
{{$country->name}}
</option>
@endforeach
</select>
</div>
<div class="form-group">
<label for="state">State</label>
<select name="state" class="form-control" id="state-dropdown">
</select>
</div>                        
<div class="form-group">
<label for="city">City</label>
<select name="city" class="form-control" id="city-dropdown">
</select>
</div>


      </div>
    </div>
      </div>
  

    <!-- <div class="row">
      <div class="offset-md-3 col-md-6">
    <div class="form-group" >
        
        <label class=" control-label">City</label>
        <input type="text" name="city" class="form-control" placeholder="City" id="form_city" required="">
        <p  id="city_chk"></p>

      </div>
      </div>
    </div> -->
      <div class="row">
          <div class="offset-md-3 col-md-6">
      <div class="form-group" >
          
              <label class="  control-label">Gender</label> 
        <br>
        <br>  
              <input  type="radio" class="gender_clk" name="gender" id="male" value="Male">
              <label for="male">Male</label>
           
               <input  type="radio" class="gender_cl" name="gender" id="female" value="Female">
              <label for="female">Female</label>
              <p id="gender_chk"></p>
        </div>
  </div>
      </div>
  <div class="row">
      <div class="offset-md-3 col-md-6">
  <div class="form-group" id="info" >
      
          <label class=" control-label">Profession</label>

          <div class="checkbox">
              <label><input type="checkbox" class="l1" name="profession" value="it" >IT</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="l1" name="profession"  value="bsc">BSC</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="l1" name="profession" value="math">MATH</label>
            </div>
            <p id="pro_chk"></p>
    </div>
</div>
  </div>
<div class="row">
    <div class="offset-md-3 col-md-6">
        <button type="submit" id="form_submit" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
      
</div>
</div>
</div>

</form>




@include('partials.footer')