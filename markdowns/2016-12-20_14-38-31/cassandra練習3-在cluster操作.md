# Operate Cassandra with pyspark

## 雷

### 1. 從Cassandra讀取資料後，資料型態為`pyspark.sql.dataframe.DataFrame`，延續上一篇的資料`x`，在jupyter notebook上執行以下程式：

```
def f(i):
	print(i.ind)
x.foreeach(f)
```
### 執行的結果不會在jupyter notebook上印出，會列在terminal上。


### 2. 若在開啟一個`ipynb`執行與Cassandra連線，開啟第二個就無法連線了。

---

## 在DC/OS Cluster上與Cassandra連線

### 這次在DC/OS Cluster上試，OS是CentOS，可以直接在jupyter notebook上載入`cassandra.cluster`和`pyspark`。


```
from pyspark.sql import SparkSession
from pyspark import SparkContext, SparkConf
conf = SparkConf().setAppName('default').set('spark.cassandra.connection.host', "10.140.0.4")
sc = SparkContext(conf=conf)
spark = SparkSession.builder.config(conf=conf).getOrCreate()
```

### `SparkContext`只能設定一次，而且得在`SparkSession`之前做完，如果設定第二次就會吐出error：
### `Cannot run multiple SparkContexts at once;`

### 接下來就跟之前沒什麼兩樣了，不同資料格式之間的轉換。

```
df = spark.read.format("org.apache.spark.sql.cassandra").options(keyspace="raw", table="cpu_usage").load()
df_pd=df.toPandas()
df_rdd=sc.parallelize(df_pd)
```
---

## Reference


- [Running PySpark with Cassandra in Jupyter](https://medium.com/@amirziai/running-pyspark-with-cassandra-in-jupyter-2bf5e95c319#.vhfo89emr)
- [pyspark-cassandra](https://spark-packages.org/package/TargetHolding/pyspark-cassandra)
- [pyspark-cassandra github](https://github.com/TargetHolding/pyspark-cassandra)
- [spark-cassandra-connector](https://github.com/datastax/spark-cassandra-connector/blob/master/doc/15_python.md)
- [spark Python programming guide](http://spark.apache.org/docs/0.9.0/python-programming-guide.html) 