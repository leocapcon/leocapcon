<div class="footer rlt pd-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget">
          <div class="widget-logo ft">
            <a class="navbar-brand" href="index.php">
              <img src="images/leocapcon-logo.png" alt="logo" class="img-fluid logo">
            </a>
          </div>
          <p><strong>Leocapcon</strong> empower your business. We bridge the gap between your vision and technology. Where cutting-edge IT meets real-world solutions.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget">
          <h4 class="ft">Quick Link</h4>
          <ul class="footer-links-list">
              <li><a href="about-us.php">about us</a></li>
              <li><a href="services.php">services</a></li>
              <li><a href="contact-us.php">Contact us</a></li>
              <li><a href="blog.php">blog</a></li>
              <li><a href="index.php">home</a></li>
              <li><a href="artificial-intelligence.php">Artificial intelligence</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget">
          <h4 class="ft">Services</h4>
          <ul class="footer-links-list">
              <li><a href="services.php">Website Designing</a></li>
              <li><a href="services.php">Graphic Designing</a></li>
              <li><a href="services.php">SEO</a></li>
              <li><a href="services.php">Content Writing</a></li>
              <li><a href="services.php">Video Editing</a></li>
              <li><a href="services.php">Website Development</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="footer-widget">
          <h4 class="ft">Get in touch</h4>
          <ul class="widget-info">
            <li><!--<i class="fa fa-phone"></i>-->
              <i class="fa-duotone fa-phone"></i><a href="javascript:void(0)">+91-7733084856</a></li>
            <li><!--<i class="fa fa-envelope"></i>-->
              <i class="fa-duotone fa-envelope"></i><a href="javascript:void(0)">info.leocapcon@gmail.com</a></li>
            <li><!--<i class="fa fa-map-marker"></i>-->
              <i class="fa-solid fa-location-dot"></i><a href="javascript:void(0)">Near Wonder Mall, Alwar (301001), Rajasthan</a></li>
          </ul>
          <ul class="widget-social">
            <li><a href="" target="_blank"><!--<i class="fa fa-facebook"></i>-->
            <i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="" target="_blank"><!--<i class="fa fa-instagram"></i>-->
              <i class="fa-brands fa-instagram"></i>
            </a></li>
            <li><a href="" target="_blank"><!--<i class="fa fa-linkedin"></i>-->
              <i class="fa-brands fa-linkedin-in"></i>
            </a></li>
            <li><a href="" target="_blank"><!--<i class="fa fa-twitter"></i>-->
              <i class="fa-brands fa-x-twitter"></i>
            </a></li>
            <li><a href="https://Wa.me/+917733084856" target="_blank"><!--<i class="fa fa-twitter"></i>-->
              <i class="fa-brands fa-whatsapp"></i>
            </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="copyright-area-content">
        <p>
          Copyright © <script>document.write(new Date().getFullYear())</script>.All Rights Reserved by
               <a href="index.php" target="_blank">Leocapcon</a>
        </p>
      </div>
    </div>
    <div class="shapes">
      <div class="footer-shape-1" data-speed="0.08" data-revert="true">
          <img src="images/overview-shape1.png" alt="image" class="img-fluid">
      </div>
      <div class="footer-shape-2" data-speed="0.08" data-revert="true">
          <img src="images/overview-shape2.png" alt="image" class="img-fluid">
      </div>
      <div class="footer-shape-3" data-speed="0.08" data-revert="true">
          <img src="images/footer-shape3.png" alt="image" class="img-fluid">
      </div>
      <div class="footer-shape-4" data-speed="0.08" data-revert="true">
          <img src="images/footer-shape4.png" alt="image" class="img-fluid">
      </div>
      <div class="footer-shape-5" data-speed="0.08" data-revert="true">
          <img src="images/footer-shape5.png" alt="image" class="img-fluid">
      </div>
    </div>
  </div>
</div>




<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>	
<script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/slick-slider.js" type="text/javascript"></script>
<script src="js/TweenMax.min.js" type="text/javascript"></script>
<script src="js/particles.min.js" type="text/javascript"></script>
<script src="js/particles.app.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
  $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
      } else {
        $('#back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
});
</script>

<script type="text/javascript">
  $('.slide1').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.hn').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
</script>

<script type="text/javascript">
    $('.work-process').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.features-shape-1, .features-shape-2').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
    </script>

<script type="text/javascript">
  $('.about-us, .about').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.about-shape-1, .about-shape-2, .about-shape-3, .about-shape-4, .about-shape-5, .about-shape-6, .about-shape-7, .about-image').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
  
</script>

