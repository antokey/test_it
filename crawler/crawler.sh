#!/bin/sh
echo "$(date)"
python3 /home/jieun/project/test_it/crawler/time.py >>  crawling.log
echo "kt">>crawling.log
python3 /home/jieun/project/test_it/crawler/KT/kt_crawler.py >> crawling.log
echo "lg">>crawling.log
python3 /home/jieun/project/test_it/crawler/LG_SK/lg_crawler.py >> crawling.log
echo "sk">>crawling.log
python3 /home/jieun/project/test_it/crawler/LG_SK/sk_crawler.py >> crawling.log
exit 0
