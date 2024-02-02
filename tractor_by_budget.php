<html lang="en">
  <head> <?php
   include 'includes/headertag.php';
   include 'includes/footertag.php';
   ?> </head>
  <body> <?php
   include 'includes/header.php';
   ?>

<script>
    $(document).ready(function() {
    console.log("ready!");
    getsearchdata();
});
    function getsearchdata() {
        var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('budget');
    var arr = [];
    arr.push(Id);
    console.log(arr,"arr");
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_price_brand_hp";
    console.log(url);
    var paraArr = {
          'price_ranges': JSON.stringify(arr)
        };
    $.ajax({
        url: url,
          type: "POST",
          data: paraArr,
        success: function(data) {
          console.log(data,"getdata")
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
</script>