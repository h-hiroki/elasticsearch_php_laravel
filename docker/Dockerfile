FROM amazonlinux:2.0.20190228

# RUN
# PHPとPHP-FPMのインストール
RUN amazon-linux-extras install php7.3

# 依存ライブラリのインストール
RUN yum update -y
RUN yum install -y git
RUN yum install -y gmp-devel
RUN yum install -y libmcrypt
RUN yum install -y libpng-devel
RUN yum install -y libxml2-devel
RUN yum install -y libmcrypt-devel
RUN yum install -y libmemcached-devel
RUN yum install -y openssh-client make grep autoconf gcc libc-dev zlib-dev cyrus-sasl-dev libmemcached-dev zlib-dev

# extensionのインストール
RUN yum install -y php-gmp
RUN yum install -y php-xml
RUN yum install -y php-mbstring
RUN yum install -y php-pdo
RUN yum install -y php-tokenizer
RUN yum install -y php-dom
RUN yum install -y php-pdo_mysql
RUN yum install -y php-pear
RUN yum install -y php-devel
RUN yum install -y php-gd
RUN yum install -y php-zip

RUN pecl install memcached-3.1.3
RUN echo extension=memcached.so >> /etc/php.ini


# composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN curl -sL https://rpm.nodesource.com/setup_10.x | bash
RUN yum install -y nodejs
