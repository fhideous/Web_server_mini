<?php

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = 'asad1213kak.dohdfgaasdl;;1KSFalp{]a]as}fkasfllqwr1';
$i=0;                     
$i++;
$cfg['Servers'][$i]['user'] = 'admin';
$cfg['Servers'][$i]['password'] = 'admin';
$cfg['Servers'][$i]['auth_type']     = 'config';

$cfg['TempDir'] = '/tmp';

$cfg['Servers'][$i]['hide_db'] = '^(information_schema)';
?>