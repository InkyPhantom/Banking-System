# Banking-System
a banking database that i made for my dbms subject using mysql and php frontend
requirements are 
xammp and chrome
refer to the video to understand how to setup xammp and php.
https://youtu.be/3B-CnezwEeo

1.now in order to setup on your laptop ...after installing xammp ....go to c drive in windows->inside xammp-> and go inside the htdocs folder and download the dbms folder in there.

2.next step is to go into the phpmyadmin and make a database called "bank" (2:45 in the video link below) then go to sql tab( 6:35) on the top bar of "bank" database and paste all the sql code and click go on the bottomright of the sql querybox......it will take a few min to setup.https://youtu.be/YFlIw4KMpVM

it still wont work......be patient....

3.oh also create a user with name "banking_website" and password "abcd" in the phpmyadmin page(2:00 min in the link given below)......
refer this vid for the exact way to do this .....https://youtu.be/zpTlJ6dtOxA (32 sec)


then lastly go to chrome and type localhost/dbms/login.php and mostly it will start to work....


anyways common troubleshooting tips
1.xammp not installing...argh most annoying....make sure UAC is switched down low and antivirus is switched off
2.Xammp is set up and apache starts but mysql isnt working....go to taskmanager and click more details ...then inside background processes close the mysql task and end task...then retry to start mysql in xammp control panel.... it should work
