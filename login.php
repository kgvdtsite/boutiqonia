<?php require_once('header.php'); ?>
<div class="offcanvas_container">
    <div class="offcanvas_main_content">
        <div class="page-wrapper">

            <div id="primary" class="content-area">

                <div class="page-header" data-stellar-background-ratio=0.6
                     style="background: url('/images/bg4.jpg') no-repeat center center;">
                    <div class="row">
                        <div class="title-section ">
                            <div id="breadcrumbs">
                                <span>
                                    <a title="Перейти на главную" href="/" class="home">
                                        <span>Главная</span>
                                    </a>
                                </span> &gt;
                                <span>
                                    <span>Вход</span>
                                </span>
                            </div>
                            <h1 class="page-title">
                                Форма входа</h1>
                        </div>
                    </div>
                </div>
                <div id="content" class="site-content" role="main">
                    <article id="post-582" class="post-582 page type-page status-publish hentry">
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="row">
                                            <div class="large-10 large-centered columns">
                                                <div class="track-order-container">
                                                    <p class="track-order-description">Если вы забыли свой пароль, вы можете
                                                        <a href="forgot-password.php">cбросить его</a>.
                                                        Для нового пользователя вы можете <a href="registration.php">зарегистрироваться</a>.
                                                        Для входа в личный кабинет заполните поля</p>
                                                    <form action="" method="post" class="track_order_form custom_border">
                                                        <p class="input_box">
                                                            <label for="orderid">Логин</label>
                                                            <input class="input-text" type="text" name="" id="orderid" placeholder=""/>
                                                        </p>
                                                        <p class="input_box last">
                                                            <label for="order_email">Пароль</label>
                                                            <input class="input-text" type="password" name="" id="order_email" placeholder=""/>
                                                        </p>
                                                        <div class="clear"></div>
                                                        <p class="form-row">
                                                            <input type="submit" class="button" name="" value="Войти"/>
                                                        </p>
                                                    </form>
                                                </div><!-- .track-order-container-->
                                            </div><!-- .large-->
                                        </div><!-- .row-->
                                    </div>
                                </div><!-- .entry-content -->
                            </div><!-- .columns -->
                        </div><!-- .row -->
                    </article><!-- #post -->
                    <div class="clearfix"></div>
                </div><!-- content -->
            </div><!-- #primary -->
            <?php require_once('footer.php'); ?>



