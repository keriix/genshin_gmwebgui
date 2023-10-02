# What is this?
I created this web UI for GM commands so i don't have to type commands into the url every single time i want to use a command for my character lol

This should be used with the docker version of GIO.
https://forum.ragezone.com/threads/genshin-impact-3-2-docker-server-tutorial.1210198/


You can view commands here : https://doc.yuuki.me/docs/commands/gio

There is a GM Handbook as well : https://doc.yuuki.me/GMHandbook

# How to use?
1. Have docker desktop
2. Run this command in the directory of this folder
   
   `docker run -d --name genshin_gmwebgui -p 64999:80 -v ${PWD}:/var/www/html php:7.2-apache`

4. Go to your browser and enter `localhost:64999`
