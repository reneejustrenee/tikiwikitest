<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: ArticleEdited.php 44444 2013-01-05 21:24:24Z changi67 $

/**
 * Class for article_edited events 
 */
class Reports_Send_EmailBuilder_ArticleEdited extends Reports_Send_EmailBuilder_Abstract
{
	public function getTitle()
	{
		return tr('Edited articles:');
	}
	
	public function getOutput(array $change)
	{
		$base_url = $change['data']['base_url'];

		$output =  '<u>' . $change['data']['user'] . '</u> ' . tra('edited the article') . 
							" <a href=\"{$base_url}tiki-read_article.php?articleId=" . $change['data']['articleId'] . "\">" . $change['data']['articleTitle'] . "</a>.";
		
		return $output;
	}
}
