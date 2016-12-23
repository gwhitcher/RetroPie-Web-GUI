#RetroPie Web GUI

RetroPie Web Gui is for managing your roms in RetroPie in a nice web interface.  Developed by [George Whitcher](http://georgewhitcher.com)

###Requirements

1. Apache is required.  Install it by running the following command `sudo apt-get install apache2`
1. PHP is required.  Install it by running the following command `sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt`

###Installation
1. Install RetroPie Web GUI by typing the following commands `cd /var/www/html/`.  **See troubleshooting for help**
1. Now type git clone https://github.com/gwhitcher/RetroPie-Web-GUI.git
1. Setup a symbolic link to your roms by entering the following `ln -s /home/USERNAME/RetroPie/roms /var/www/home/RetroPie-Web-GUI/roms`.  For instance if you are using the precompiled RetroPie then you run `ln -s /home/pi/RetroPie/roms /var/www/home/RetroPie-Web-GUI/roms`.

###Troubleshooting
1. If you are having trouble writing to the /var/www/html/ folder you may have to fix permissions.  Type the following command to fix the permissions `sudo chown USERNAME:USERGROUP /var/www/html/`.  For instance if you are using the precompiled RetroPie then you run `sudo chown pi:pi /var/www/html/`

###Security
1. As I assumed your Raspberry Pi web ports would be closed I did not bother adding security.  If you would like you open your web ports or are worried someone locally could destroy your roms then adding a .htpasswd is suggest. You can do this here: [Dynamic Drive .htpasswd Generator](http://tools.dynamicdrive.com/password/)