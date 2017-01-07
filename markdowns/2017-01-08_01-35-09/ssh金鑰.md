# ssh key

## 產生ssh key

```
ssh-keygen -t rsa -f ~/.ssh/my-ssh-key -C [USERNAME]
cat ~/.ssh/my-ssh-key.pub
```
### 執行完上面的指令，.`ssh/`資料夾內就會有private key與public key，my-ssh-key.pub是public key，my-ssh-key是private key

## 放private key到`.ssh/`

### 當需要登入遠端server時，必須把在server所提供的private key放入本地端的`.ssh/`。

```
cd .ssh
mv ../Downloads/aws01.pem .
chmod 400 aws01.pem
```
## 以private key登入server

```
ssh -i aws01.pem ec2-user@<IP>
```

## 加入他人的public key

### 讓其他人登入自己的server，可以幫對方加public key到authorized_keys

```
cd .ssh
nano authorized_keys
```
###接著，貼上對方的public key即可。