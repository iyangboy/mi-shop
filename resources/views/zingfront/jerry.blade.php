<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {!! editor_css() !!}
</head>
<body>
<div class="container">
    <div class="col-md-12" style="margin-top: 50px">
        <div id="editormd_id">
            <textarea name="content" style="display:none;">
# 杨万里个人简历 (PHP)

## 联系方式
* 手机（微信）：13207172090
* Email：[iyangboy@outlook.com](mailto:iyangboy@outlook.com)
* QQ：1091231787

## 个人信息
* 杨万里 / 男 / 1993
* 本科 / 武汉工程大学邮电与信息工程学院 / 光信息科学与技术
* 工作年限：3 年
* 期望职位：PHP程序员
* 期望薪资：月薪 8 k ~ 10 k
* 期望城市：武汉

## 技能清单
* Web开发：`PHP`
* Web框架：`Laravel`
* 前端框架：`Bootstrap` `Vue.js`
* 前端工具：`Nodejs` `npm` `yarn`
* 数据库相关：`MySQL`
* 版本管理、自动化部署工具：`Git`  `Composer`
* 编码规范：PSR标准规范

>  Linux + Nginx + Mysql + PHP
* FS.COM [https://www.fs.com/](https://www.fs.com/) (公司商城系统)
* 个人博客 [https://jerry-blog.com/](https://jerry-blog.com/)
* GitHub [https://github.com/iyangboy/](https://github.com/iyangboy/)

## 功能清单（电商系统）
* 用户模块 (注册、登录、邮箱验证、重置密码)，用户基础数据(收货地址) 添加、编辑
* 基础商品设计 (产品SKU)、列表、详情
* 商品类目管理（商品分类）
* 产品收藏、加入购物车、创建订单(关闭未支付订单)
* 支付、退款 模块 (微信 / 支付宝 / PayPal)
* 优惠券设计
* 众筹商品业务逻辑设计
* 分期付款业务逻辑
* Elasticsearch 全文搜索
* 秒杀产品 (Redis缓存、队列任务、随机拒绝)
* 提交数据验证 (正则验证、防XSS)

## 工具清单
* 编辑器：Sublime Text 3 、PHPStorm
* 开发环境： [Vagrant](https://www.vagrantup.com/)、[VirtualBox](https://www.virtualbox.org/) 、[Homested](https://laravel-china.org/docs/laravel/5.7/homestead/2245) (专为[Laravel 开发环境](https://laravel-china.org/docs/laravel-development-environment/5.7)开发所设计的虚拟环境)。[PHPStudy](http://phpstudy.php.cn/) (集成开发环境，针对本地开发，PHP版本切换)
* API 请求工具：Postman 、SopaUI

## 工作经历
### 深圳市宇轩网络技术有限公司（武汉分公司）（2017年6月 ~ 2018年12月）
#### 个人收获
> * 协作开发。一个人的能力终究是有限的，术业有专攻。在多人协同开发时，更注重的是统一编码风格遵循 PSR 风格 以及针对公司内部 设置统一的编码规范。
> * Git 版本管理。Git 是一个很好的版本管理工具
> * 沟通协作。良好的沟通能力，可以使处理事情时更加便捷

#### 工作内容
#### 电商 `ERP` 后台管理系统
我在此项目中主要负责销售体系。
* 主要针对需求方，进行数据流程和业务逻辑的合理规划，完成需求方的业务需求内容。
* 基础订单流程内容为：线上（线下）订单录单流程、线下到款录入流程、订单与到款的关联流程。
* 订单申请事项：账期（安联）客户和订单的申请，客户回款周期和邮件推送提示。订单售后申请事项，订单转运申请 等订单相关申请事项。

###### 主要功能点：
1. 数据表下载（EXCEL），下载每月订单数据报表 建立根据月份 建立字段索引
2. 针对手动提交的数据进行 数据基础验证（正则） 和 防 `XSS` 攻击数据过滤（HTMLPurifier）
3. 数据的增加、删除、修改、查找操作（删除分为软删除和数据备份删除）
4. 平台消息通知（针对审核流程审核状态，回馈给申请人，数据状态通知），邮件信息通知（针对事项，对重要事项的流程给予邮件通知）
5. 队列事件 （对于线上订单录单、邮件发送 建立队列处理事件）
6. Redis 的队列 和 数据缓存

#### 电商客户 `CRM` 管理系统
* 主要负责处理客户文件管理这一块。
* 建立文件存储系统，方便查阅客户可公司的相关资质文件，以及销售编辑上传的凭证。
###### 主要功能点：
1. 文件上传
2. 文本文件和文件夹的 创建、读取、编辑、删除、移动

3. 富文本编辑器 (UEditor) 以及  markdown（Cmd Markdown）
4. 统一文件管理，建立文件和客户 或 状态间的绑定关系

#### 项目管理系统
* 基本需求分析，用于公司内部使用，方便对接项目进程，更好的收集各部门的需求，以及分析管理，更好的发展。
* 主要分为三大类型：诉求管理（收集整理各部门的诉求）、设计管理（根据诉求分析整理 设计相对应的页面流程） 和 项目管理（整体处理项目进程，开发阶段）
* 与现有部门工作流程的对接，及时处理问题，提高工作效率。

###### 主要功能点：
* 数据 增加、删除、修改、查询
* 数据表下载、数据统计(`Chart.js`)
* 处理状态通知事件（一对多通知）

### 湖北新精准广告传媒有限公司（2015年7月 ~ 2017年6月）

#### 个人收获
> * 学习能力自主学习。我最开始是主要从事前端开发的。因为公司业务的需求，和个人喜好学习 `PHP` 语言编程 进入后台开发
> * 独立完成事物的能力。因为公司主要的技术负责人就是我一个人，所以很多事情都需要自己独立完成，不会的点需要自己去摸索查阅相关资料
> * 个人规划制定能力。因为当时是单独开发，所以需要计算好开发流程和规划开发周期，对自身工作规划确实提升了，还有就是老板的信任。
> * 当时想着去大公司好好的学习，所以选择了离职。非常感谢该公司

#### 工作内容

#### 广告传媒管理系统
* 针对公司业务进行整合，处理广告流程接入。主要针对腾讯智汇推，武汉这边的销售代理。建立公司后台业务流程，同时还会一些外包事项（如：家乐福单独推广，微信公众号和服务号的搭建）当时公司 PHP 开发人员就自己一个人，也是我步入后台开发的启蒙点。

##### 主要工作事项：
* 服务器搭建（阿里云、腾讯云）
* 公司业务项目开发（广告投放记录管理系统）
* 外包项目开发（基于微信公众号和服务号开发）
* 数据表设计
* 功能模块的快速迭代


## 个人总结
> 优点：个人自我感觉 性格开朗、责任意识比较强、做事比较踏实放心、终生学习。具有独立开发能力 以及团队协作能力（具有团队管理能力）。目标意识感挺强烈的，知道自己在做什么和想得到什么。期望成为 全栈开发工程师，保持一颗积极向上的心态。

> 缺点：有点不善于表达 但会用行动和具体的事物来说明事情，工作交流沟通没有问题。对于代码上面 有一些强迫症，习惯规矩化管理方式。个人知识点挺扎乱的，希望根据具体的工作事物整合学习发展方向。

## 感谢
> 非常感谢您能在百忙中看完我的简历，很期待能有面试的机会。
同时希望非诚勿扰，目前积极找工作中！


            </textarea>
        </div>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
{!! editor_js() !!}
</body>
</html>
