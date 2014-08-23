#!/bin/bash
mysqldump -u tieucanh -ptieucanhvnaka tieucanh > db_sync.sql
git add db_sync.sql
git commit
git push https://github.com/jackcommon/prestashop1609.git
