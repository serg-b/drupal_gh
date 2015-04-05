<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page-front">

    <header id="masthead" class="home-header" role="banner">

        <div class="header-main">
            <a href="/"><img class="logo" src='/sites/all/themes/zen/images/geekhub_logo.png'></a>
            <nav>
                <?php if ($main_menu): ?>
                    <div id="main-menu" class="navigation">
                        <?php print theme('links__system_main_menu', array(
                            'links' => $main_menu,
                            'attributes' => array(
                                'id' => 'main-menu-links',
                                'class' => array('links', 'clearfix'),
                            ),
                            'heading' => array(
                                'text' => t('Main menu'),
                                'level' => 'h2',
                                'class' => array('element-invisible'),
                            ),
                        )); ?>
                    </div> <!-- /#main-menu -->
                <?php endif; ?>
            </nav>

            <ul class="social">
                <li class="facebook"><a href="http://www.facebook.com/pages/GeekHub/158983477520070"></a></li>
                <li class="vk"><a href="http://vkontakte.ru/geekhub"></a></li>
                <li class="twitter"><a href="http://twitter.com/#!/geek_hub"></a></li>
                <li class="y"><a href="http://www.youtube.com/user/GeekHubchannel"></a></li>
            </ul>
        </div>





        <div class="registration-home">
            <h4 class="registration">Реєстрацію на 4й сезон закрито</h4>
            <p class="note">*залиште нам ваш емейл і ми повідомимо вас про початок реєстрації</p>
            <form action="#">
                <fieldset>
                    <span></span>
                    <input type="text" class="email" placeholder="Ваш email">
                    <input type="submit" value="Відіслати">
                </fieldset>

            </form>

        </div>

    </header><!-- #masthead -->

  <div id="main" class="site-main">
      <h1 class="front-text">ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h1>
    <div id="content" class="column" role="main">

      <a id="main-content"></a>




      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>





  </div>

    <footer id="colophon" class="site-footer" role="contentinfo">

        <?php print render($page['footer']); ?>

        <div class="site-info">
            <nav>
                <?php if ($main_menu): ?>
                    <div id="footer-menu" class="menu-geekhub-container">
                        <?php print theme('links__system_main_menu', array(
                            'links' => $main_menu,
                            'attributes' => array(
                                'id' => 'menu-geekhub-1',
                                'class' => array('links', 'clearfix'),
                            ),
                            'heading' => array(
                                'text' => t('Main menu'),
                                'level' => 'h2',
                                'class' => array('element-invisible'),
                            ),
                        )); ?>
                    </div> <!-- /#main-menu -->
                <?php endif; ?>
            </nav>
            <p>© Copyright 2011</p>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->



</div>


