<!DOCTYPE html>
<?php
session_start();
	require_once 'login.php';
	  $conn = new mysqli($hn, $un, $pw, $db);
	  if ($conn->connect_error) die("Unable to connect to database");
//include("function.php");
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amazon.com: Online Shopping for Electronics, Apparel, Computers, Books, DVDs &amp; more</title>
<link rel="stylesheet" href="css/style1.css"/>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  padding: 0 0 0 0;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 50px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.Explore_Amazon_Basics{
width:300px;
display:grid;
background-color:#f2f6f5;
grid-template-columns:auto repeat(2,1fr);
grid-row-gap:;
margin-bottom:0em;
grid-template-areas:
"ba ba"
"h b"
"p1 p2"
"p c"
"p3 p4"
"a a"
}
.card{
  width:100%;
  display: grid;
  background-color: inherit;
  grid-column-gap: 2%;
  grid-template-columns: repeat(4,1fr);
  margin-top:1em;
  grid-template-areas:
  "w E the col"
}
#Home{
  grid-area:h;
}
#Blue{
  grid-area:b;
}
#Pets{
  grid-area:p;
}
#Computer{
  grid-area:c;
}
#p1{
  grid-area:p1;
}
#p2{
  grid-area:p2;
}
#p3{
  grid-area:p3;
}
#p4{
  grid-area:p4;
}
.Welcome{
  grid-area:w
}
.Explore_Amazon_Basics{
  grid-area:E
}
.women_img{
  grid-area: the
}
.aa{
  grid-area: a
}
.col{
	grid-area:col
}
@media screen and (max-width: 650px) {
  .card{
    background-color: white;
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap:1em;
    grid-template-areas:
    "w"
    "E"
    "the"
    "col";
}
}
</style>
  </head>
  <body>
	  <a id="banner" href="#"></a>

	  <header>
	    <a id="nav-top"></a>

	    <div id="nav-belt">
	      <div class="nav-left">
	        <div id="nav-logo">
	          <a href="#" class="nav-logo-link"></a>
	          <a href="#" class="nav-logo-tagline">Try Prime</a>
	        </div>
	      </div>
	      <div class="nav-right">
	        <div id="nav-holiday">
	          <a href="#"></a>
	        </div>
	      </div>
	      <div class="nav-fill">
	        <div id="nav-search">
	          <form>
	            <div class="nav-left">
	              <span class="nav-search-label">All</span>
	              <i class="fa fa-caret-down" aria-hidden="true"></i>
	              <select id="nav-search-select">
	                <option selected="selected" value="aps">All Departments</option>
	                <option value="alexa-skills">Alexa Skills</option>
	                <option value="instant-video">Amazon Video</option>
	                <option value="warehouse-deals">Amazon Warehouse Deals</option>
	                <option value="appliances">Appliances</option>
	                <option value="mobile-apps">Apps &amp; Games</option>
	                <option value="arts-crafts">Arts, Crafts &amp; Sewing</option>
	                <option value="automotive">Automotive Parts &amp; Accessories</option>
	                <option value="baby-products">Baby</option>
	                <option value="beauty">Beauty &amp; Personal Care</option>
	                <option value="stripbooks">Books</option>
	                <option value="popular">CDs &amp; Vinyl</option>
	                <option value="mobile">Cell Phones &amp; Accessories</option>
	                <option value="fashion">Clothing, Shoes &amp; Jewelry</option>
	                <option value="fashion-womens">&nbsp;&nbsp;&nbsp;Women</option>
	                <option value="fashion-mens">&nbsp;&nbsp;&nbsp;Men</option>
	                <option value="fashion-girls">&nbsp;&nbsp;&nbsp;Girls</option>
	                <option value="fashion-boys">&nbsp;&nbsp;&nbsp;Boys</option>
	                <option value="fashion-baby">&nbsp;&nbsp;&nbsp;Baby</option>
	                <option value="collectibles">Collectibles &amp; Fine Art</option>
	                <option value="computers">Computers</option>
	                <option value="courses">Courses</option>
	                <option value="financial">Credit and Payment Cards</option>
	                <option value="digital-music">Digital Music</option>
	                <option value="electronics">Electronics</option>
	                <option value="gift-cards">Gift Cards</option>
	                <option value="grocery">Grocery &amp; Gourmet Food</option>
	                <option value="handmade">Handmade</option>
	                <option value="hpc">Health, Household &amp; Baby Care</option>
	                <option value="local-services">Home &amp; Business Services</option>
	                <option value="garden">Home &amp; Kitchen</option>
	                <option value="industrial">Industrial &amp; Scientific</option>
	                <option value="digital-text">Kindle Store</option>
	                <option value="fashion-luggage">Luggage &amp; Travel Gear</option>
	                <option value="luxury-beauty">Luxury Beauty</option>
	                <option value="magazines">Magazine Subscriptions</option>
	                <option value="movies-tv">Movies &amp; TV</option>
	                <option value="mi">Musical Instruments</option>
	                <option value="office-products">Office Products</option>
	                <option value="lawngarden">Patio, Lawn &amp; Garden</option>
	                <option value="pets">Pet Supplies</option>
	                <option value="prime-exclusive">Prime Exclusive</option>
	                <option value="pantry">Prime Pantry</option>
	                <option value="software">Software</option>
	                <option value="sporting">Sports &amp; Outdoors</option>
	                <option value="tools">Tools &amp; Home Improvement</option>
	                <option value="toys-and-games">Toys &amp; Games</option>
	                <option value="vehicles">Vehicles</option>
	                <option value="videogames">Video Games</option>
	                <option value="wine">Wine</option>
	              </select>
	            </div>
	            <div class="nav-right">
	              <i class="fa fa-search" aria-hidden="true"></i>
	              <input type="submit">
	            </div>
	            <div class="nav-fill">
	              <input type="text" autocomplete="off">
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>

	    <nav id="nav-main">
	      <div class="nav-left">
	        <div class="nav-shop">
	          <a class="nav-a" href="#">
	            Departments
	            <i class="fa fa-caret-down" aria-hidden="true"></i>
	          </a>
	        </div>
	      </div>
	      <div class="nav-right">
	        <a class="nav-a" href="#">
	          <span>EN</span>
	          <i class="fa fa-globe" aria-hidden="true"></i>
	          <i class="fa fa-caret-down" aria-hidden="true"></i>
	        </a>

	        <a class="nav-a" href="#">
	          <span>Hello. Sign in</span>
	          Accounts &amp; Lists
	          <i class="fa fa-caret-down" aria-hidden="true"></i>
	        </a>

	        <a class="nav-a" href="#">
	          Orders
	        </a>

	        <a class="nav-a" href="logout.php">
	          Logout
	          <i class="fa fa-caret-down" aria-hidden="true"></i>
	        </a>

	        <a class="nav-a cart" href="cart.php">
	          <span>
