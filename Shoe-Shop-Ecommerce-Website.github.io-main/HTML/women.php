<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOE SHOPPING | Ecommerce</title>
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="./CSS/all.css">
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>
<body>
 <!--Nav bar-->   
<section>
  <div class="header">
    <div class="container">  
    <div class="navbar">
        <div class="logo">
           <h2>Shoe Shop</h2>
        </div>
        <nav class="nav">
            <ul id="MenuItems">
                <li><a href="">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Account</a></li>
            </ul>
        </nav>
        <img src="./images/Front/cart.png" alt="" width="30px" height="30px">
        <img src="./images/Front/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
    
</section>

<!-- Slideshow container -->
<section>

    <br><br>
    
    <div class="slideshow-container">
  
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./images/discount.png" style="width:100%">
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./images/discount1.png" style="width:100%">
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="./images/discount2.png" style="width:100%">
      
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles 
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  -->
</section>

<!--Featured products and Latest Product-->
<section>
    <div class="small-container1"><br><br>
        <h2 class="title">Featured Products</h2>
        <div class="row">
    
            <div class="col-7">
                <img src="./images/Front/Boots.jpg" alt="">
                <h4>BOOTS</h4>
            </div>
    
            <div class="col-7">
              <img src="./images/Front/sandals.jpg" alt="">
              <h4>SANDALS</h4>
            </div>
    
            <div class="col-7">
                 <img src="./images/Front/snekars.jpg" alt="">
                 <h4>SNEAKERS</h4>
            </div>
    
            <div class="col-7">
                 <img src="./images/Front/office.jpg" alt="">
                 <h4>OFFICE</h4>
            </div>
    
           <div class="col-7">
                 <img src="./images/Front/sports.jpg" alt="">
                 <h4>SPORTS</h4>
                 
            </div>
        </div>
    
</section>
    

<!--------OfferZone------->
<section>
    <div class="small-container"><br><br>
      <h2 class="title">Deals of the Day</h2>
      <div class="row">
    
          <div class="col-4">
              <img src="./images/Deals/1buy.jpg" alt="">
              <h3>Flat 50% Off</h3>
              <h3>On your first Buy!</h3>
              <h5> - </h5>
              
          </div>
    
          <div class="col-4">
               <img src="./images/Deals/2buy.jpg" alt="">
               <h3>Extra 10% Off</h3>
               <h3>On Any 2 Shoes</h3>
               <h5>CODE : 232902S</h5>
          </div>
    
          <div class="col-4">
               <img src="./images/Deals/3buy.jpg" alt="">
               <h3>FLAT  ₹150 Off</h3>
               <h3>Min. Order ₹1999</h3>
               <h5>CODE : 150OFF</h5>
          </div>
    
         <div class="col-4">
               <img src="./images/Deals/4buy.jpg" alt="">
               <h3>Min. 30% Off</h3>
               <h3>Sports & Casual</h3>
               <h5>  -   </h5>
          </div>
      </div>
</section>

<!--products-->
<div class="small-container">
    <div class="row row-2">
        <h2 class="title">Products</h2>
      
    </div>
</div>

