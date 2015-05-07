<?php
/**
 * @file
 */

// Home directory, used to get Vagrant insecure private key.
$home = drush_server_home();

$aliases['vih'] = array(
  'uri' => 'vih.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/vih.dk',
);
$aliases['vies'] = array(
  'uri' => 'vies.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/vies.dk',
);
$aliases['elev'] = array(
  'uri' => 'elevforening.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/elevforening.vih.dk',
);
$aliases['fond'] = array(
  'uri' => 'fond.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/fond.vih.dk',
);
$aliases['kursuscenter'] = array(
  'uri' => 'kursuscenter.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/kursuscenter.vih.dk',
);
$aliases['bhd'] = array(
  'uri' => 'bhd.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/bluehorndigital.com',
);
$aliases['kntv'] = array(
  'uri' => 'kntv.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/kntv',
);
$aliases['kntv.remote'] = array(
  'uri' => 'kntv.loudonco.com',
  'remote-host' => '104.236.158.44',
  'root' => '/var/www/kntv',
);
$aliases['iuc'] = array(
  'uri' => 'iuc.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/iuc',
);
$aliases['brx'] = array(
  'uri' => 'brx.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/beautyrx/www',
);
$aliases['discimport'] = array(
  'uri' => 'discimport.clients.dev',
  'remote-host' => '10.22.22.20',
  'remote-user' => 'vagrant',
  'ssh-options' => '-p 22 -i ' . $home . '/.vagrant.d/insecure_private_key',
  'root' => '/var/www/discimport',
);
