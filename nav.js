const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
    <div class="navbar__container">
    <a href="index.php" id="navbar__logo"><i class="fas fa-gem"></i>  YEACHTS</a>
    <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="navbar__menu">
        <li class="navbar__item">
            <a href="index.php" class="navbar__links">
                Home
            </a>
        </li>
        <li class="navbar__item">
            <a href="index.php?page=products" class="navbar__links">
              Products
            </a>
        </li>
        <li class="navbar__item">
            <a href="index.php?page=contact_us" class="navbar__links">
                Contact
            </a>
        </li>
        <li class="navbar__btn">
            <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs&ab_channel=AllKindsOfStuff" class="button">
                Sign up
            </a>
        </li>
        </ul>
    </div>
    `;
}

createNav();