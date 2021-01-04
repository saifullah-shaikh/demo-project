<!-- Sticky Footer -->
<footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Your Website 2018</span>
      </div>
    </div>
  </footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
  </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{url('assets/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{url('assets/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{url('assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('assets/js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
<script src="{{url('assets/js/demo/datatables-demo.js')}}"></script>
<script src="{{url('assets/js/demo/chart-area-demo.js')}}"></script>
<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/dropdownlist.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
    $('#country-dropdown').on('change', function() {
    var country_id = this.value;
    $("#state-dropdown").html('');
    $.ajax({
    url:"{{url('employee/create/get-states-by-country')}}",
    type: "POST",
    data: {
    country_id: country_id,
    _token: '{{csrf_token()}}' 
    },
    dataType : 'json',
    success: function(result){
    $('#state-dropdown').html('<option value="">Select State</option>'); 
    $.each(result.states,function(key,value){
    $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    $('#city-dropdown').html('<option value="">Select State First</option>'); 
    }
    });
    });    
    $('#state-dropdown').on('change', function() {
    var state_id = this.value;
    $("#city-dropdown").html('');
    $.ajax({
    url:"{{url('employee/create/get-cities-by-state')}}",
    type: "POST",
    data: {
    state_id: state_id,
    _token: '{{csrf_token()}}' 
    },
    dataType : 'json',
    success: function(result){
    $('#city-dropdown').html('<option value="">Select City</option>'); 
    $.each(result.cities,function(key,value){
    $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    }
    });
    });
    });
// $(document).ready(function(){
//       $('#delete_pro').on('click',function(){
//         let pid = $(this).attr("title");
//           var url = $(this).attr('href');
//            // location.reload(true);

//         swal({
//           title: "Are you sure want to remove this item?",
//           text: "You will not be able to recover this item",
//           type: "warning",
//           showCancelButton: true,
//           confirmButtonClass: "btn-danger",
//           confirmButtonText: "Confirm",
//           cancelButtonText: "Cancel",
//           closeOnConfirm: false,
//           closeOnCancel: false
//         },
//         function(isConfirm) {
//           if (isConfirm) {
//             swal("Deleted!", "Your item deleted.", "success");
//           } else {
//             swal("Cancelled", "You Cancelled", "error");
//           }
//       });
//       });
//       });


//     $(document).ready(function(){
//       $('.delete_pro').on('click',function(){
//           //alert($(this).attr('href'));
//           //alert($(this).attr("title"));
          
//           let pid = $(this).attr("title");
//           var url = $(this).attr('href');
//             location.reload(true);
    
    
//           $.ajax({
//             type:'DELETE',
//             url: url, 
//             data:{id : pid },
//             success: function(response){
//            confirm('are you sure');
//              return false;
//             }
//         });
//         return false;
//       });
//     });
    
    </script>
</body>

</html>