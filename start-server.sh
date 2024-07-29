#! /bin/bash

# Config file
CONFIG_FILE=/var/www/php_stock_analyzer/php_stock_analyzer.conf
LINK_NAME=/etc/apache2/sites-available/php_stock_analyzer.conf

if [ ! -e "$CONFIG_FILE" ]; then
    echo "Configuration file $CONFIG_FILE does not exist."
    exit 1
fi

if [ -e "$LINK_NAME" ]; then
    sudo rm "$LINK_NAME"
fi

startserver() {
    sudo ln -s "$CONFIG_FILE" "$LINK_NAME"
    sudo a2ensite php_stock_analyzer.conf
    sudo systemctl reload apache2
}
startserver

stopserver() {
    sudo a2dissite php_stock_analyzer.conf
    sudo systemctl reload apache2
}

trap stopserver EXIT

tail -n 20 -f /var/www/php_stock_analyzer/logs/error.log