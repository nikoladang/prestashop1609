#!/bin/bash
cd $(dirname "$0")
mysqldump -u root prestashop1609 > db_sync.sql
#git add db_sync.sql
#git commit -m "commit new file db_sync.sql"
#git push https://github.com/jackcommon/tieucanh.git
