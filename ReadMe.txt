1. Install arduino ide and xampp control
2. Paste RFID folder in the htdocs folder inside xampp folder(i.e. folder where you installed xampp)
3. Open arduino code in arduino ide, change IP address in line in the code i.e -> http.begin("http://192.168.74.56/test/RFID/post.php");  //Specify request destination 
4. You may also change ssid and pass
5. Upload the code to nodeMCU
6. Open Xampp control Panel using windows search bar -> start apache and mysql
7. Click on admin button in the MYSQL row.
8. Click on New on the left side -> type rfiddb in Database name box -> click on Create
9. Import the rfiddb.sql file in the database by selecting rfiddb-> read this blog -> https://help.dreamhost.com/hc/en-us/articles/214395768-phpMyAdmin-How-to-import-a-database-or-table
10. now type -> https://localhost/RFID/   in a new chrome tab -> it must open the website for RFID A&M System
11. Ready to use
