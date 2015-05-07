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
  'uri' => 'panelsverse.clients.dev',
  'remote-host' => '10.22.22.10',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/panelsverse',
);
