<?php include_once("../templates/header.php");?>
<link rel="stylesheet" href="../assets/css/payment.css">
    <div class="wrap">
    <div class="payment-field">
      <div class="left">
        <h3>Shipping Address</h3>
        <form action="">
          fullname
          <input type="text" name="" placeholder="Enter name">
          Email
          <input type="text" name="" placeholder="Enter email">
          Address
          <input type="text" name="" placeholder="Enter address">
         <label for="">
          city
          <select name="" id="city">
            <option value="">Kathmandu</option>
            <option value="">Bhaktapur</option>
            <option value="">Lalitpur</option>
            <option value="">pokhara</option>
          </select>
         </label>
        </form>

      </div>
      <div class="right">
        <h3>Payment</h3>
        <form action="">
          Accepted Card
        </form>
        <a href="../payment/thankyou.php">Pay </a>

      </div>
    </div>
        
    </div>   
    
<?php include_once("../templates/footer.php");?>
