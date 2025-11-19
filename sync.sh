#!/bin/sh

# Load all variables
. public_html/.ini

# Sync with rsync (faster, shows progress, only uploads changed files)
rsync -avz --progress -e "ssh -p 65002" public_html/ $SSH_USER@$SSH_IP:~/websites/unwPIhhdu/public_html/

echo "Folder synced successfully!"