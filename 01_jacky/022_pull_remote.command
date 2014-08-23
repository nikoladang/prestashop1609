#!/bin/bash
#git pull https://github.com/jackcommon/prestashop1609.git
git pull
mysql -u prestashop1609 -pprestashop1609vnaka prestashop1609 < db_sync.sql
mysql -u prestashop1609 -pprestashop1609vnaka prestashop1609 < db_update_remote.sql
