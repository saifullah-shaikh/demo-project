@include('partials.head')
@include('partials.nav')
@include('partials.sidebar')

@include('Alert.messages')

 <a href="/employee/create" class="btn btn-primary"> ADD RECORD</a> 
<br>
<br>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

<div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            
              <table class="table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
            
                  
                        <th>ID</th>
                      <th>NAME</th>
                      <th>ADDRESS</th>
                      <th>COUNTRY</th>
                      <th>STATE</th>
                      <th>CITY</th>
                      <th>GENDER</th>
                      <th>PROFESSION</th>
                      <th>ACTION</th>
             
                    
                    </tr>
                  </thead>

                <tbody>
                 @foreach($emp as $e)
                 
                  <tr>
                       <td>{{ $e ['id']}}</td>
                      
                    <td>{{$e['name']}}</td>
                    <td>{{$e['address']}}</td>

                    <td>{{$e['country']}}</td>
                    <td>{{$e['state']}}</td>
                    <td>{{$e['city']}}</td>
                    <td>{{$e['gender']}}</td>
                    <td>{{$e['profession']}}</td>
             
                    
             <td><a href="employee/{{ $e['id'] }}/edit" class="btn btn-info">EDIT</a>
              
              | <form action = "{{action('EmployeeController@destroy',$e['id'])}}" method ="post" onsubmit="return confirmDelete()">
                @csrf
               @method('delete')
                <!-- <a  onclick="javascript:void(0)" href =""  title="" class="btn btn-danger  delete_pro"> DELETE</a> -->
                <input type="submit" value="Delete" class="btn btn-danger">
                </td>
      </form>
             
                  </tr>
                  @endforeach
                </tbody>
                                                                       
                </table>



      </div>
    </div>
    

</div>











@include('partials.footer')
