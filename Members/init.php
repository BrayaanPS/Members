<?php 
/*
 *	Made by Partydragen And Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-dev
 *
 *  License: MIT
 *
 *  Core initialisation file
 */

// Ensure module has been installed
$module_installed = $cache->retrieve('module_members');

// Initialise forum language
$members_language = new Language(ROOT_PATH . '/modules/Members/language', LANGUAGE);

// Define URLs which belong to this module
$pages->add('Members', '/members', 'pages/members.php', 'members', true);

// Add link to navbar
$navigation->add('members', $members_language->get('members', 'members'), URL::build('/members'));
