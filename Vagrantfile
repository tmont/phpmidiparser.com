# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu-1204-amd64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.hostname = "phpmidiparser.local"
  config.vm.synced_folder ".", "/var/www/sites/phpmidiparser.local"
  config.vm.network :forwarded_port, guest: 3306, host: 3306
  config.vm.network :forwarded_port, guest: 80, host: 80
  config.vm.provision :shell, :path => "provision.sh"
end
