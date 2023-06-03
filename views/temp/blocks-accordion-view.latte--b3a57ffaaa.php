<?php

use Latte\Runtime as LR;

/** source: C:\wamp64\www\wptemplate\wp-content\themes\wptemplate\gutenberg\blocks\accordion/view.latte */
final class Templateb3a57ffaaa extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section class="block-accordion container">
';
		foreach ($accordion as $item) /* line 15 */ {
			echo '  <article aria-expanded="false">
    <button>
';
			ob_start(fn() => '');
			try {
				echo '      <h2>';
				ob_start();
				try {
					echo LR\Filters::escapeHtmlText($item['title']['text']) /* line 17 */;

				} finally {
					$ʟ_ifc[0] = rtrim(ob_get_flush()) === '';
				}
				echo '</h2>
';

			} finally {
				if ($ʟ_ifc[0] ?? null) {
					ob_end_clean();
				} else {
					echo ob_get_clean();
				}
			}
			echo '    </button>
';
			ob_start(fn() => '');
			try {
				echo '    <p>';
				ob_start();
				try {
					echo LR\Filters::escapeHtmlText($item['content']['text']) /* line 19 */;

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
			echo '  </article>
';

		}

		echo '</section>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['item' => '15'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
