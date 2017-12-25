#!/bin/bash


#sleep 1

for i in  kios1 ad1 ad2
do
cat /var/log/pureftpd.log |grep $i | grep jpg |tail -1 | cut -d ' ' -f  8  >>/home/vova/log.txt
done

echo -n > /var/log/pureftpd.log

for i in  kios1 ad1 ad2

do

FILENAME=`cat /home/vova/log.txt |grep $i`

cp -f $FILENAME /var/www/html/foto/"$i".jpg

convert /var/www/html/foto/"$i".jpg -resize 240 /var/www/html/foto/"$i"a.jpg
jpegoptim -m10 -d /var/www/html/foto/$i /var/www/html/foto/"$i"a.jpg
mv /var/www/html/foto/$i/"$i"a.jpg /var/www/html/foto/"$i"b.jpg

done

####/home/vova/cpp4 ##&
#/home/vova/cpp3
#/home/vova/cpp2

echo -n > /home/vova/log.txt
#echo "c"  >> /home/vova/l.txt

#date '+%S'.'%N'  >> /home/vova/l.txt

