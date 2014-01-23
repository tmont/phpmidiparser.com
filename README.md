# phpmidiparser.com
This is the public website for http://phpmidiparser.com/. Or at least,
it will be once I finish this and update it.

## Installation
You will need the following:

- [Vagrant](http://www.vagrantup.com/)
- [VirtualBox](https://www.virtualbox.org/)
- [Composer](https://getcomposer.org/)

Once those are installed:

1. `$ composer install`
2. `$ sudo vagrant up`
3. Add `127.0.0.1 phpmidiparser.local` to your `/etc/hosts` file

And you're done! Visit http://phpmidiparser.local/ to view the site
in your browser.

If you want to compile the less files, you will need
[npm](https://github.com/npm/npm). Run `npm install` to install
less to `node_modules/.bin/lessc`.

To compile the CSS, run

```bash
$ node_modules/.bin/lessc src/static/css/phpmidiparser.less src/static/css/phpmidiparser.css
```
