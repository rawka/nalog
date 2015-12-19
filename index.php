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

JHtml::_('bootstrap.loadCss', true, $this->direction);

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
            <div id="logo"><?php echo $logo; ?></div>
            <div id="address"><jdoc:include type="modules" name="position-0" style="none" /></div>
            <div id="contacts"><jdoc:include type="modules" name="position-1" style="none" /></div>
        </div>
        <div id="top-menu"><jdoc:include type="modules" name="position-2" style="none" /></div>
        <div id="content-wrapper">
            <div id="content">
                <div id="workarea-wrapper">
                    <div id="left-menu"><jdoc:include type="modules" name="position-3" style="none" /></div>
                    <div id="banner"><jdoc:include type="modules" name="position-4" style="none" /></div>
                    <div id="workarea">
                        <div id="workarea-inner">
                            <jdoc:include type="message" />
                            <jdoc:include type="component" />
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div id="sidebar-inner"><jdoc:include type="modules" name="position-5" style="none" /></div>
            </div>
        </div>
        <div id="space-for-footer"></div>
    </div>
    <div id="footer">
        <div id="copyright"><jdoc:include type="modules" name="position-6" style="none" /></div>
        <div id="bottom-menu"><jdoc:include type="modules" name="position-7" style="none" /></div>
    </div>
    <jdoc:include type="modules" name="debug" style="none" />
</body>
</html>

