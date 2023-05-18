<?php

use Latte\Runtime as LR;

/** source: C:\wamp64\www\wptemplate/wp-content/themes/wptemplate/views//layout/main-menu.latte */
final class Template9c18dbff7d extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		echo '<header class="header">
	<div class="container">
    <a 
      class="navbar-brand" 
      href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url(home_url('/')))) /* line 5 */;
		echo '"
      itemprop="url" 
      aria-label="';
		echo LR\Filters::escapeHtmlAttr(get_bloginfo('name')) /* line 7 */;
		echo ' Logo - Go to homepage"
    >
      ';
		echo LR\Filters::escapeHtmlText(tr_get_media('logo.svg')) /* line 9 */;
		echo '
    </a>
    <button 
      class="navbar-toggler collapsed" 
      type="button" 
      data-toggle="collapse" 
      aria-expanded="false" 
      aria-label="Toggle navigation"
    >
    </button>
    <nav class="navbar">
      <div class="mobile-sidebar-header container">
        <a 
          class="navbar-brand" 
          href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url(home_url('/')))) /* line 23 */;
		echo '"
          itemprop="url" 
          aria-label="';
		echo LR\Filters::escapeHtmlAttr(get_bloginfo('name')) /* line 25 */;
		echo ' Logo - Go to homepage"
        >
          ';
		echo LR\Filters::escapeHtmlText(tr_get_media('logo.svg')) /* line 27 */;
		echo '
        </a>
        <button 
          class="navbar-closer collapsed" 
          type="button" 
          data-toggle="collapse" 
          aria-expanded="false" 
          aria-label="Toggle navigation"
        >
        </button>
      </div>
      ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['menu' => 'top', 'theme_location' => 'menu-1', 'container' => 'div', 'container_class' => 'navbar-collapse container', 'menu_id' => 'primary-menu', 'menu_class' => 'navbar-nav', 'depth' => 2, 'fallback_cb' => 'ThemeRedoneWalker::fallback', 'walker' => new ThemeRedoneWalker])) /* line 38 */;
		echo '
    </nav> 
  </div>
</header>
';
	}
}
