#!/bin/bash
pwd=$(cd `dirname $0`; pwd)
php ${pwd}/timestamp.php "${1}"
