This repository includes scripts to store sensor data which is used by luftdaten.info

-> php
	-> data.php // script to store data into a sqlite file

To log data with data.php file you can do the next steps:
	1. copy the file to your web-server (which must support sqlite v3 and php)
	2. configure your sensor
	2.1 start web ui of your sensor and go to "Konfiguration" section ( http://<sensor ip>/config ) 
	2.2 activate "An eigene API senden"
	2.3 set "Server" host name or ip
	2.4 set "Pfad" on which is the data.php available
	2.5 save config
	3. Now the data are stored on the web-server in the default file "sensors.sqlitee" (which is configurable in data.php file under $dbFilename)