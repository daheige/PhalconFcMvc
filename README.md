# PhalconFcMvc

>####基于C扩展框架Phalcon构建的mvc框架结构,目前已实现应用模块化、Cli处理每个模块的任务。

<code>ps: [Phalcon框架安装教程](http://www.jianshu.com/p/8da93b1ff3f4)</code>

    框架结构如下：

```
PhalconFcMvc/
     |----app
     |      |----Helpers  //工具类目录
     |      |----Librarys //自定义类库目录
     |      |----Models   //数据模型目录
     |      |----Modules  //模块目录
     |      |      |----Frontend  //前台模块
     |      |      |      |----Controllers //控制器层
     |      |      |      |      |----IndexController.php
     |      |      |      |----Services //服务层
     |      |      |      |----Tasks //任务层
     |      |      |      |      |----MainTask.php //主任务
     |      |      |      |----Views //页面层
     |      |      |      |      |----index
     |      |      |      |      |      |----index.phtml
     |      |      |      |----Module.php  //前台模块
     |      |      |----Backend  //后台模块
     |      |      |      |----Controllers //控制器层
     |      |      |      |      |----IndexController.php
     |      |      |      |----Services //服务层
     |      |      |      |----Tasks //任务层
     |      |      |      |      |----MainTask.php //主任务
     |      |      |      |----Views //页面层
     |      |      |      |      |----index
     |      |      |      |      |      |----index.phtml
     |      |      |      |----Module.php  //后台模块
     |      |      |----Api  //接口模块
     |      |      |      |----Controllers //控制器层
     |      |      |      |      |----IndexController.php
     |      |      |      |----Services //服务层
     |      |      |      |----Tasks //任务层
     |      |      |      |      |----MainTask.php //主任务
     |      |      |      |----Views //页面层
     |      |      |      |      |----index
     |      |      |      |      |      |----index.phtml
     |      |      |      |----Module.php  //接口模块
     |      |----Providers  //供应商
     |      |      |----ModuleProvider.php //模块供应商
     |      |      |----TaskProvider.php //任务供应商
     |      |----Bootstrap.php  //应用入口
     |      |----CliTask.php  //cli任务应用
     |----bootstrap
     |      |----autoload.php //项目自动加载
     |----config
     |      |----app.php //应用配置
     |      |----modules.php  //模块配置
     |----public
     |      |----.htaccess
     |      |----index.php  //项目入口
     |      |----css
     |      |----files
     |      |----img
     |      |----js
     |      |----temp
     |----storage  //缓存
     |      |----cache //缓存目录
     |      |----logs //日志目录
     |      |     |----app  //app日志目录
     |      |     |----cli  //cli日志目录
     |----.htrouter.php
     |----.htaccess
```

>1、composer update

>2、创建storage目录，并设置777权限