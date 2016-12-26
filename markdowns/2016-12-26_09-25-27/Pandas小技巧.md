# Pandas 小技巧

## Extract formatted strings specified by date_format

### `datetime`的`datetime.strftime`原本就是用來取出date format中的數值，轉換成特定的string，例如：

```
datetime.datetime.strftime(df_pd.ts[0],"%Y-%m")
```
`2016-12`

### 但是`datetime.strftime`無法一次處理一個array，所以對付array只能用迴圈處理。好在有`Pandas`，例如：

```
df_pd.ts.dt.strftime('%S')
```

### 一次就能把`df_pd`的`ts`欄位中所有資料處理好，從中取出秒數。


---

## Return indices of half-open bins to which each value of data

### `Pandas`中`cut`，可以按照目前資料數值，分成指定個數的集群，並標上label。例如：

```
pd.cut(df_pd.second,6,labels=list(range(0,60,10)))
```
### 把秒數分成六等份，並且標上0,10,20,30,40,50。


---

## reset index of hierarchical index

### `Pandas`的`groupby`跟R的`dplyr`的`group_by`很像，但就差這麼一點點，差的這一點點真的會讓人非常不爽。`dplyr`的`group_by`之後再`summarise`，資料會完整地展開，每一個欄位都會填好填滿。但如果是用`Pandas`的`groupby`之後再做處理，就會呈現[hierarchical index](https://www.google.com.tw/search?q=hierarchical+index+pandas&espv=2&biw=1280&bih=703&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjPoZL2z5DRAhXLipQKHfChCtkQ_AUIBigB#imgrc=N4RYl5e-bzmWlM%3A).....

### 所以要想辦法flatten hierarchical index dataframe！

```
df_10sec=df_pd.groupby(["machine_id","year","mon","day","hour","mins","sec"]).mean()
df_10sec.reset_index(inplace=True)
```
