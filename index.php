<?php

/* 
 * Copyright (C) 2015 RTS, Ltd. All rights reserved.
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$params = $app->getTemplate(true)->params;

$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/common.js');

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css');

JHtml::_('bootstrap.loadCss', false, $this->direction);

if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <jdoc:include type="head" />
</head>
<body>
    <div id="page-wrapper">
        <div id="header">
            <div id="logo"></div>
            <div id="address"></div>
            <div id="contacts"></div>
        </div>
        <div id="top-menu"></div>
        <div id="content-wrapper">
            <div id="content">
                <div id="workarea-wrapper">
                    <div id="left-menu"></div>
                    <div id="banner"></div>
                    <div id="workarea">
                        <div id="workarea-inner"></div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div id="sidebar-inner"></div>
            </div>
        </div>
        <div id="space-for-footer"></div>
    </div>
    <div id="footer">
        <div id="copyright"></div>
        <div id="bottom-menu"></div>
    </div>
</body>
</html>

