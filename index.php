<?php include("nav.php"); ?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="shortcut icon" href="data:image/webp;base64,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" type="image/x-icon">
    <title>Hello, world!</title>
  </head>
  <body>
    
    <div id="home">
      
  
      <header>
            
       <div class="container header-container">
         <div class="row  align-items-center">
           <div style="margin-top: 3rem;"  class="col-md-6">
             <h2 class="main-heading">Your <span class="banking">Banking</span> Partner For Easy <span class="money">Money Transfer</span>.</h2>
             <p class="paragraph">Send and receive money in a jiffy. Instantly pay for your shopping from a smartphone. Easily settle utility and credit card bills.</p>
           </div>
           <div style="margin-top: 2rem;"  class="col-md-6" data-aos="fade-down-right">
             <img class="img-fluid" src="https://manometcurrent.com/wp-content/uploads/2021/06/Money-Remittance-Services.png" alt="image" srcset="">
           </div>
         </div>
       </div>
       
       
            
  
      </header>
    </div>

    <section>
      <div class="container">
        <div class="row">
           <div class="col-md-6" data-aos="fade-up-left">
              <img class="img-fluid second-image" src="https://moneymint.com/wp-content/uploads/2020/12/20-Best-Money-Transfer-Apps-or-Wallets-In-India.jpg" alt="image" srcset="">
           </div>
          <div class="col-md-6 phone" data-aos="fade-left"  data-aos-duration="3000">
              <h3 class="main-heading secondary-heading">What is online money Transfer ?</h3>
            <p class="paragraph secondary-paragraph">Online money transfers have now become a medium to save oneself from any cash shortage related problems. A long list of requirements and legal formalities is no longer needed since the money can be transferred online through a digital wallet without any hassle. Hence, transferring money online has become easier than before with <a _ngcontent-kfe-c5="" href="https://mobikwik.com/">MobiKwik </a>. Just make instant money transfer with the 'Wallet to Bank' feature on MobiKwik, from credit cards to any bank account through MobiKwik's digital wallet. Now, transfer money from credit cards of ICICI, HDFC, Citibank, SBI, and more to any bank account, and the amount will reflect in the bank accounts instantly. </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h3 class="main-heading secondary-heading">How online money transfer benefits you?</h3>
            <p class="paragraph secondary-paragraph">Everyone wants their money transfers to be quick and easy. Hence, to save on time and effort with the online money transfers MobiKwik ‘Wallet to Bank’ feature is the best solution. Here are some benefits to consider to do online fund transfer: </p>
            <ul _ngcontent-feh-c5="" class="pleft pad30"><li _ngcontent-feh-c5=""><strong _ngcontent-feh-c5="">Transfer to any bank account: </strong>MobiKwik's digital wallet makes the money transfers hassle-free, just transfer money from the credit cards of any bank to any bank account. For instance, Transfer money from your HSBC credit card by adding money to your wallet and transfer the amount added to the ICICI bank account.</li><li _ngcontent-feh-c5=""><strong _ngcontent-feh-c5="">Swift Transactions: </strong> For the quick and simple procedure of transferring money, choose MobiKwik wallet. Ensuring smooth money transfer services. With the online <a _ngcontent-feh-c5="" href="https://play.google.com/store/apps/details?id=com.mobikwik_new&amp;hl=en_IN&amp;gl=US"> money transfer app </a>transactions are simplified as compared to bank services.</li><li _ngcontent-feh-c5=""><strong _ngcontent-feh-c5="">Minimum Charges - </strong>With bare minimum charges the money can be transferred from credit cards to any bank account instantly with the MobiKwik app </li><li _ngcontent-feh-c5=""><strong _ngcontent-feh-c5="">KYC required: </strong>To maintain end to end secure transactions, KYC is mandatory. With MobiKwik it becomes easy to do KYC within minutes. It is done quickly on the app itself and the user need not go through any physical verification.</li></ul>
          </div>
        </div>
        
      </div>
    </section>

    <footer>

	     	<!-- Social media icons line Start -->

					<div class="sm-handle" >

									<a href="https://www.instagram.com/hukumnarware/" class="sm-button">

													<i class="fab fa-instagram">	</i>

									</a>

									<a href="https://www.linkedin.com/in/hukumchand-narwre-a2556820b/" class="sm-button">

                  <i class="fab fa-linkedin"></i>

									</a>

									<a href="" class="sm-button">

													<i class="fab fa-facebook-f">	</i>

									</a>

								

									<a href="https://github.com/Hukumchand-Narwre?tab=repositories" class="sm-button">

													<i class="fab fa-github">	</i>

									</a>

					</div>

							<!-- Social media icons line Start -->

					

						<div class="menu">

							<h4 class="menu-title">Other Pages</h4>

							<a href="sendmoney.php" class="other-links">Send Money</a>

							<a href="coustomers.php" class="other-links">coustomers List</a>

							<a href="coustomerprofile.php" class="other-links">View Profile</a>

							

						</div>

				 </div>

				 <!-- copyright area -->

						<p class="copyright">&copy Copyright 2021 </p>

	</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration: 1000

    });
  </script>
  </body>
</html>
