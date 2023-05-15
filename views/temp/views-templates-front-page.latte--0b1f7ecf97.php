<?php

use Latte\Runtime as LR;

/** source: C:\wamp64\www\wptemplate/wp-content/themes/wptemplate/views/templates/front-page.latte */
final class Template0b1f7ecf97 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '

<div class="content">
	';
		echo LR\Filters::escapeHtmlText(the_content()) /* line 7 */;
		echo '
</div>


';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 11 */;
	}
}
