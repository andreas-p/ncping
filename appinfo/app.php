<?php
/**
 * ncping
 *
 * @author Andreas Pflug <pflug@pse-consulting.de>
 */

namespace OCA\NcPiong\AppInfo;

use OCP\AppFramework\App;

$app = new App('testapp');
$container = $app->getContainer();

$container->query('OCP\INavigationManager')->add(function () use ($container)
{
	$urlGenerator = $container->query('OCP\IURLGenerator');
	$l10n = $container->query('OCP\IL10N');
	return [
		'id' => 'ncping',
		'order' => 999,
		'href' => $urlGenerator->linkToRoute('ncping.page.index'),
		'icon' => $urlGenerator->imagePath('ncping', 'ncping.svg'),
		'name' => $l10n->t('NcPing'),
	];
});