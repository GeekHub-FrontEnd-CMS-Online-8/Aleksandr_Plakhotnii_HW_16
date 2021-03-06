<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <?php
        wp_head();
    ?>
</head>
<body>
<div class="page">
    <div class="wrap">
        <header class="header">
            <nav class="navigation">
                <div class="icon">
                    <span class="icon__line"></span>
                    <span class="icon__line"></span>
                    <span class="icon__line"></span>
                    <span class="icon__line"></span>
                </div>
                <ul class="menu">
                    <li class="menu__item"><a href="#" class="menu__item-link">portfolio</a>
                        <ul class="submenu">
                            <li class="submenu__item"><a href="#" class="submenu__item-link">fashion</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__item-link">editorial</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__item-link">street</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__item-link">black white</a>
                                <ul class="submenu submenu-2">
                                    <li class="submenu__item"><a href="#" class="submenu__item-link">gallery /1</a></li>
                                    <li class="submenu__item"><a href="#" class="submenu__item-link">gallery /2</a></li>
                                    <li class="submenu__item"><a href="#" class="submenu__item-link">gallery /3</a></li>
                                    <li class="submenu__item"><a href="#" class="submenu__item-link">gallery /4</a></li>
                                    <li class="submenu__item"><a href="#" class="submenu__item-link">gallery /5</a></li>
                                </ul>
                            </li>
                            <li class="submenu__item"><a href="#" class="submenu__item-link">personal</a></li>
                        </ul>
                    </li>
                    <li class="menu__item"><a href="#" class="menu__item-link">clients</a></li>
                    <li class="menu__item"><a href="#" class="menu__item-link">news</a></li>
                    <li class="menu__item"><a href="#" class="menu__item-link">about me</a></li>
                    <li class="menu__item"><a href="#" class="menu__item-link">contact</a></li>
                </ul>
                <h1 class="logo">
                    <a href="index.html"><img src="img/logo.jpg" alt="SQUARE"></a>
                </h1>
            </nav>
            <div class="social-wrap">
                <div class="social">
                    <a href="#" class="social__link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social__link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social__link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social__link"><i class="fab fa-flickr"></i></a>
                    <a href="#" class="social__link"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social__link"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </header>
        <section class="portfolio-slide">
            <div class="portfolio-slide-btn">
                <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="slide-info">
                <div class="slide-info__hide">
                    <i class="fas fa-angle-double-left"></i>
                </div>
                <h3 class="slide-info__person">Morgan Freeman</h3>
                <p class="slide-info__role">actor</p>
                <div class="slide-info__slider">
                    <p class="slide-info__slider-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                    </p>
                    <div class="slide-info__slider-navigation">
                        <div class="slide-info__slider-navigation-left">
                            <i class="fas fa-angle-left"></i>
                        </div>
                        <div class="slide-info__slider-navigation-right">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="slide-info__counter">
                    <span class="">1/10</span>
                </div>
                <div class="slide-info__links">
                    <div class="slide-info__links-like links-box">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="slide-info__links-share links-box">
                        <i class="fas fa-share"></i>
                    </div>
                    <div class="slide-info__links-message links-box">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="sect-bottom">
            <div class="workshop">
                <div class="workshop__photo">
                    <img src="img/workshp-img.jpg" alt="workshop">
                </div>
                <div class="workshop__box">
                    <h3 class="workshop__box-headline">
                        fashion workshop
                    </h3>
                    <p class="workshop__box-date">
                        NOV 21-23
                    </p>
                    <p class="workshop__box-time">
                        9:00 AM - 4:00 PM
                    </p>
                </div>
                <button class="workshop__btn">RSVP</button>
            </div>
            <div class="news">
                <h3 class="news__headline">
                    NEWS
                </h3>
                <div class="news__post">
                    <div class="news__post-person">
                        <img src="img/news-person-1.jpg" alt="person-1">
                    </div>
                    <div class="news__post-box">
                        <h3 class="news__post-box-headline">
                            new gallery set
                        </h3>
                        <p class="news__post-box-date">
                            09.12.2014
                        </p>
                        <p class="news__post-box-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque fringilla mi orci, ac venenatis ante
                            venenatis eget.<a href="#">READ MORE</a>
                        </p>
                    </div>
                </div>
                <div class="news__post">
                    <div class="news__post-person">
                        <img src="img/news-person-2.jpg" alt="person-2">
                    </div>
                    <div class="news__post-box">
                        <h3 class="news__post-box-headline">
                            wedding workshop
                        </h3>
                        <p class="news__post-box-date">
                            09.12.2014
                        </p>
                        <p class="news__post-box-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque fringilla mi orci, ac venenatis ante
                            venenatis eget.<a href="#" class="news__post-box-link">READ MORE</a>
                        </p>
                    </div>
                </div>
                <div class="news__post">
                    <div class="news__post-person">
                        <img src="img/news-person-3.jpg" alt="person-3">
                    </div>
                    <div class="news__post-box">
                        <h3 class="news__post-box-headline">
                            personal project
                        </h3>
                        <p class="news__post-box-date">
                            09.12.2014
                        </p>
                        <p class="news__post-box-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque fringilla mi orci, ac venenatis ante
                            venenatis eget.<a href="#" class="news__post-box-link">READ MORE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="contact-top">
                    <div class="contact__logo">
                        <img src="img/bottom-logo.jpg" alt="logo">
                    </div>
                    <div class="contact__social">
                        <a href="#" class="contact__social-phone contact__social-icon"><i class="fas fa-phone-square"></i>+ 00 123 456 7890</a>
                        <a href="#" class="contact__social-email contact__social-icon"><i class="fas fa-envelope"></i>info@square.com</a>
                        <div class="social contact__social-bottom">
                            <a href="#" class="social__link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social__link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social__link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social__link"><i class="fab fa-flickr"></i></a>
                            <a href="#" class="social__link"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="contact-bottom">
                    <a href="#" class="social__link contact-bottom-link"><i class="fab fa-twitter"></i></a>
                    <p class="contact-bottom-text">
                        Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy.
                        Chocolate oat cake <span>@cheesecake</span> tootsie roll.
                    </p>
                </div>
            </div>
        </section>
        <section class="partners">
            <div class="partners__box">
                <a href="#"><img src="img/phaseone.png" alt="phaseone"></a>
            </div>
            <div class="partners__box">
                <a href="#"><img src="img/manfrotto.png" alt="manfrotto"></a>
            </div>
            <div class="partners__box">
                <a href="#"><img src="img/hasselblad.png" alt="hasselblad"></a>
            </div>
            <div class="partners__box">
                <a href="#"><img src="img/broncolor.png" alt="broncolor"></a>
            </div>
        </section>
        <footer class="footer">
            <p class="footer_created">
                Created by 2ndself.com, with <i class="fas fa-heart"></i><br>
                exclusive for theuncreativelab.com
            </p>
            <p class="footer__copyright">
                &#169; 2014 Square. All Rights Reserved.
            </p>
        </footer>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>
