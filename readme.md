# Laravel Minishop 微信迷你小店

## 概述

Laravel Minishop 基于以下开源程序集成:

* Laravel 5.5
* Wordpress 4.7
* Opencart 3.0
* WeEngine 1.0

Laravel Minishop is a free open source ecommerce platform for online merchants. 

Laravel Minishop provides a professional and reliable foundation from which to build a successful online store.

## 环境依赖

* Mysql 5.7+
* PHP 7.0+
* Apache 服务器需要配置 mod_rewrite, Nginx 需要配置好伪静态规则(与 Laravel 相同)
* PHP mbstring, curl, openssl, mcrypt, gd 等扩展(以安装向导检测信息为准)
* Memcached 或者 Redis 缓存

## 安装


1. 安装需要配置虚拟主机(VirtualHost), 将网站根目录对应到 `public/` 目录, 例如 Apache 的配置

    ##### **重要: 必须安装在域名根目录下, 不能在某个网站子目录下(比如: `http://localhost/minishop`) 否则会路径出错**

        <VirtualHost *:80>
             DocumentRoot "D:/www/minishop.dev/public"
             ServerName www.minishop.dev
        </VirtualHost>

    请自行配置好 `Composer` 执行环境, 命令行窗口进入 `D:\www\` 执行安装:

        composer create-project minishop/minishop minishop.dev
    
    即可将 Laravel Minishop 安装到 `minishop.dev` 目录下, 如果执行时间很长, 可能是你没有配置 Composer 国内镜像, 请在上面的安装命令执行前先执行

        composer config -g repo.packagist composer https://packagist.phpcomposer.com

    配置好你的 Composer 国内镜像再进行安装, 可以参考 [Composer 中国镜像站点](http://www.phpcomposer.com)

2. 等待 Composer 代码下载完毕后, 用浏览器访问网站根目录(比如: http://www.minishop.dev/) 

    在安装向导页面填写数据库信息(需要先用 phpmyadmin, navicat 等工具创建好数据库)
    
3. 后台访问网址: `http://您的域名/admin` 后台用户名与密码在安装向导页面设置

### 注意

* Apache 服务器需要开启 mod_rewrite 伪静态扩展, 并保证扩展已经正确配置好
* nginx 伪静态规则配置请参考 Laravel Nginx 伪静态设置

## License

[GNU General Public License version 3 (GPLv3)](https://github.com/opencart/opencart/blob/master/license.txt)

## Links

- [点击加入群: 665863675﹝Laravel Minishop﹞](https://jq.qq.com/?_wv=1027&k=5qYJy7I)
- [github 发布页面](https://github.com/minishop/minishop)
- [问题反馈](https://github.com/minishop/minishop/issues)
- [文档](https://github.com/minishop/minishop/wiki)
- [参与开发(Pull Request)](https://github.com/minishop/minishop/pulls)

