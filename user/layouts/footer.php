<!--footer-->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="image-footer-wrap col-md-3">
        LOGO
      </div>
      <div class="address-footer-wrap col-md-6">
        <strong>Thông tin liên hệ</strong>
        Hà Đông - Hà Nội <br />
        Hotline: 0528448515 <br />
        Email: vannguyenn2809@gmail.com
      </div>
      <div class="social-footer-wrap col-md-3">
        <strong>Kết nối với chúng tôi</strong>
        <ul>
          <li>
            <a href="#">
              <i class="color fab fa-facebook" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="color fab fa-youtube" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="color fab fa-google-plus-g"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <p class="footer-copyright">
      © 2018. Công ty cổ phần shop 123. GPDKKD: 0965969085 do sở KH & ĐT TP.HN cấp ngày 03/02/2003. GPMXH: 2003/MID do Bộ Thông Tin và Truyền Thông cấp ngày 28/09/1999.
      Địa chỉ: Hà Đông - Hà Nội . Điện thoại: 0528448515. Email: vannguyenn2809@gmail.com. Chịu trách nhiệm nội dung: Nguyễn Hoa Văn. Xem chính sách sử dụng
    </p>
  </div>
</div>


<div class="overlay"></div>

<ul class="icon-service-wrap">
  <li data-toggle="tooltip" data-placement="left" title="Gọi ngay cho chúng tôi">
    <a href="tel:0528448515">
      <img src="assets/images/icon-phone.png" class="icon-service-img" />
    </a>
  </li>
  <li data-toggle="tooltip" data-placement="left" title="Chat với chúng tôi qua FaceBook">
    <a href="https://www.facebook.com/VanNguyen280999" target="_blank">
      <img src="assets/images/2021_Facebook_icon.svg.png" class="icon-service-img" />
    </a>
  </li>
  <li data-toggle="tooltip" data-placement="left" title="Gửi mail cho chúng tôi">
    <a href="mailto:vannguyenn2809@gmail.com">
      <img src="assets/images/icon-mail.png" class="icon-service-img" />
    </a>
  </li>
  <li data-toggle="tooltip" data-placement="left" title="Liên hệ với chúng tôi">
    <a href="contact.html" target="_blank">
      <img src="assets/images/icon-map.png" class="icon-service-img" />
    </a>
  </li>
</ul>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Tooltip plugin (zebra) js file -->
<script src="assets/js/zebra_tooltips.min.js"></script>


<!-- Owl Carousel plugin js file -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Ideabox theme js file. you have to add all pages. -->
<script src="assets/js/jquery.show-more.js"></script>
<script src="assets/js/script.js"></script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v7.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>

</html>