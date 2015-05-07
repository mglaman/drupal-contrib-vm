# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "geerlingguy/ubuntu1404"
  config.ssh.insert_key = false

  config.vm.provider :virtualbox do |v|
    v.name = "contribdev"
    v.memory = 4096
    v.cpus = 4
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--ioapic", "on"]
  end

  config.vm.hostname = "contrib.dev"
  config.vm.network :private_network, ip: "10.22.22.10"

	config.vm.define :contribdev do |contribdev|
  end

  config.vm.synced_folder "./sites", "/var/www", id: "sites", type: "nfs"

  # Ansible provisioner.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = ".ansible-env/playbook.yml"
    ansible.inventory_path = ".ansible-env/inventory"
    ansible.sudo = true
#		ansible.verbose = "v"
	end

end
