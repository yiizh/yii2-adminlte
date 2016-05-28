# yii2-adminlte

Yii 2.0 [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE/index.html) 扩展。包含了 AdminLTE 开源版本的所有皮肤，可以更加灵活的使用 AdminLTE。

## Requirements

所有使用 yii 2.0 的框架都可使用。

##  Installation

推荐使用 [Composer](http://getcomposer.org/download/) 安装。

执行

```
php composer.phar require --prefer-dist yiizh/yii2-adminlte
```

或添加

```json
"yii2-adminlte": "*"
```

到项目的 `composer.json` 文件.

Usage
-----

在需要用到的视图文件(一般为布局文件 `views/layouts/main.php`)中，添加如下代码

```php
use yiizh\adminlte\AdminLTEAsset;

AdminLTEAsset::register($this);
```

使用皮肤时添加如下代码，下面以 `blue` 皮肤为例:

```php
use yiizh\adminlte\AdminLTEBlueAsset;

AdminLTEBlueAsset::register($this);
```