<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: TypeFactory.php 47965 2013-10-10 18:40:07Z lphuberdeau $

class Search_Elastic_TypeFactory implements Search_Type_Factory_Interface
{
	function plaintext($value)
	{
		return new Search_Type_PlainText($value);
	}

	function wikitext($value)
	{
		return new Search_Type_PlainText($value);
	}

	function timestamp($value)
	{
		if (is_numeric($value)) {
			return new Search_Type_PlainText(gmdate(DateTime::W3C, $value));
		} else {
			return new Search_Type_PlainText(null);
		}
	}

	function identifier($value)
	{
		return new Search_Type_Whole($value);
	}

	function numeric($value)
	{
		return new Search_Type_Whole((float) $value);
	}

	function multivalue($values)
	{
		return new Search_Type_MultivaluePlain(array_values((array) $values));
	}

	function sortable($value)
	{
		return new Search_Type_PlainText($value);
	}
}

