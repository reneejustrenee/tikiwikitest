{* $Id: tiki-wizard_admin.tpl 48654 2013-11-21 23:02:18Z arildb $ *}

{* {title}{tr}Admin Wizard{/tr}{/title} *}

<form action="tiki-wizard_admin.php" method="post">
{include file="wizard/wizard_bar_admin.tpl"}
<div id="wizardBody"> 
{include file="{$wizardBody}"}
</div>
{include file="wizard/wizard_bar_admin.tpl"}
</form>
