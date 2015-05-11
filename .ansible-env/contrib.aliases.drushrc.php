<?php
/**
 * @file
 */

// Home directory, used to get Vagrant insecure private key.
$home = drush_server_home();

$aliases['commerce'] = array(
  'uri' => 'commerce.contrib.dev',
  'remote-host' => '10.22.22.10',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/commerce',
);
$aliases['panelsverse'] = array(
  'uri' => 'panelsverse.contrib.dev',
  'remote-host' => '10.22.22.10',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/panelsverse',
);
$aliases['media'] = array(
  'uri' => 'media.contrib.dev',
  'remote-host' => '10.22.22.10',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/media',
);
$aliases['ck2'] = array(
  'uri' => 'ck2.contrib.dev',
  'remote-host' => '10.22.22.10',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/ck2',
);