<section>
  <div class="small-container1">
    <div class="row">
        <div class="col-4">
         <a href="./cart1.html" target="_blank"><img src="./images/cart/pro2/full.jpeg" alt=""></a> 
          <h4>Metcon Sport  Gym Shoes For Men  (Blue)</h4>
          <div class="rating">
            <p>★ ★ ★ ★ ★</p>  
          </div>
          <p>₹5,197</p>
        </div>

        <div class="col-4">
            <a href="./cart2.html" target="_blank"><img src="./images/cart/pro3/full.jpeg" alt=""></a>
           <h4>Nike DOMAIN 2 Cricket Shoes For Men  (White)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹3,297</p>
         </div>
        <div class="col-4">
            <a href="./cart4.html" target="_blank"> <img src="./images/cart/pro4/full.jpeg" alt=""></a>
          <h4>Nike TODOS Running Shoes For Men  (White)</h4>
          <div class="rating">
            <p>★ ★ ★ ★ ★</p>  
          </div>
          <p>₹2,717</p>
        </div>

        <div class="col-4">
            <a href="./cart.html" target="_blank"><img src="./images/cart/pro1/full.jpeg" alt=""></a>
           <h4>Nike Revolution 5 Running Shoes For Men  (Black)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹2,513</p>
         </div>

        <div class="col-4">
         <a href="" target=""><img src="./images/cart/pro6/full.jpeg" alt=""></a> 
          <h4>Puma Slides</h4>
          <div class="rating">
            <p>★ ★ ★ ★ ★</p>  
          </div>
          <p>₹1,329</p>
        </div>

        <div class="col-4">
            <a href="'"><img src="./images/cart/pro7/full.jpeg" alt=""></a>
           <h4>NFila Pompei Flip Flops</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹575</p>
         </div>
        <div class="col-4">
            <a href=""> <img src="./images/cart/pro8/full.jpeg" alt=""></a>
          <h4>Bata Slides<h4>
          <div class="rating">
            <p>★ ★ ★ ★ ★</p>  
          </div>
          <p>₹399</p>
        </div>

        <div class="col-4">
            <a href="./cart.html" target="_blank"><img src="./images/cart/pro9/full.jpeg" alt=""></a>
           <h4>Puma Flip Flops</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ☆</p>  
           </div>
           <p>₹714</p>
         </div>

        <div class="col-4">
            <a href=""><img src="./images/cart/pro12/full.jpeg" alt=""></a>
           <h4>Bata Men's Formal Slip On For Men  (Black)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹799</p>
         </div>

        <div class="col-4">
            <a href=""><img src="./images/cart/pro11/full.jpeg" alt=""></a>
           <h4>Bata Men's Formal Lace Up For Men  (Black)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹799</p>
         </div>

        <div class="col-4">
            <a href=""><img src="./images/cart/pro13/full.jpeg" alt=""></a>
           <h4>Bata Declan Lace Up For Men  (Tan)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹1,186</p>
         </div>

        <div class="col-4">
            <a href=""><img src="./images/cart/pro14/full.jpeg" alt=""></a>
           <h4>Bata Corporate Dress Shoes Lace Up For Men  (Black)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹797</p>
         </div>

        <div class="col-4">
            <a href=""><img src="./images/cart/pro16/full.jpeg" alt=""></a>
           <h4>Fila REBOUND-4 Casuals For Men  (Blue, White, Red)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹1,365</p>
         </div>

        <div class="col-4">
            <a href=""><img src="./images/cart/pro15/full.jpeg" alt=""></a>
           <h4>New Balance 
            Training & Gym Shoes For Men  (White, Black)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹3,417</p>
         </div>
      
         <div class="col-4">
            <a href=""><img src="./images/cart/pro17/full.jpeg" alt=""></a>
           <h4>Skechers GO  Running Shoes For Men  (Grey)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹2,999</p>
         </div>

         <div class="col-4">
            <a href=""><img src="./images/cart/pro18/full.jpeg" alt=""></a>
           <h4>Asics TARTHEREDGE Running Shoes For Men  (Yellow)</h4>
           <div class="rating">
             <p>★ ★ ★ ★ ★</p>  
           </div>
           <p>₹5,759</p>
         </div>


        </div>
        </div>
        
</section>



 <!--  Footer-->
<section>  
   
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="foter-col-1">
                    <h3>Download our App</h3>
                    <p>Dwnload App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                       <img src="./images/Front/play-store.png">
                       <img src="./images/Front/app-store.png">
                    </div>
                </div>
                <div class="foter-col-2">
                   <div class="logo">
                        <h2>SHOE SHOP</h2> 
                    </div><br>
               
                    <p>Our Purpose is To Sunstainably Make the pleasure and <br>Befefites of shoes shopping Accessible to the Many.</p>
                </div>
                <div class="foter-col-3">
                   <h3>Useful Links</h3>
                   <ul>
                       <li>Cupons</li>
                       <li>Blog Post</li>
                       <li>Return Policy</li>
                       <li>Join Us</li>
                   </ul>
               </div>
                <div class="foter-col-3">
                   <h3>Follow Us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Instagram</li>
                       <li>Twitter</li>
                       <li>You tube</li>
                   </ul>
               </div>
            </div>
            <hr>
            <p class="copyright"> Copyright ©2020 All rights reserved | made by <a href="www.facebook.come/kalpanawalhe" target="_blank"> Kalpana Walhe</a></p>
          
        </div>
    </div>
</section>


<!--  js for toggle -->
<script>
  var MenuItems = document.getElementById("MenuItems");
  MenuItems.style.maxHeight = "0px";

  function menutoggle(){
      if(MenuItems.style.maxHeight == "0px")
      {
         MenuItems.style.maxHeight = "200px";
      }
      else
      {
         MenuItems.style.maxHeight = "0px";
      }
  }
</script>


<!--js for product gallary-->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    
    SmallImg[0].onclick = function()
    {
      ProductImg.src = SmallImg[0].src;
    }

    SmallImg[1].onclick = function()
    {
      ProductImg.src = SmallImg[1].src;
    }

    SmallImg[2].onclick = function()
    {
      ProductImg.src = SmallImg[2].src;
    }

    SmallImg[3].onclick = function()
    {
      ProductImg.src = SmallImg[3].src;
    }

</script>

<!-- slider-->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
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

<!-- Jquery library file--> 
<script src="./JS/Jquery3.5.1.min.js"></script>

</body>
</html>