# What is this?
I created this web UI for GM commands so i don't have to type commands into the url every single time i want to use a command for my character lol

This should be used with the docker version of GIO.

# How to use?
1. Have docker desktop
2. Run this command in the directory of this folder
   `docker run -d --name genshin_gmwebgui -p 64999:80 -v ${PWD}:/var/www/html php:7.2-apache`

3. Go to your browser and enter 'localhost:64999'

# To-do list
- Add frequently used commands as buttons
- Autocomplete for commands
