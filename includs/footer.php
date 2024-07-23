
   <!-- FOOTER AREA START -->
   <footer class="tj-footer-area">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="footer-logo-box">
                  <a href="#"><img src="assets/img/logo/logo.png" alt="" /></a>
               </div>
               <div class="footer-menu">
                  <nav>
                     <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolios</a></li>
                        <li><a href="contact.html">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="copy-text">
                  <p>&copy; 2024 All rights reserved by <a href="#" target="_blank">ThemeJunction</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- FOOTER AREA END -->

   <!-- JSS here -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/appear.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/gsap.min.js"></script>
   <script src="assets/js/ScrollTrigger.min.js"></script>
   <script src="assets/js/lenis.min.js"></script>
   <script src="assets/js/lightcase.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/validate.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/main.js"></script>

   <script>
      var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?28052';
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = url;
      var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#00e785",
          "ctaText":"Chat with us",
          "borderRadius":"25",
          "marginLeft": "0",
          "marginRight": "20",
          "marginBottom": "20",
          "ctaIconWATI":false,
          "position":"right"
      },
      "brandSetting":{
          "brandName":"Wati",
          "brandSubTitle":"undefined",
          "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
          "welcomeText":"Hi there!\nHow can I help you?",
          "messageText":"Hello, %0A I have a question about {{page_link}}",
          "backgroundColor":"#00e785",
          "ctaText":"Chat with us",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":"923145506866"
      }
      };
      s.onload = function() {
          CreateWhatsappChatWidget(options);
      };
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
  </script>

</body>

</html>