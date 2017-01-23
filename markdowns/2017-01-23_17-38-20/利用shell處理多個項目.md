### 在Linux上，如果一次要處理多個項目的話，以下介紹兩種做法：


### 1. 利用*`* 把要處理的項目包起來：

```
rm `ls | grep "*.h5"`
```
### 其實就是先執行`ls`，利用`grep`抓到h5檔，然後再利用`rm`刪除。

### 2. 利用`xargs`：

```
ls | grep "*.h5" | xargs rm
```

### 一樣是執行`ls`和`grep`，抓到`h5`檔，然後透過`xargs`傳給`rm`，刪除檔案。



### 3. 某些指令會輸出多個欄位，例如：`ps`，可以看到目前進行的各項process以及相關資訊，所以會有很多欄位，這時可以利用`awk`選擇需要輸出的欄位。

```
ps -ef | grep 'python' | awk -F " " '{print $2}' | xargs kill -9
```
### `ps`取得執行中的process之後，只抓出python相關的process，利用`awk`去找第二個欄位的資料（`-F`後面的空字串，是代表欄位之間以空白相隔），再透過`xargs`傳給`kill`殺掉process。