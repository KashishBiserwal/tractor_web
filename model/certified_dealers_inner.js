$(document).ready(function() {
    console.log("ready!");
    $('#delership_enq_btn').click(store);
    
});
function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var enquiry_type_id = 14;
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#mob_num').val();
    var state = $('#_state').val();
    var district = $('#_district').val();
    var tehsil = $('#_tehsil').val();
    var brand = $('#_brand').val();
  
    // Prepare data to send to the server
    var paraArr = {
      'enquiry_type_id':enquiry_type_id,
      'first_name': first_name,
      'last_name':last_name,
      'mobile':mobile,
      'state':state,
      'district':district,
      'tehsil':tehsil,
      'brand_id':brand,
    };
   
  var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    console.log(url);
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        // alert('successfully inserted..!');
        // const new_data=data.product.filter((s)=>{ 
        //     if(s.product_type=="FOR_SELL_TRACTOR"){
        //         return s;
        //     }
        // });
        $("#used_tractor_callbnt_").modal('hide'); 
        var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');    
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
     
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
      
        // getOldTractorById();
        console.log("Add successfully");
      
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        // 
      }
    });
  }