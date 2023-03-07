# RetroPie Web GUI

RetroPie Web Gui is for managing your roms in RetroPie in a nice web interface.  Developed by [George Whitcher](http://georgewhitcher.com)

### Requirements

1. Apache is required.  Install it by running the following command `sudo apt-get install apache2`
1. PHP is required.  Install it by running the following command `sudo apt-get install php`

### Installation
1. First you need to get your web directory ready. `cd /var/www/html/`.  
1. You will need to fix permissions. `sudo chown pi:raspberry /var/www/html`.
1. Delete `index.html` from your `/var/www/html` directory now that you have permissions.  You can do this manually or by running `rm /var/www/html/index.html`
1. Now type `git clone https://github.com/gwhitcher/RetroPie-Web-GUI.git .`
1. Copy the config `mv /var/www/html/system-config.php.default /var/www/html/system-config.php`
1. Setup a symbolic link to your roms by entering the following `ln -s /home/pi/RetroPie/roms /var/www/html/roms`.
1. Type `hostname` (usually `raspberry`) and then enter that in a browser on your network to view!

### Updating
1. Go to your web directory `cd /var/www/html`.
2. Type `git pull`

### Security
1. By default, RetroPie Web GUI is only accessible on your local network.  If you want to lock down your RetroPie Web GUI: [Dynamic Drive .htpasswd Generator](http://tools.dynamicdrive.com/password/)