<script type="text/javascript">
  $('.services').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.services-shape-1, .services-shape-2, .services-shape-3, .services-shape-4, .services-shape-5').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
  
</script>

<script type="text/javascript">
  $('.support').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.technology-shape-1, .technology-shape-2, .technology-shape-3, .technology-shape-4, .technology-shape-5, .technology-shape-6, .technology-shape-7, .technology-shape-8').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
  
</script>


<script type="text/javascript">
  $('.testimonial').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.clients-shape-1, .clients-shape-2, .clients-shape-3').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
</script>

<script type="text/javascript">
    $('.overview-contact').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.overview-shape-1, .overview-shape-2, .overview-shape-3, .overview-shape-4, .overview-shape-5').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
</script>

<!--<script type="text/javascript">
  $('.blog').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.blog-shape-1, .blog-shape-2').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
</script>-->

<script type="text/javascript">
  $('.footer, .blog').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.footer-shape-1, .footer-shape-2, .footer-shape-3, .footer-shape-4, .footer-shape-5 , .blog-shape-1, .blog-shape-2').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
</script>

<script type="text/javascript">
  $('.b-crumb').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.bcrumb-shape-1, .bcrumb-shape-2, .bcrumb-shape-3, .bcrumb-shape-4').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
</script>

<script type="text/javascript">
    $('.our-features').mousemove(function(e){
    var wx = $(window).width();
    var wy = $(window).height();
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    var newx = x - wx/2;
    var newy = y - wy/2;
    $('.feature-shape-1, .feature-shape-2').each(function(){
      var speed = $(this).attr('data-speed');
      if($(this).attr('data-revert')) speed *= -1;
      TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
    });
  });
</script>


<script type="text/javascript">
   // Function to generate dynamic pagination with truncation
    function generatePagination(pageUrls, currentPageUrl) {
      const paginationElement = document.getElementById('pagination');
      paginationElement.innerHTML = '';

      const maxVisiblePages = 5;
      const currentPageIndex = pageUrls.indexOf(currentPageUrl);
      const totalPages = pageUrls.length;
      const halfVisiblePages = Math.floor(maxVisiblePages / 2);
      let startPage = currentPageIndex - halfVisiblePages > 0 ? currentPageIndex - halfVisiblePages : 0;
      const endPage = startPage + maxVisiblePages < totalPages ? startPage + maxVisiblePages : totalPages;

      if (startPage > 0) {
        addPageLink(paginationElement, pageUrls[startPage - 1], '<<');
      }

      if (startPage > 1) {
        addTruncationDot(paginationElement);
      }

      for (let i = startPage; i < endPage; i++) {
        addPageLink(paginationElement, pageUrls[i], i + 1, pageUrls[i] === currentPageUrl);
      }

      if (endPage < totalPages - 1) {
        addTruncationDot(paginationElement);
      }

      if (endPage < totalPages) {
        addPageLink(paginationElement, pageUrls[endPage], '>>');
      }
    }

    // Function to add page link
    function addPageLink(parentElement, url, text, isActive) {
      const li = document.createElement('li');
      li.classList.add('page-item');
      if (isActive) {
        li.classList.add('active');
      }
      const a = document.createElement('a');
      a.classList.add('page-link');
      a.href = url;
      a.textContent = text;
      li.appendChild(a);
      parentElement.appendChild(li);
    }

    // Function to add truncation dots
    function addTruncationDot(parentElement) {
      const li = document.createElement('li');
      li.classList.add('page-item', 'truncate-pagination');
      const span = document.createElement('span');
      span.classList.add('page-link');
      span.textContent = '...';
      li.appendChild(span);
      parentElement.appendChild(li);
    }

    // Example: Generating pagination with multiple pages
    const pageUrls = ['blog1.php', 'blog2.html', 'blog3.html', 'blog4.html', 'blog5.html', 'blog6.html', 'blog7.html', 'blog8.html', 'blog9.html', 'blog10.html'];
    const currentPageUrl = window.location.pathname; // Get current page URL
    generatePagination(pageUrls, currentPageUrl);

    // Example event listener for page click
    document.getElementById('pagination').addEventListener('click', function (event) {
      event.preventDefault();
      if (event.target.tagName === 'A') {
        const pageUrl = event.target.getAttribute('href');
        generatePagination(pageUrls, pageUrl);
      }
    });
  </script>

  <script type="text/javascript">
    //contact-form form gmail
    document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        // Perform client-side validation or other actions if needed
    });
});
  </script>


 <script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".navbar-nav a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
                //for making parent of submenu active
               $(this).closest("li").parent().parent().addClass("active");
            }
        });
    });        
</script>

</body>
</html>