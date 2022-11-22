<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SHOP - SITE- LOGGED IN</title>
</head>

<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/ce67115981.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="style1.css" type="text/css" />


<header>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <center><h1>MOUNTAIN SHOP</h1></center>
        </div>
    </div>
</div>
</header>

<main>
<div class="container">
    <h3 class="h3">JACKETS </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="koszyk.php">
                        <img class="pic-1" src="img/m1.jpg">
                        <img class="pic-2" src="img/m11.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="https://www.decathlon.it/p/scarpe-montagna-uomo-desert-500-marroni/_/R-p-177374?mc=8492960&utm_source=google&utm_medium=cpc&utm_campaign=Decathlon_Nazionale_Smartshopping_Tutti%20i%20prodotti&accountid=678-616-0708&gclid=EAIaIQobChMIxo_A5YiI8gIVDZ53Ch2A4g74EAQYBCABEgI7VvD_BwE" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">BLACK JACKET</a></h3>
                    <div class="price">$160.00 
                        <span>$200.00</span>
                    </div>
                    <a class="add-to-cart" href="cart2.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="cart2.php">
                        <img class="pic-1" src="img/mx1.jpg">
                        <img class="pic-2" src="img/mx.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">GREEN JACKET</a></h3>
                    <div class="price">$250.00
                        <span>$500.00</span>
                    </div>
                    <a class="add-to-cart" href="cart.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="cart2.php">
                        <img class="pic-1" src="img/m3.jpg">
                        <img class="pic-2" src="img/m33.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">RED JACKET</a></h3>
                    <div class="price">$120.00
                        <span>$240.00</span>
                    </div>
                    <a class="add-to-cart" href="cart2.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="img/m4.jpg">
                        <img class="pic-2" src="img/m44.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">BLUE JACKET</a></h3>
                    <div class="price">$100.00
                        <span>$200.00</span>
                    </div>
                    <a class="add-to-cart" href="cart2.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container">
    <h3 class="h3">BOOTS </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="koszyk.php">
                        <img class="pic-1" src="img/b1.jpg">
                        <img class="pic-2" src="img/b11.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">High-treeking boots</a></h3>
                    <div class="price">$80.00
                        <span>$100.00</span>
                    </div>
                    <a class="add-to-cart" href="cart2.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="cart2.php">
                        <img class="pic-1" src="img/b2.png">
                        <img class="pic-2" src="img/b22.png">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">MOUNTAIN CLIMBER BOOTS</a></h3>
                    <div class="price">$75.00
                        <span>$150.00</span>
                    </div>
                    <a class="add-to-cart" href="cart.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="cart2.php">
                        <img class="pic-1" src="img/b3.jpg">
                        <img class="pic-2" src="img/b33.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">ADVANCEN CLIMBING BOOTS</a></h3>
                    <div class="price">$250.00
                        <span>$500.00</span>
                    </div>
                    <a class="add-to-cart" href="cart2.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="img/b4.png">
                        <img class="pic-2" src="img/b44.png">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">50%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="cart2.php">HIGH-ENERGY</a></h3>
                    <div class="price">$70.00
                        <span>$140.00</span>
                    </div>
                    <a class="add-to-cart" href="cart2.php">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container">
                <div class="row" style="border-bottom: 1px rgb(151,157,163) solid;">
                    <div class="col-md-4" style="padding-left: 3vh;">
                      <h1 class="text-light">Contact with us:</h1>
                        <p>
                         <i class="fas fa-at"></i>  e-mail: ... <br> 
                         <i class="far fa-envelope"></i> ...<br>
                         <i class="fas fa-phone"></i> +48 123 456 123<br>
                         <i class="fas fa-landmark"></i> ...<br>
                         <b>REGON:</b> ...<br>
                         <b>NIP:</b> ...  
                        </p>  
                    </div>
                    <div class="col-md-4 text-center">
                        <p id="footer2">
                         President: : ...  <br>     
                         Vice President: : ... <br>      
                         paymaster : ... <br>
                         <br>
                         Authors:<br>
                         Lukasz Szkatula, Wojciech Kin, Jakub Majer, Bartosz Mendala<br><br>
                        </p>  
                    </div>
                    <div class="col-md-4" id="logo">
                        <img src="img/logo.png">
                    </div>
                </div>
                <div class="row text-center" style="padding-bottom: 0;">
                    <div class="col-md-3">
                <h5 class="text-md-right">Contact with us:</h5>
                
            </div>
            <div id="formularz" class="col-md-6">
                    <fieldset class="form-group">
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="e-mail">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" name="tresc" id="message" placeholder="Description"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-right">
                        <button name="wyslany" onClick="sendMail()" class="btn btn-secondary-outline btn-lg text-dark">Send</button>
                    </fieldset>
            </div>
        
    
                </div>
            </div>
</footer>


</body>
</html>