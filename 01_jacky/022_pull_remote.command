#!/bin/bash
#git pull https://github.com/jackcommon/prestashop1609.git
git pull
mysql -u tieucanh -ptieucanhvnaka tieucanh < db_sync.sql
mysql -u tieucanh -ptieucanhvnaka tieucanh < db_update_remote.sql
