{* $Id: admin_auto_toc.tpl 48189 2013-10-27 04:14:28Z lindonb $ *}

<h1>{tr}Auto TOC setup{/tr}</h1>

<div class="adminWizardIconleft"><img src="img/icons/large/wikipages48x48.png" alt="{tr}Set up the language{/tr}" /></div>
<div class="adminWizardContent">
<fieldset>
	<legend>{tr}Auto TOC options{/tr}</legend>
		{preference name=wiki_inline_auto_toc}
		{preference name=wiki_inline_toc_pos}
		<br>
		<em>{tr}See also{/tr} <a href="http://doc.tiki.org/tiki-index.php?page=Auto+TOC" target="_blank">{tr}Auto TOC{/tr} @ doc.tiki.org</a></em>
</fieldset>
</div>
