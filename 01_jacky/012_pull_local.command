#!/bin/bash
git pull https://github.com/jackcommon/prestashop1609.git
mysql -u root prestashop1609 < db_sync.sql
mysql -u root prestashop1609 < db_update_local.sql