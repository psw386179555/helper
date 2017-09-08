/*
Navicat MySQL Data Transfer


Source Host           : 127.0.0.1:3306
Source Database       : helper



Date: 2017-09-03 12:55:42
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for sw_banner
-- ----------------------------
DROP TABLE IF EXISTS `sw_banner`;
CREATE TABLE `sw_banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '轮播图组id',
  `title` varchar(255) DEFAULT NULL COMMENT '轮播图组标题',
  `create_time` varchar(255) DEFAULT NULL ,
  `delete_time` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '轮播图组状态1启用还是0不启用',
  `update_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COMMENT '轮播图组表';

-- ----------------------------
-- Table structure for sw_banner_item
-- ----------------------------
DROP TABLE IF EXISTS `sw_banner_item`;
CREATE TABLE `sw_banner_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT  COMMENT '元素id',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `img_id` int(10) DEFAULT NULL COMMENT '图片id',
  `banner_id` int(10) DEFAULT NULL COMMENT '对应的banner',
  `create_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '该图片是1否0启用',
  `update_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COMMENT '轮播图元素表';

-- ----------------------------
-- Table structure for sw_apply
-- ----------------------------
DROP TABLE IF EXISTS `sw_apply`;
CREATE TABLE `sw_apply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '申请编号',
  `number` int(10) DEFAULT NULL COMMENT '申请单号',
  `title` varchar(255) DEFAULT NULL COMMENT '申请单标题',
  `project_name` varchar(255) DEFAULT NULL COMMENT '项目（成果）名称',
  `get_time` varchar(255) DEFAULT NULL COMMENT '获奖时间',
  `get_rank` varchar(255) DEFAULT NULL COMMENT '获奖等级',
  `supplement` varchar(255) DEFAULT NULL COMMENT '补充内容',
  `score` varchar(255) DEFAULT NULL COMMENT '最后得到分值（审核人员给）',
  `uid` int(10) DEFAULT NULL COMMENT '学生id',
  `type` int(10) DEFAULT NULL COMMENT '1表示G3，2表示创新创业',
  `teacher` varchar(255) DEFAULT NULL COMMENT '指导老师',
  `check_result` int(10) DEFAULT NULL COMMENT '评定结果（0表示待评定，1表示及格，2表示中等，3表示优秀',
  `check_person` int(10) DEFAULT NULL COMMENT '评定人',
  `update_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='申请表';

-- ----------------------------
-- Table structure for sw_apply_material
-- ----------------------------
DROP TABLE IF EXISTS `sw_apply_material`;
CREATE TABLE `sw_apply_material` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '申请元素id',
  `img_id` int(10) DEFAULT NULL COMMENT '图片id',
  `apply_id` int(10) DEFAULT NULL COMMENT '申请id',
  `update_time` varchar(255) DEFAULT NULL,
  `create_time` varchar(25) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='申请审核材料表（图片）';

-- ----------------------------
-- Table structure for sw_grade
-- ----------------------------
DROP TABLE IF EXISTS `sw_grade`;
CREATE TABLE `sw_grade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '学生年级ID',
  `name` varchar(255) DEFAULT NULL COMMENT '年级名称（1401,1701）',
  `update_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='年级表';

-- ----------------------------
-- Table structure for sw_image
-- ----------------------------
DROP TABLE IF EXISTS `sw_image`;
CREATE TABLE `sw_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '图片id',
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `from` int(10) DEFAULT NULL COMMENT '来自1本地或者2远程',
  `create_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='图片表';

-- ----------------------------
-- Table structure for sw_notice
-- ----------------------------
DROP TABLE IF EXISTS `sw_notice`;
CREATE TABLE `sw_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '通知id',
  `title` varchar(255) DEFAULT NULL COMMENT '通知标题',
  `author` varchar(255) DEFAULT NULL COMMENT '发布者',
  `cover_id` int(10) DEFAULT NULL COMMENT '封面图片对应的id',
  `content` varchar(255) DEFAULT NULL COMMENT '通知内容',
  `status` int(1) DEFAULT NULL COMMENT '通知状态',
  `update_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='通知表';

-- ----------------------------
-- Table structure for sw_pro
-- ----------------------------
DROP TABLE IF EXISTS `sw_pro`;
CREATE TABLE `sw_pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '专业ID',
  `name` varchar(255) DEFAULT NULL COMMENT '专业名称',
  `update_time` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='专业表';

-- ----------------------------
-- Table structure for sw_stu_info
-- ----------------------------
DROP TABLE IF EXISTS `sw_stu_info`;
CREATE TABLE `sw_stu_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户验证信息id',
  `name` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `class` varchar(255) DEFAULT NULL COMMENT '专业班级',
  `stu_id` int(10) DEFAULT NULL COMMENT '学号',
  `card_id` int(10) DEFAULT NULL COMMENT '身份证',
  `update_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='学生身份信息表';

-- ----------------------------
-- Table structure for sw_third_app
-- ----------------------------
DROP TABLE IF EXISTS `sw_third_app`;
CREATE TABLE `sw_third_app` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '后台管理员id',
  `app_id` varchar(255) DEFAULT NULL COMMENT '第三方登录账号',
  `app_secret` varchar(255) DEFAULT NULL COMMENT '第三方登录密码',
  `app_description` varchar(255) DEFAULT NULL COMMENT '描述',
  `scope` int(10) DEFAULT NULL COMMENT '权限作用域',
  `delete_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='第三方信息表，后台管理员表';;

-- ----------------------------
-- Table structure for sw_user
-- ----------------------------
DROP TABLE IF EXISTS `sw_user`;
CREATE TABLE `sw_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `stu_id` int(10) DEFAULT NULL COMMENT '用户学号',
  `class` varchar(255) DEFAULT NULL COMMENT '用户专业班级',
  `headimg` varchar(255) DEFAULT NULL COMMENT '微信头像（直接微信的地址）',
  `nickname` varchar(255) DEFAULT NULL COMMENT '用户昵称',
  `realname` varchar(255) DEFAULT NULL COMMENT '用户真实姓名',
  `openid` varchar(255) DEFAULT NULL COMMENT '用户小程序OPENID',
  `create_time` varchar(255) DEFAULT NULL,
  `delete_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '用户验证状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户表';
