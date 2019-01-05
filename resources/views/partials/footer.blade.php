<footer class="footer">
  <div class="container-fluid">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="row">
      <div class="col-md-4 footer__legal">  <a class="navbar-brand" href="{{ home_url('/') }}"><img class="navbar__logo" src="@asset('images/xls-logo.png')" alt=""></a>
        <p class="footer__legal-text">
          &copy; 2018 XLS Partners, Inc. All Rights Reserved.
          Securities offered through XLS Securities, Inc. Member FINRA & SIPC. FINRA Broker Check | Business Continuity Plan | Disclosure Statement | Privacy
        </p>
      </div>
      <div class="col-md-4 footer__contact">
        <h1 class="footer__header letters-spaced font-weight-bold text-uppercase">Contact</h1>
          <p class="footer__contact-dets letters-spaced text-uppercase">
          150 North Wacker Drive <br>
          Suite 3025 <br>
          Chicago, Illinois 60606
        </p>
        <p class="footer__contact-dets letters-spaced text-uppercase">
          770 Beacon Street <br>
          Suite A <br>
          West Dundee, Illinois 60118 <br>
        </p>
        <p class="footer__contact-dets letters-spaced text-uppercase">
          <a href="tel:1-847-836-7035">(847) 836 – 7035</a>
           <a href="mailto:info@xlspartners.com">Info@xlspartners.com</a>
        </p>
        <div class="socials">
          <a href="https://twitter.com/@xlspartners"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/company/xlspartners/"><i class="fab fa-linkedin"></i></a>
        </div>
        </div>
      <div class="col-md-4 footer__links">
               <h1 class="footer__header letters-spaced font-weight-bold text-uppercase">Links</h1>
          <ul class="footer__links-list letters-spaced font-weight-bold text-uppercase">
            <li class="footer__link-item"><a href="#">HOME</a></li>
            <li class="footer__link-item"><a href="#">THE FIRM</a></li>
            <li class="footer__link-item"><a href="#">TRANSACTIONS</a></li>
            <li class="footer__link-item"><a href="#">MEDIA</a></li>
            <li class="footer__link-item"><a href="#">CONTACT</a></li>
            <li class="footer__link-item"><a href="#">CAREERS</a></li>
            <li class="footer__link-item"><a href="#">CLIENT Portal</a></li>
          </ul>
      </div>
    </div>
  </div>
</footer>

