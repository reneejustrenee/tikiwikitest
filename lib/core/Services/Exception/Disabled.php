<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Disabled.php 44444 2013-01-05 21:24:24Z changi67 $

class Services_Exception_Disabled extends Services_Exception
{
	public static function check($preference)
	{
		global $prefs;

		if ($prefs[$preference] != 'y') {
			throw new self($preference);
		}
	}

	function __construct($preference)
	{
		parent::__construct(tr('Feature disabled: %0', $preference), 403);
	}
}