<?php
$user1=$_SESSION['user_email'];
  $query="select * from cart where user_email='$user1'";
  $result = $conn->query($query);
  $row1 = $result->num_rows;
  echo "$row1";
  //echo"<script> window.open('cart.php','_self')<script/>";
  
?>
			  </span>
	          Cart
	        </a>
	      </div>
	      <div class="nav-fill">
	        <ul>
	          <li><a href="#">Your Amazon.com</a></li>
	          <li><a href="#">Today's Deals</a></li>
	          <li><a href="#">Gift Cards &amp; Registry</a></li>
	          <li><a href="#">Sell</a></li>
	          <li><a href="#">Help</a></li>
	        </ul>
	      </div>
	    </nav>
	  </header>
	  <br>

	  <div class="slideshow-container">

	  <div class="mySlides fade">
	    <img src="slide_1.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
	    <img src="slide_2.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
	    <img src="slide_3.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
	    <img src="slide_4.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
	    <img src="slide_5.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
	    <img src="slide_6.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
	    <img src="slide_7.jpg" style="width:100%">
	  </div>

	  <a class="prev" onclick="plusSlides(-1)">&#10216;</a>
	  <a class="next" onclick="plusSlides(1)">&#10217;</a>

	  </div>

<br><br>
    <div class="card">
      <div class="Welcome" Style="background-color:#f2f6f5; width:300px">
        <h2 align="center">Welcome</h2>
        <p align="center">Sign in for best experience</p>
        <p align="center">
        <a href="sigin.html"><img src="sis.png" style="width:90%"></a></p>
        <!--<button type="button" Style="width:85%;margin-left:2em;height:30px;background-color:#f0c14b;border-radius:6px;font:arial;display:inline block;text-shadow:none;">Sign in securly</button>-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p align="center">New to Amazon?<a href="dsi.html">Start here</a></p>

      </div>
      <div class="Explore_Amazon_Basics" Style="width:93%,height:70%">
        <p class="Basic"> Explore AmazonBasics</p>
        <img id="Home" Style="width:140px;" src="img/product_1.jpg">
        <p id="p1">Home</p>
        <img id="Blue" Style="width:140px;" src="img/product_2.jpg">
        <p id="p2">Bluetooth</p>
        <img id="Pets" Style="width:140px;" src="img/product_3.jpg">
        <p id="p3">Pets</p>
        <img id="Computer" Style="width:140px;" src="img/product_4.jpg">
        <p id="p4">Computer</p>
        <a class="aa" href="product.php"> Shop all AmazonBasics</a>
      </div>
    <div class="women_img">
      <p class="The_dress_shop" Style="background-color:#f2f6f5;margin-bottom:0em;margin-top:0em;width:93%;font-size:13px;heigth:10px;">The dress shop</p>
      <img id="dress" src="img/dress.png" Style="height:70%; width:93%;">
      <br>
      <a href="dress.php" Style="width:93%;background-color:#f2f6f5">Shop women's dresses</a>
    </div>
    <div class="col" id="deal-day"Style="background-color:#f2f6f5;">
      <h2>Deal of the day</h2>
      <h3>$163.99</h3>
      <small>List: <s>$425.00</s> (47% off)</small>
      <a href="#"><img src="img/product_6.jpg" alt="Product 6" width=140px></a>
      <div class="footer">
        <a href="#">Shop all deals</a>
      </div>
    </div>
  </div>
	  <br><br><br>
	    <footer>
	      <div class="top text-center">
	        <a href="#nav-top">Back to top</a>
	      </div>

	      <div class="middle">
	        <div class="center">
	          <ul>
	            <li><h3>Get to Know Us</h3></li>
	            <li><a href="#">Careers</a></li>
	            <li><a href="#">About Amazon</a></li>
	            <li><a href="#">Investor Relations</a></li>
	            <li><a href="#">Amazon Devices</a></li>
	          </ul>
	          <ul>
	            <li><h3>Make Money with Us</h3></li>
	            <li><a href="#">Sell on Amazon</a></li>
	            <li><a href="#">Sell Your Services on Amazon</a></li>
	            <li><a href="#">Sell on Amazon Business</a></li>
	            <li><a href="#">Sell Your Apps on Amazon</a></li>
	            <li><a href="#">Become an Affiliate</a></li>
	            <li><a href="#">Advertise Your Products</a></li>
	            <li><a href="#">Self-Publish with Us</a></li>
	            <li><a href="#">Become an Amazon Vendor</a></li>
	            <li><a href="#">Sell Your Subscription on Amazon</a></li>
	            <li><a href="#">› See all</a></li>
	          </ul>
	          <ul>
	            <li><h3>Amazon Payment Products</h3></li>
	            <li><a href="#">Amazon Rewards Visa Signature Cards</a></li>
	            <li><a href="#">Amazon.com Store Card</a></li>
	            <li><a href="#">Amazon.com Corporate Credit Line</a></li>
	            <li><a href="#">Shop with Points</a></li>
	            <li><a href="#">Credit Card Marketplace</a></li>
	            <li><a href="#">Reload Your Balance</a></li>
	            <li><a href="#">Amazon Currency Converter</a></li>
	          </ul>
	          <ul>
	            <li><h3>Let Us Help You</h3></li>
	            <li><a href="#">Your Account</a></li>
	            <li><a href="#">Your Orders</a></li>
	            <li><a href="#">Shipping Rates &amp; Policies</a></li>
	            <li><a href="#">Amazon Prime</a></li>
	            <li><a href="#">Returns &amp; Replacements</a></li>
	            <li><a href="#">Manage Your Content and Devices</a></li>
	            <li><a href="#">Amazon Assistant</a></li>
	            <li><a href="#">Help</a></li>
	          </ul>
	        </div>

	        <ul class="copy text-center">
	          <li><a href="#" class="logo"></a></li>
	          <li><a href="#" class="select"><i class="fa fa-globe" aria-hidden="true"></i> English</a></li>
	          <li><a href="#" class="select"><i class="flag-icon-us"></i>United States</a></li>
	        </ul>
	      </div>

	      <div class="bottom">
	        <div class="center">
	          <ul>
	            <li><a href="#">Amazon Music<br/><span>Stream millions<br> of songs</span></a></li>
	            <li><a href="#">AmazonFresh<br/><span>Groceries &amp; More<br> Right To Your Door</span></a></li>
	            <li><a href="#">Amazon Web Services<br/><span>Scalable Cloud<br> Computing Services</span></a></li>
	            <li><a href="#">East Dane<br/><span>Designer Men's<br> Fashion</span></a></li>
	            <li><a href="#">Prime Now<br/><span>FREE 2-Hour Delivery<br> on Everyday Items</span></a></li>
	          </ul>

	          <ul>
	            <li><a href="#">Amazon Drive<br/><span>Cloud storage<br> from Amazon</span></a></li>
	            <li><a href="#">AmazonGlobal<br/><span>Ship Orders<br> Internationally</span></a></li>
	            <li><a href="#">Audible<br/><span>Download<br> Audio Books</span></a></li>
	            <li><a href="#">Fabric<br/><span>Sewing, Quilting<br> &amp; Knitting</span></a></li>
	            <li><a href="#">Prime Photos<br/><span>Unlimited Photo Storage<br> Free With Prime</span></a></li>
	            <li><a href="#">Woot!<br/><span>Deals and <br> Shenanigans</span></a></li>
	          </ul>

	          <ul>
	            <li><a href="#">6pm<br/><span>Score deals<br> on fashion brands</span></a></li>
	            <li><a href="#">Home Services<br/><span>Handpicked Pros<br> Happiness Guarantee</span></a></li>
	            <li><a href="#">Book Depository<br/><span>Books With Free<br> Delivery Worldwide</span></a></li>
	            <li><a href="#">Goodreads<br/><span>Book reviews<br> &amp; recommendations</span></a></li>
	            <li><a href="#">Shopbop<br/><span>Designer<br> Fashion Brands</span></a></li>
	            <li><a href="#">Zappos<br/><span>Shoes &amp;<br> Clothing</span></a></li>
	          </ul>

	          <ul>
	            <li><a href="#">AbeBooks<br/><span>Books, art<br> &amp; collectibles</span></a></li>
	            <li><a href="#">Amazon Inspire<br/><span>Free Digital Educational<br>  Resources</span></a></li>
	            <li><a href="#">Box Office Mojo<br/><span>Find Movie<br> Box Office Data</span></a></li>
	            <li><a href="#">IMDb<br/><span>Movies, TV<br> &amp; Celebrities</span></a></li>
	            <li><a href="#">TenMarks.com<br/><span>Math Activities<br> for Kids &amp; Schools</span></a></li>
	            <li><a href="#">Souq.com<br/><span>Shop Online in<br> the Middle East</span></a></li>
	          </ul>

	          <ul>
	            <li><a href="#">ACX <br/><span>Audiobook Publishing<br> Made Easy</span></a></li>
	            <li><a href="#">Amazon Rapids<br/><span>Fun stories for<br>  kids on the go</span></a></li>
	            <li><a href="#">ComiXology<br/><span>Thousands of<br> Digital Comics</span></a></li>
	            <li><a href="#">IMDbPro<br/><span>Get Info Entertainment<br> Professionals Need</span></a></li>
	            <li><a href="#">Warehouse Deals<br/><span>Open-Box<br> Discounts</span></a></li>
	            <li><a href="#">Subscribe with Amazon<br/><span>Discover &amp; try<br> subscription services</span></a></li>
	          </ul>

	          <ul>
	            <li><a href="#">Alexa<br/><span>Actionable Analytics<br> for the Web</span></a></li>
	            <li><a href="#">Amazon Restaurants<br/><span>Food delivery from<br> local restaurants</span></a></li>
	            <li><a href="#">CreateSpace<br/><span>Indie Print Publishing<br> Made Easy</span></a></li>
	            <li><a href="#">Junglee.com<br/><span>Shop Online<br> in India</span></a></li>
	            <li><a href="#">Whispercast<br/><span>Discover &amp; Distribute<br> Digital Content</span></a></li>
	          </ul>

	          <ul>
	            <li><a href="#">Amazon Business<br/><span>Everything For<br> Your Business</span></a></li>
	            <li><a href="#">Amazon Video Direct<br/><span>Video Distribution<br> Made Easy</span></a></li>
	            <li><a href="#">DPReview<br/><span>Digital<br> Photography</span></a></li>
	            <li><a href="#">Kindle Direct Publishing<br/><span>Indie Digital Publishing<br> Made Easy</span></a></li>
	            <li><a href="#">Withoutabox<br/><span>Submit to<br> Film Festivals</span></a></li>
	          </ul>

	          <ul class="copy text-center">
	            <li><a href="#">Conditions of Use</a></li>
	            <li><a href="#">Privacy Notice</a></li>
	            <li><a href="#">Interest-Based Ads</a></li>
	            <li>&copy; 1996-2017, Amazon.com, Inc. or its affiliates</li>
	          </ul>
	        </div>
	      </div>
	    </footer>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

	  </body>
	  </html>
