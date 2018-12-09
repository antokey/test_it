#!/bin/sh
echo "$(date)"
python3 /home/jieun/project/test_it/crawler/time.py >>  crawling.log
echo "kt">>crawling.log
python3 /home/jieun/project/test_it/crawler/KT/KT.py >> crawling.log
echo "lg">>crawling.log
python3 /home/jieun/project/test_it/crawler/LG_SK/lgcrawler.py >> crawling.log
echo "sk">>crawling.log
python3 /home/jieun/project/test_it/crawler/LG_SK/skcrawler.py >> crawling.log
exit 0
