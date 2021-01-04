@include('partials.head')
@include('partials.nav')
@include('partials.sidebar')



<div class="container">
<form  class="form-horizontal" action="{{ action('EmployeeController@update',$emp->id)}}" method="post" id="form_reg">
@csrf
  @method('put')
  <div class="row">
  <div class="offset-md-3 col-md-6">
    <div class="form-group" >
      <label class=" control-label">Name</label>
      <input type="text" name="name" value="{{$emp->name}}" class="form-control" placeholder="NAME" id="nname" autocomplete="off">
      
      <p id="namechk"></p>
    </div>
    </div>
  </div>
  <div class="row">
<div class="offset-md-3 col-md-6">
    <div class="form-group" >
    
        <label class=" control-label">Adress</label>
        <textarea class="form-control" name="address"  placeholder="ADDRESS" id="addr" required="">{{$emp->address}}</textarea>
        <p class="error_form" id="address_chk"></p>

      </div>
      </div>
  </div>
      <div class="row">
        <div class="offset-md-3 col-md-6">
  <div class="form-group">
      
      <label control-label>Select Country</label>
      <select class="form-control" name="country" id="form_country">
        <option value="0">Select country</option>

        <option value="pakistan" @if ($emp->country == 'pakistan') selected @endif > pakistan</option>
     <option value="afganistan" @if ($emp->country == 'afganistan') selected @endif > Afganistan</option>
        <p id="country_chk"></p>
      </select>

      </div>
    </div>
      </div>
  

    <div class="row">
      <div class="offset-md-3 col-md-6">
    <div class="form-group" >
        
        <label class=" control-label">City</label>
        <input type="text" name="city" value="{{$emp->city}}" class="form-control" placeholder="City" id="form_city" required="">
        <p  id="city_chk"></p>

      </div>
      </div>
    </div>
      <div class="row">
          <div class="offset-md-3 col-md-6">
      <div class="form-group" >
          
              <label class="  control-label">Gender</label> 
        <br>
        <br>  
              <input  type="radio" class="gender_clk" name="gender" id="male" value="Male"{{ $emp->gender == 'Male' ? 'checked' : ''}} >
              <label for="male">Male</label>
           
               <input  type="radio" class="gender_cl" name="gender" id="female" value="Female" {{ $emp->gender == 'Female' ? 'checked' : ''}}  >
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
              <label><input type="checkbox" class="l1" name="profession" value="it" @if ($emp->profession == 'it') checked @endif >IT</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="l1" name="profession"  value="bsc" @if ($emp->profession == 'bsc') checked @endif >BSC</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="l1" name="profession" value="math" @if ($emp->profession == 'math') checked @endif >MATH</label>
            </div>
            <p id="pro_chk"></p>
    </div>
</div>
  </div>
<div class="row">
    <div class="offset-md-3 col-md-6">
        <button type="submit" id="form_submit" class="btn btn-primary btn-lg btn-block">update</button>
      
</div>
</div>
</div>

</form>



@include('partials.footer')