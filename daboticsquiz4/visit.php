<!DOCTYPE html>
<html lang="en">
<head>
  <title>Santa Claus For All...Santa Larry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="css/form.css">
  <link rel="shortcut icon" href="images/xamplogo.jpg" type="image/x-icon" width="100%">
  </head>
  <body>
    <section class="container">
      <header>North Pole Visit Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" required />
          <input type="text" placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your region" required />
            <input type="number" placeholder="Enter postal code" required />
          </div>
        </div>
        <button>Submit</button>
      </form>
    </section>
  
  <div id='wrapper'>
  <div class='top'></div>
  <div class='middle'></div>
  <div class='stem'></div>
  <div class='bottom'></div>
</div>
<style>
    /*
  Colors
  Dark Purple: #8186fc
  Light Purple: #e4e6ff
  White: #ffffff
*/

#wrapper{
  position:relative;
  width:60px;
  height:140px;
  margin: 0 auto;
  display: block;
  margin-top:50px;
  
  .top{
    width: 70px;
    height: 45px;
    border: 7px solid black;
  }
  
  .middle{
    width:70px;
    height: 36px;
    border: 7px solid black;
    background-color: red;
    margin-top:-7px;
    border-radius: 100px 100px 0 0;
    -moz-border-radius: 100px 100px 0 0;
    -webkit-border-radius: 100px 100px 0 0;
    transform:rotate(180deg);
  }
  
  .stem{
    width:7px;
    height:72px;
    background-color: black;
    margin-left:32px;
  }
  
  .bottom{
    width:70px;
    height: 24px;
    border: 7px solid black;
    border-radius: 100px 100px 0 0;
    -moz-border-radius: 100px 100px 0 0;
    -webkit-border-radius: 100px 100px 0 0;
    transform:rotate(0deg);
  }
}
    </style>
</body>
</html>

