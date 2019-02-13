### 旅行日志

##### 主体设计模式
* 获取地图样式，以省份为单位展示地图
* 地图区域划分，可标记是否已旅行
* 旅行省份名 和 备注信息的存储
* 前台数据与后台数据间的交互

1. 地图展示使用的 `ECharts` 插件 展示中国地图省份的选择器
2. 鼠标悬浮效果，展示旅行标记备注
3. 区分未旅行和已旅行的背景色展示
4. 鼠标点击，弹出旅行计划说明

#### 关键数据字段
```sql
DROP TABLE IF EXISTS `zingfront_map_travel`;
CREATE TABLE `zingfront_map_travel` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '身份名称',
`is_travel` tinyint(3) unsigned DEFAULT '0' COMMENT '是否旅行过',
`remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '旅行备注',
`created_at` datetime DEFAULT NULL,
`updated_at` datetime DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

#### 展示连接 [https://jerry-blog.com/zingfront/map-travel](https://jerry-blog.com/zingfront/map-travel)

