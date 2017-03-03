[![Version 0.1](https://img.shields.io/badge/Version-0.1-brightgreen.svg)](https://github.com/VikinDev/YafDock)
[![Yaf master](https://img.shields.io/badge/Yaf-master-brightgreen.svg)](https://github.com/laruence/yaf)
###Install

Clone this repository on your project root directory:

```bash
git clone git@github.com:VikinDev/YafDock.git
```

###Usage

#####1、Build container

Run Containers: (Make sure you are in the YafDock folder before running the docker-compose commands).

```bash
docker-compose build
```
#####2、Running container

```bash
docker-compose up -d nginx php-fpm workspace
```
#####3、Enter the Workspace container

```bash
docker-compose exec workspace bash
```

###Stop

#####1、Close all running Containers

```bash
docker-compose stop
```
#####2、To stop single container 

```bash
docker-compose stop {container-name}
```

###On PhpStrom IDE development 

#####1、Use phpstrom open "YafDock/workspace/application"

#####2、Editor test.php

#####3、Refresh the localhost


### Docker file reference
[docker file gitbooks](https://yeasy.gitbooks.io/docker_practice/content/image/dockerfile/)