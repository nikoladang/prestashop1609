#!/bin/bash
mysqldump -u prestashop1609 -pprestashop1609vnaka prestashop1609 > db_sync.sql
git add db_sync.sql
git commit
git push https://github.com/jackcommon/prestashop1609.git
