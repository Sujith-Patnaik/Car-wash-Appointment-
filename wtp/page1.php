
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
  <title>Home page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      padding: 0;
      margin: 0;
      text-decoration: none;
      list-style: none;
      box-sizing: border-box;
    }
    
    body {
      font-family: montserrat;
      background-image: url("https://www.shutterstock.com/image-photo/manual-car-wash-white-soap-260nw-1830908789.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
      height:200%;
    }
    nav {
      background: #000000;
      height: 80px;
      width: 100%;
    }
    
    label.logo {
      color: white;
      font-size: 35px;
      line-height: 80px;
      padding: 0 100px;
      font-weight: bold;
    }
    
    nav ul {
      float: right;
      margin-right: 20px;
    }
    
    nav ul li {
      display: inline-block;
      line-height: 80px;
      margin: 0 5px;
    }
    
    nav ul li a {
      color: white;
      font-size: 17px;
      padding: 7px 13px;
      border-radius: 3px;
      text-transform: uppercase;
    }
    
    a.active,
    a:hover {
      background: #1b9bff;
      transition: .5s;
    }
    
    .checkbtn {
      font-size: 30px;
      color: white;
      float: right;
      line-height: 80px;
      margin-right: 40px;
      cursor: pointer;
      display: none;
    }
    
    #check {
      display: none;
    }
    
    .container {
      display: flex;
      margin-bottom:40px;
      flex-direction: row;
      justify-content: space-evenly; /* added to create space between cards */
    }
    
    @media (max-width: 952px) {
      label.logo {
        font-size: 30px;
        padding-left: 50px;
      }
      nav ul li a {
        font-size: 16px;
      }
    }
  
    
    section {
      background: url(bg1.jpg) no-repeat;
      background-size: cover;
      height: calc(100vh - 80px);
    }
    
    .card {
      --font-color: #323232;
      --font-color-sub: #666;
      --bg-color: #fff;
      --main-color: #323232;
      --main-focus: #2d8cf0;
      width: 250px;
      height: 400px;
      background: var(--bg-color);
      border: 2px solid var(--main-color);
      box-shadow: 4px 4px var(--main-color);
      border-radius: 5px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      padding: 20px;
      gap: 10px;
      margin-top: 3%;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
    .card:last-child {
      margin-right: 10%; /* Adjusted margin for the last card */
    }
    
    .card-img {
      transition: all 0.5s;
      display: flex;
      margin-bottom: 40px;
      justify-content: center;
    }
    
    .card-img .img {
      width: 100px;
      height: 100px;
      border-top-left-radius: 80px 50px;
      border-top-right-radius: 80px 50px;
      border: 2px solid black;
      background-color: #228b22;
      background-image: linear-gradient(to top, transparent 10px, rgba(0, 0, 0, 0.3) 10px, rgba(0, 0, 0, 0.3) 13px, transparent 13px);
    }
    
    .card-title {
      font-size: 20px;
      font-weight: 500;
      text-align: center;
      color: var(--font-color);
    }
    
    .card-subtitle {
      font-size: 14px;
      font-weight: 400;
      color: var(--font-color-sub);
    }
    
    .card-divider {
      width: 100%;
      border: 1px solid var(--main-color);
      border-radius: 50px;
    }
    
    .card-footer {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    
    .card-price {
      font-size: 20px;
      font-weight: 500;
      color: var(--font-color);
    }
    
    .card-price span {
      font-size: 20px;
      font-weight: 500;
      color: var(--font-color-sub);
    }
    
    .card-btn {
      height: 35px;
      background: var(--bg-color);
      border: 2px solid var(--main-color);
      border-radius: 5px;
      padding: 0 15px;
      transition: all 0.3s;
    }
    
    .card-btn svg {
      width: 100%;
      height: 100%;
      fill: var(--main-color);
      transition: all 0.3s;
    }
    
    .card-img:hover {
      transform: translateY(-3px);
    }
    
    .card-btn:hover {
      border: 2px solid var(--main-focus);
    }
    
    .card-btn:hover svg {
      fill: var(--main-focus);
    }
    
    .card-btn:active {
      transform: translateY(3px);
    }
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
  background:#000000 ;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}
  </style>
</head>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">EcoSplash</label>
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="#">My Account</a></li>
    </ul>
  </nav>
  <main class="mid">
    <div class="container">
      <div class="card">
        <div class="card-img"><img style="height:100px" src="https://logowik.com/content/uploads/images/car-wash6885.logowik.com.webp"></div>
        <div class="card-title"><b>Silver</b></div>
        <div class="card-subtitle">Silver includes Hand wash, exterior surface cleaning, hand or air drying, Exterior cleaning only, removes surface dirt and grime.</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>₹</span> 490</div>
          <button onclick="myFunction1()"class="card-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="card-img"><img style="height:100px" src="https://logowik.com/content/uploads/images/car-wash6885.logowik.com.webp"></div>
        <div class="card-title"><b>Gold</b></div>
        <div class="card-subtitle">Gold incudes Exterior hand wash with premium agents, interior vacuuming, window cleaning, tire dressing..</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>₹</span> 790</div>
          <button onclick="myFunction2()"class="card-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
          </button>
        </div>
      </div>
      <div class="card"> <!-- Corrected class for the third card -->
        <div class="card-img"><img style="height:100px" src="https://logowik.com/content/uploads/images/car-wash6885.logowik.com.webp"></div>
        <div class="card-title"><b>Gold plus</b></div>
        <div class="card-subtitle">Gold plus Premium exterior wash with waxing and polishing, interior vacuuming, window cleaning, tire dressing, full interior detailing..</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>₹</span> 1090</div>
          <button onclick="myFunction3()" class="card-btn" > 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
          </button>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Eco<span>Splash</span></h3>

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">Blog</a>
        
          <a href="#">Pricing</a>
        
          <a href="about.php">About</a>
          
          <a href="#">Faq</a>
          
          <a href="contact.php">Contact</a>
        </p>

        <p class="footer-company-name">Company Name © 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Inorbit mall</span> Akkayapalem, Visakhapatnam</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91.9948474641</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          This compamny was started in the year 2024 by Sujith and Bobby Yadav.We give the best service and also take special car of your car as ours.There is also home pickup and drop available as part of our service.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  

<script>
  // Function to display SweetAlert for silver package
  function myFunction1() {
    swal({
      title: "Silver Package",
      text: "Press OK to continue",
      icon: "success",
    }).then(() => {
      // Redirect to another page after 2 seconds
   
        const pack = "Silver Package"
        const price="490"
        var url = 'spayment.php?pack=' + encodeURIComponent(pack) +'&price='+ encodeURIComponent(price);
       
        window.location.href = url;
      
    });
  }

  // Function to display SweetAlert for gold package
  function myFunction2() {
    swal({
      title: "Gold Package",
      text: "Press OK to continue",
      icon: "success",
    }).then(() => {
      // Redirect to another page after 2 seconds
      const pack = "Gold Package"
      const price="790"
        var url = 'spayment.php?pack=' + encodeURIComponent(pack)+'&price='+ encodeURIComponent(price);
        window.location.href = url;
    });
  }

  // Function to display SweetAlert for gold plus package
  function myFunction3() {
    swal({
      title: "Gold Plus Package",
      text: "Press OK to continue",
      icon: "success",
    }).then(() => {
      // Redirect to another page after 2 seconds
      const pack = "Gold PLUS Package"
      const price="1090"
        var url = 'spayment.php?pack=' + encodeURIComponent(pack)+'&price='+ encodeURIComponent(price);
        window.location.href = url;
    });
  }
</script>

</body>

</html>
