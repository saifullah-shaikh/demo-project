
//     $(document).ready(function(){

//       $('#namechk').hide();
//       $('#address_chk').hide();
//       $('#country_chk').hide();
//       $('#city_chk').hide();
//      $('#gender_chk').hide();
//      $('#pro_chk').hide();
   
   
//      var name_err =true;
//      var address_err =true;
//      var country_err =true;
//      var city_err =true;
//      var gender_err =true;
//       var pro_err =true;
     

//       $('#form_submit').on('click',function(){

//         name_check();
//     });
//     function name_check(){
//         var pattern =/^[a-zA-Z]*$/;
//         var name_val =$('#nname').val();
//         if (!name_val.match(pattern) || name_val.length == 0) {
//             $('#namechk').show();
//             $('#namechk').html("please fill the cheater ");

//             $('#namechk').css("color","red");
//            name_err= false;
//           return false;
//         }
        
//         else {
//              $('#namechk').hide();
//             // name_err= false;
//               return false;
//         }
//     }
 
//               $('#form_submit').on('click',function(){

//                 address_check();
//              });
//                 function address_check(){
//                  var pattern =/^[a-zA-Z0-9]*$/;
//                     var address_val =$('#addr').val();
//                   if (!address_val.match(pattern) || address_val.length == 0) {
//                      $('#address_chk').show();
//                     $('#address_chk').html("please fill the address ");
//                        $('#address_chk').focus();

//                     $('#address_chk').css("color","red");
//                     address_err= false;
//                    return false;
//              }
        
//               else {
//                    $('#address_chk').hide();
//                   return false;
//                   }
//                  }

//                  $('#form_submit').on('click',function(){

//                     country_check();
//                 });
//                 function country_check(){
//                     var country_val = $('#form_country').val();

//                   if (country_val == "0"){
//                     $('#country_chk').show();
//                   alert("please select the option")
//                   //  $('#country_chk').html("please fill the select ");
                
//                     country_err = false;
//                     return false;
                    
//                   }
//                  else{
//                      //alert("sueccss");
//                      $('#country_chk').show();
//                      return false
//                  }
//                 }

//                 $('#form_submit').on('click',function(){

//                     city_check();
//                 });
//                 function city_check(){
//                     var pattern =/^[a-zA-Z]*$/;
//                     var city_val =$('#form_city').val();
//                     if (!city_val.match(pattern) || city_val.length == 0) {
//                         $('#city_chk').show();
//                         $('#city_chk').html("please fill the city name");
            
//                         $('#city_chk').css("color","red");
//                         city_err= false;
//                          return false;
//                     }
                    
//                     else {
//                          $('#city_chk').hide();
//                           return false;
//                     }
//                 }


//                 $('#form_submit').on('click',function(){
//                     gender_check();
//                 });
//                 function gender_check(){

//                     if($('.gender_clk').is(':checked')){
//                         $('#gender_chk').show();
//                      $('#gender_chk').html("Male select");
//                      return false;
//                       }
//                      else if ($('.gender_cl').is(':checked')){
//                         $('#gender_chk').show();
//                      $('#gender_chk').html("select female");
                       
//                     //   gender_err=false;
//                    return false;

                       
//                       }
//                       else { 
//                       $('#gender_chk').show();
//                      $('#gender_chk').html("please select gender");
//                      $('#gender_chk').css("color","red");
//                      gender_err=false;
//                      return false;
                    
//                 }
//                 } 
                
//                           $('.l1').on('click', function() {
//                              if ($('.l1').not(this).prop('checked', false)){
//                                 $('#pro_chk').show();
//                                 return false;
//                              }
//                              else {
//                                 $('#pro_chk').show();
//                                 $('#pro_chk').html("please select");
//                                 return false;
//                              }
      
//   });
                    
//                        $('#form_reg').submit(function(){
                         
//                          name_err =true;
//                          address_err =true;
//                          country_err =true;
//                          city_err =true;
//                          gender_err =true;
                         
//                         //var pro_err =true;

//                             name_check();
//                             address_check();
//                             city_check();
//                             gender_check();
//                             country_check();

//     if((name_err === true) && (address_err === true) && (gender_err === true) && (country === true) && (city === true)){
//         swal("Good job!", "You clicked the button!", "success");

//         return true;
//     }
//     else{
//         swal("", "check your filled!", "warning");
//         return false;
//     }
// });     
                

//     });


function confirmDelete(){
    return confirm("Are you sure to delete data");
  }




