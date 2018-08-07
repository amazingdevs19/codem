<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transfer owner ship Website  </title>
<?php include 'header.tpl';?>
  <link href='<?=base_url()?>assets/css/jquery.lighter.css' rel='stylesheet' type='text/css'>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php include 'footer.tpl';?>
  <script>
    var options = {
        "key": "rzp_test_XZdlR492nji0Fm",
    "amount": "100", //"<?php echo $objOrderData->final_amount*100?>", // 2000 paise = INR 20
    "name": "Wam360",
    "description": "Website theme purchase",
    "image": "<?php echo base_url().'images/logo.jpg'?>",
    "handler": function (response){
        console.log(response);
        enterDataAfterSuccess(response.razorpay_payment_id);
    },
    "notes": {
        "orderId": "<?php echo $objOrderData->order_id?>"
    },
    "theme": {
        "color": "#9368e9"
    }
};
var rzp1 = new Razorpay(options);
$(document).ready(function() {
    var rzp1 = new Razorpay(options);
    rzp1.open();
});

function enterDataAfterSuccess(response){
    $.ajax({
        method: 'POST',
        url: '<?php echo base_url()?>index.php/Checkout/finalizeThePayment',
        data: {
            userid:"<?php echo $objOrderData->user_id?>",
            websiteid:"<?php echo $objOrderData->website_id?>",
            txn_id:response,
            payment_gross:"<?php echo $objOrderData->final_amount?>",
        },
        success: function(data) {
            window.location.href = "<?php echo base_url().'website-list'?>";
        }
    });
}

</script>
</body>
</html>