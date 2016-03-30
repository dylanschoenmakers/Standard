# Opifer standard CMS

A Symfony 2.8 installation with the [Opifer/Cms](https://github.com/Opifer/Cms) package supplied with an easy to install vagrant box.


## Prerequisites

You'll need these if you want to boot the development environment in a vagrant box (recommended).

* [Virtualbox](https://www.virtualbox.org/) 
* [Vagrant](https://www.vagrantup.com/)
* Node.js / NPM [installation instructions](https://docs.npmjs.com/getting-started/installing-node)
* Composer has a valid Github token (see [Configure composer][configure-composer])

## Installation

Get the project up and running on your local development machine by these simple steps:

* Git clone this repository
* Edit vars in .ansible/group_vars/vagrant (recommended)
* Run ```vagrant up``` and wait
* Browse to <http://192.168.33.10/app_dev.php/admin/> when ready

Default username and password is admin:vagrant.


### Configure composer [configure-composer]

Composer needs a Github oauth token to prevent the API limiter from blocking you downloading packages. 
Create one on <https://github.com/settings/applications> and run ```composer config --global github-oauth.github.com <TOKEN>``` on your local machine.