# Crontab 

## 啟動crontab

```
sudo service cron start
```


## 調整crontab時間

### 之前雖然將crontab的時間調整成台北時間，但是後來時間不知為何跑掉了，按照[之前的做法](https://kuiming.github.io/BenBlog/article/%E5%BE%9E%E9%9B%B6%E9%96%8B%E5%A7%8BRaspberry_Pi.html)卻無法改回時間。後來，執行`sudo raspi-config`再調整一次時間，然後直接執行`sudo service cron restart`，時間就重新調整回台北時間了。

## 設定排程

### 每五分鐘執行一次

```
*/5 * * * * command
```

### 分散執行時間：為了避免同一時間太多工作執行，佔用太多CPU和Memory。

```
5,15,25,35,45,55 * * * * CMD1
0,10,20,30,40,50 * * * * CMD2
```

