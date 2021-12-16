<!doctype html>
<html lang="en">
<head>
    <title>Techno Studio | Донат</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="http://melody-rp.ru/assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="http://melody-rp.ru/assets/css/style.css">
     <script src="https://www.google.com/recaptcha/api.js" async defer></script> </head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
			<img src="https://i.imgur.com/OaVOzwy.png">
            <a class="navbar-brand" href="/">
			<b>Techno</b>
			Studio
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active mx-lg-3">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
					<li class="nav-item mx-lg-3">
                        <a class="nav-link nav-scroll" href="https://vk.com/s.c.p_studio">Форум</a>
                    </li>
                    <li class="nav-item mx-lg-3">
                        <a class="nav-link nav-scroll" href="/#howtoplay">Как начать играть</a>
                    </li>
                    <li class="nav-item mx-lg-3 donate">
                        <a class="nav-link" href="donate.php">Донат</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item blue-btn">
                        <a href="https://vk.com/s.c.p_studio" class="nav-link">ЧАТ ПРОЕКТА</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
        <div class="donate">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 text-right">
                    <div class="man"></div>
                    <a href="#" data-toggle="modal" data-target="#discountsModal" class="btn discounts">Акции на донат!</a>
                </div>
                <div class="col-lg-7">
                    <form action="/unitpay/pay.php" method="post">
                        <h1 class="text-center">Донат услуги</h1>

                        <div class="form-group">
                            <label for="nickname">Ваш ник</label>
                            <input type="text" name="nickname" id="nickname" class="form-control" required placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="sum">Сумма пополнения</label>
                            <input type="text" name="sum" id="sum" class="form-control" required placeholder="">
                        </div>
						<div class="form-group">
						<label for="Server">Выберите сервер</label>
						<br>
							<select name="Server">
								<option value="73">Techno Studio | Rap</option>
								<option value="4">Techno Studio | Bass </option>
								<option value="30">Techno Studio | Beat </option>
							</select>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcJZKkUAAAAAO1IhYdNvfE7aWjx4L58lriWOis1"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-continue">
                                Продолжить <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<footer >
    <div class="container h-100 position-relative">
        <div class="row h-100 align-items-center">
            <div class="col-lg-4">
                <p>Techno Studio © 2019-2020</p>
                <p>Все права защищены!</p>
            </div>
            <div class="col-lg-4 d-flex flex-wrap align-items-center justify-content-around">
                <div class="logo"><img src="https://i.imgur.com/IFmV4Zw.png"></div>
                <div class="socials">
                    <a href="https://www.youtube.com/channel/UCceOlbtfPsvkDmZutUWCozQ"><i class="fab fa-youtube"></i></a>
                    <a href="https://vk.com/s.c.p_studio"><i class="fab fa-vk"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-right">
                <p>Project owner</p>
                <p>Techno Studio</p>
		<p>vk.com/s.c.p_studio</p>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="discountsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="discount-item">
                    <div class="row h-100 align-items-center">
                        <div class="col-4">
                            <div class="jetpack"></div>
                        </div>
                        <div class="col-8">
                            <p>Купите админку 12 уровня и получите джетпак в подарок (навсегда)</p>
                        </div>
                    </div>
                </div>
                <div class="discount-item">
                    <div class="row h-100 align-items-center">
                        <div class="col-4">
                            <div class="case"></div>
                        </div>
                        <div class="col-8">
                            <p>Купите создание семьи и получите 2 кейса бесплатно (в этом месяце Х3 удача)</p>
                        </div>
                    </div>
                </div>
                <div class="discount-item">
                    <div class="row h-100 align-items-center">
                        <div class="col-4">
                            <div class="coin"></div>
                        </div>
                        <div class="col-8">
                            <p>Купите Владельца (Полный Доступ) и получите 500 рублей обратно на аккаунт (Кешбэк)</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="button" class="btn btn-close my-4" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax-items">
    <div class="obj square"></div>
    <div class="obj square"></div>
    <div class="obj square"></div>
    <div class="obj square"></div>
    <div class="obj square"></div>
    </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="http://melody-rp.ru/assets/js/common.js"></script>
</body>
</html>