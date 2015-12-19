<?php

/* 
 * Copyright (C) 2015 RTS, Ltd. All rights reserved.
 */

defined('_JEXEC') or die;

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
<html>
<head>
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

