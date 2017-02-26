# wamp-Nodemcu
NodeMcu connecting to MySQL via WAMP

## Download Wamp form 
[Download](http://www.wampserver.com/ )

## Get Method PHP 

http://<IPAddress>/db.php?rla=1&rlb=1&rlc=1&rld=1&sta=1&stb=1&stc=1

Need to setup some file before  run the server 
#httpd
<Directory />
	Options FollowSymLinks
    AllowOverride none    
    Require all denied    
</Directory>

DocumentRoot "${INSTALL_DIR}/www"
<Directory "${INSTALL_DIR}/www/">
 
#   onlineoffline tag - don't remove
    Require all granted
    
    Allow from All
</Directory>
#  Virtual Hosts
<VirtualHost *:80>
	ServerName localhost
	ServerAlias localhost
	DocumentRoot c:/wamp/www
	<Directory  "c:/wamp/www/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost>
#

