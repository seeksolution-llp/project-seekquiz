@echo off
goto :main

:main
git status
git add .
set /p message = Enter the message commit message:
git commit -m %message
git pull
git push

