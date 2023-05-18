<?php

use Latte\Runtime as LR;

/** source: C:\wamp64\www\wptemplate\wp-content\themes\wptemplate\gutenberg\blocks\hero/view.latte */
final class Template0d013f3c19 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($title['text']) /* line 3 */ {
			echo '<section 
  class="container block-hero"
  style="--bg: url(';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($background_image['src'])) /* line 4 */;
			echo ')"
>
  <div class="hero-container">
    <div class="hero-text">
';
			ob_start(fn() => '');
			try {
				echo '      <h1>';
				ob_start();
				try {
					echo LR\Filters::escapeHtmlText($title['text']) /* line 8 */;

				} finally {
					$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
				}
				echo '</h1>
';

			} finally {
				if ($ʟ_ifc[0] ?? null) {
					ob_end_clean();
				} else {
					echo ob_get_clean();
				}
			}
			ob_start(fn() => '');
			try {
				echo '      <p>';
				ob_start();
				try {
					echo LR\Filters::escapeHtmlText($text['text']) /* line 9 */;

				} finally {
					$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
				}
				echo '</p>
';

			} finally {
				if ($ʟ_ifc[1] ?? null) {
					ob_end_clean();
				} else {
					echo ob_get_clean();
				}
			}
			echo '    </div>
    <div class="action">
      ';
			echo LR\Filters::escapeHtmlText(tr_a($cta, 'button primary')) /* line 12 */;
			echo '
      <button class="button secondary">test</button>
    </div>
  </div>
</section>
';
		}
	}
}
