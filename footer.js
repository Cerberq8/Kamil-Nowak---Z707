const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer__container">
    <div class="footer__links">
      <div class="footer__link--wrapper">
        <div class="footer__link--items">
          <a href="index.php?page=about_us">About us</a>
        </div>
        <div class="footer__link--items">
          <a href="index.php?page=contact_us">Contact us</a>
        </div>
        <div class="footer__link--items">
          <a href="index.php?page=products">Products</a> 
        </div>
      </div>
    </div>
    <section class="social__media">
      <div class="social__media--wrap">
        <div class="footer__logo">
          <a href="/" id="footer__logo"><i class="fas fa-gem"></i>YEACHTS</a>
        </div>
        <p class="website__rights">© YEACHTS 2022. All rights reserved</p>
        <div class="social__icons">
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="Facebook"
          >
            <i class="fab fa-facebook"></i>
          </a>
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="Instagram"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="Youtube"
          >
            <i class="fab fa-youtube"></i>
          </a>
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="Twitter"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="LinkedIn"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
      </div>
    </section>
  </div>
    `;
}

createFooter();