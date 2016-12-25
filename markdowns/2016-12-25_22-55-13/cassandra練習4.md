# Operate Cassandra with Python

## 安裝套件

### 在Python上操作Cassandra，需要`cassandra-driver`。

```
pip install cassandra-driver
```


## 問題

### 用Python的`cassandra`套件，抓回資料，可能會遇到無法直接轉成pandas Dataframe的問題。


## 解法

### 連到Cassandra
```
from cassandra.cluster import Cluster
cluster = Cluster(['your IP'])
session=cluster.connect('your KEYSPACE')
```

### - `NumpyProtocolHandler`讓每個欄位的資料可以存成Numpy array
### - `tuple_factory`則是讓欄位名稱與資料以tuple的方式呈現。
### - 原本預設讀取資料的筆數是5000，改變`default_fetch_size`即可增加比數，2147483647則是Java的最大數，設定值不能超過此數。
```
from cassandra.protocol import NumpyProtocolHandler
from cassandra.query import tuple_factory
session.row_factory = tuple_factory
session.client_protocol_handler = NumpyProtocolHandler
session.default_fetch_size=2147483647
```

```
data=session.execute("select * from data;")
```
### 讀完資料後，會發現資料的型態會長得像...

```
[{'col1': array([1,2,3,..,98,99,100], dtype=int),
  'col2': array([datetime.datetime(2016, 12, 23, 18, 25, 31),
         datetime.datetime(2016, 12, 19, 21, 42, 44),
         datetime.datetime(2016, 12, 24, 21, 30, 52), ...,
         datetime.datetime(2016, 12, 24, 22, 5, 24),
         datetime.datetime(2016, 12, 15, 3, 41, 30),
         datetime.datetime(2016, 12, 20, 16, 7, 40)], dtype=object),
  'col3': array([UUID('32095806-c93d-11e6-ad9d-024228beed03'),
         UUID('13988324-c634-11e6-bbdb-02de4a3b43bd'),
         UUID('407c7006-ca20-11e6-ad9d-02de28beed03'), ...,
         UUID('124d8614-ca25-11e6-ad9d-02wq28beed03'),
         UUID('60673764-c278-11e6-865e-02qt4a3b43bd'),
         UUID('71843070-c6ce-11e6-959c-02wq32b716c2')], dtype=object)}]
```


### 轉成pandas.DataFrame

```
df_pd=pd.DataFrame(data.current_rows[0])
```
