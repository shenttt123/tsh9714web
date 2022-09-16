#!/bin/bash
git add --all
read -p "Enter commit: " commit
git commit -m $commit
read -p
ssh tonyyydf@pi 'bash -s' <<'ENDSSH'
echo "test"
cd /var/www/firstweb
ls
sudo git pull origin master
sleep 3s
sudo service apache2 restart