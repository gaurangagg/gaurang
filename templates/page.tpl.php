
<div class="page">

  <header id="masthead" class="site-header container">

    <div class="row">

      <div id="logo" class="site-branding col-sm-6">

       <h1 class="logo-title upper notd">
         <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?> "><?php print $site_name; ?>
         </a>
         <br>
         <span class="slogan upper"><?php print $site_slogan; ?></span>


       </div>

       <div class="main_menu upper notd">
      <nav role="navigation">  <?php 
        if (module_exists('i18n_menu')) {
          $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
        } else {
          $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
        }
        print drupal_render($main_menu_tree);
        ?>

        </nav>
      </div>
 </div>
 

  <div class="socialmedia">
    <ul>
      <li class="social facebook"><a href="https://www.facebook.com/Gaurang-Agrawal-727059750756921/" target="_blank">FB</a></li>
      <li class="social twitter"><a href="https://twitter.com/gaurangagg"  target="_blank">TW</a></li>
      <li class="social linkedin"><a href="https://www.linkedin.com/in/gaurangagg"  target="_blank">LN</a></li>
      <li class="social youtube"><a href="http://youtube.com/beingskilled" target="_blank">YT</a></li>
    </ul>
  </div>
</header>
 
<div class="content-a">
 <?php if (theme_get_setting('breadcrumbs')): ?><?php if ($breadcrumb): ?><div id="breadcrumbs"><?php print $breadcrumb; ?></div><?php endif;?><?php endif; ?>
            <?php print $messages; ?>

<?php print render($title_prefix); ?>
<?php if ($title): ?><h1 class="page-title upper"><?php print $title; ?></h1><?php endif; ?>
              <?php print render($title_suffix); ?>
<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php print render($page['content']); ?> 
  

</div>

<div class="belowcontent">
<?php print render($page['belowcontent']); ?> 

</div>
<div class="content_quote footer_b">
    <?php print render($page['content_quote']); ?>
</div>

<div class="content_social footer_b">
  
<?php print render($page['content_social']); ?>
</div>

<footer class="upper">
    <?php print render($page['footer']); ?>
  
</footer>
</div>
