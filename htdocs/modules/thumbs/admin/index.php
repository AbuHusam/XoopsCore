<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * thumbs module
 *
 * @copyright 2014 The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license   GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package   thumbs
 * @author    Mage Grégory (AKA Mage)
 */
include __DIR__ . '/header.php';

$xoops = Xoops::getInstance();

$xoops->header();

$admin_page = new \Xoops\Module\Admin();
$admin_page->displayNavigation('index.php');

$admin_page->displayIndex();

$xoops->footer();
