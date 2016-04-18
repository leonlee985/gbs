===========================
#Yii2-GBS

##简介
Yii2-GBS(General Backend System) 是基于Yii2高级框架及一些扩展编写的一个通用后台基础模板。该后台包含以下功能，可以此为模板，开发各种后台管理系统。
* 权限管理， 通过配置用户-角色-权限-路由来为不同用户分配不同权限。
* 侧导航栏， 可动态增删菜单。
* 基本表单样例， 该样例首先使用gii自动生成model及CRUD的界面,在这基础上做了部分修改。
选用了基本的控件，文本输入框,多选，单选，日期，以及使用自带的bootstrap样式及jquery编写的一个简单动态增减输入框。表格使用了列头带查询的方式，包含了选择查询和输入框查询。

##使用到的第三方组件：
* yii2-admin - RBAC权限管理
* yii2-date-picker-widget 日期控件
* yii2-widget-sidenav 侧导航栏

##安装方法:
1. 安装php, mysql, nginx及相关依赖，建议使用linux
2. 克隆或下载源代码
3. 运行gbs/init(可参照Yii2官方安装文档)
4. 如果对nginx配置不熟悉，可拷贝backend/config/nginx.conf作为模板修改
5. 在mysql中新建数据库yii2advanced, 然后执行backend/data/*.sql
6. 修改common/config/main-local数据库配置
7. 启动nginx,mysql,php-fpm,修改本机host, 浏览器打开配置的域名,如test.com，程序将自动跳转到登录页面，默认用户名密码为admin/123456。

##部分截图:
<img src="https://github.com/leonlee985/gbs/blob/master/img/login.png" width = "283" height = "276" alt="图片名称" align=center />

<img src="https://github.com/leonlee985/gbs/blob/master/img/admin.png" width = "600" height = "304" alt="图片名称" align=center />

<img src="https://github.com/leonlee985/gbs/blob/master/img/Main.png" width = "800" height = "255" alt="图片名称" align=center />

<img src="https://github.com/leonlee985/gbs/blob/master/img/new.png" width = "600" height = "552" alt="图片名称" align=center />

*该系统主要作为模板使用，也可帮助初学者学习Yii2框架。如有喜欢的朋友，欢迎Fork和Star. 谢谢*
