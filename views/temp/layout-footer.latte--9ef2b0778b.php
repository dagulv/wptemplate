<?php

use Latte\Runtime as LR;

/** source: C:\wamp64\www\wptemplate/wp-content/themes/wptemplate/views//layout/footer.latte */
final class Template9ef2b0778b extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		echo '  </main>
  <div class="backdrop"></div>
  <footer class="footer">
    <aside class="container">
      <section>
      <h2>Footer Menu 1</h2>
        ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['theme_location' => 'menu-footer', 'depth' => 1])) /* line 7 */;
		echo '
      </section>
      <section>
      <h2>Footer Menu 2</h2>
        ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['theme_location' => 'menu-footer', 'depth' => 1])) /* line 14 */;
		echo '
      </section>
      <section>
      <h2>Footer Menu 3</h2>
        ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['theme_location' => 'menu-footer', 'depth' => 1])) /* line 21 */;
		echo '
      </section>
      <section>
      <h2>Footer Menu 4</h2>
        ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['theme_location' => 'menu-footer', 'depth' => 1])) /* line 28 */;
		echo '
      </section>
      <section>
      <h2>Footer Menu 5</h2>
        ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['theme_location' => 'menu-footer', 'depth' => 1])) /* line 35 */;
		echo '
      </section>
      <section>
      <h2>Footer Menu 6</h2>
        ';
		echo LR\Filters::escapeHtmlText(wp_nav_menu(['theme_location' => 'menu-footer', 'depth' => 1])) /* line 42 */;
		echo '
      </section>
    </aside>

    <div class="copyright-container container">
      <span>Logo</span>
      <p class="copyright">
        <small>Copyright &copy; ';
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 52 */;
		echo '</small>
      </p>
    </div>
  </footer>


  ';
		echo LR\Filters::escapeHtmlText(wp_footer()) /* line 58 */;
		echo '
  </body>

  </html>';
	}
}
