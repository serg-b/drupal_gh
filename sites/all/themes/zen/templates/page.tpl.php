<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

    <header id="masthead" class="site-header" role="banner">
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


    </header><!-- #masthead -->

  <div id="main">

      <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      ?>



    <div id="content" class="column" role="main">



      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
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

<?php print render($page['bottom']); ?>
