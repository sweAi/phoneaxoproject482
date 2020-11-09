<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="indexloged.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user" ></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Mohammed A. alqahtani"required>
            <label for="email" require><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Mohammed@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="123 N. 208th Street" required>
            <label for="city"><i class="fa fa-institution"></i> Country</label>
            <input type="text" id="city" name="city" placeholder="Saudi arabia"required>

            <div class="row">
              <div class="col-50">
                <label for="state">city</label>
                <input type="text" id="state" name="state" placeholder="Riyadh"required>
              </div>
              <div class="col-50">
                <label for="zip">Zip code</label>
                <input type="text" id="zip" name="zip" placeholder="10001"required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Mohammed A alqahtani" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
       
  


         <div  id="submitButton" onclick="alert('thank you for paying!');"><input  type="submit" value="Continue to checkout" class="btn" required>

</div>
      </form>
    
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>3</b>
        </span>
      </h4>
      <p><a href="#">IPHONE 11 SCREEN PROTECTOR</a> <span class="price">199.98SR</span></p>
      <p><a href="#">HAWAWI MATE 20 SCREEN PROTECTOR</a> <span class="price">199.99SR</span></p>
      <p><a href="#">SAMSUNG NOTE 10 SCREEN PROTECTOR</a> <span class="price">99.99SR</span></p>
     
      <hr>
      <p>Total <span class="price" style="color:black"><b>499.96SR</b></span></p>
    </div>
  </div>
</div>
</html>