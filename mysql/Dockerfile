# 设置镜像源
FROM mysql:5.7

# 设置作者
MAINTAINER VikinDev "vikindev@outlook.com"

# 复制startup文件至镜像某路径中
# 命令详情可google "Mysql 命令行"
# 资料1：https://dev.mysql.com/doc/refman/5.7/en/drop-user.html
# 资料2：http://blog.51yip.com/mysql/1159.html

# DROP USER IF EXISTS 'MYSQL_USER';   判断用户是否存在，不存在不产生错误
# CREATE USER 'MYSQL_USER'@'%';       创建用户
# CREATE DATABASE IF NOT EXISTS MYSQL_DATABASE;   创建数据库,在该库不存在的情况下
# GRANT ALL ON MYSQL_DATABASE.* TO 'MYSQL_USER'@'%' IDENTIFIED BY 'MYSQL_PASSWORD';   设置用户拥有数据库下所有操作权限，设置时携带用户密码
ADD startup /etc/mysql/startup

# 将/var/lib/mysql/目录所有者改为root组中的mysql用户
RUN chown -R mysql:root /var/lib/mysql/

# 设置参数和默认值
ARG MYSQL_DATABASE=homestead
ARG MYSQL_USER=homestead
ARG MYSQL_PASSWORD=secret
ARG MYSQL_ROOT_PASSWORD=root

# 设置环境变量
ENV MYSQL_DATABASE=$MYSQL_DATABASE
ENV MYSQL_USER=$MYSQL_USER
ENV MYSQL_PASSWORD=$MYSQL_PASSWORD
ENV MYSQL_ROOT_PASSWORD=$MYSQL_ROOT_PASSWORD

# 使用sed编辑startup文件
# http://man.linuxde.net/sed

# 对设置的参数使用sed进行替换
RUN sed -i 's/MYSQL_DATABASE/'$MYSQL_DATABASE'/g' /etc/mysql/startup && \
    sed -i 's/MYSQL_USER/'$MYSQL_USER'/g' /etc/mysql/startup && \
    sed -i 's/MYSQL_PASSWORD/'$MYSQL_PASSWORD'/g' /etc/mysql/startup

# 复制mysql的配置文件到镜像中
ADD my.cnf /etc/mysql/conf.d/my.cnf

# 启动mysql
CMD ["mysqld", "--init-file=/etc/mysql/startup"]

# 设置监听端口
EXPOSE 3306