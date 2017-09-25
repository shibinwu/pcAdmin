
//20170904 武建银
ALTER TABLE `friend`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `addtime`;

ALTER TABLE `goods`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `goods_sell`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `addtime`;

ALTER TABLE `goods_attr`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `goods_want`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `addtime`;

ALTER TABLE `guess`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `guess_data`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `guess_team`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `guess_user_data`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `race`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `checkStatus`;

ALTER TABLE `race_detail`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `desc`;

ALTER TABLE `team`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `team_member`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `user`
ADD COLUMN `role_id`  tinyint(3) NOT NULL DEFAULT 2 COMMENT '权限管理字段' AFTER `salt`,
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `role_id`;

ALTER TABLE `race_detail`
MODIFY COLUMN `rid`  int(11) NOT NULL AUTO_INCREMENT COMMENT '杯赛管理员真实姓名' FIRST ,
ADD PRIMARY KEY (`rid`);

//2017/9/11   武建银
ALTER TABLE `user`
ADD COLUMN `ctime`  int(11) NULL DEFAULT NULL COMMENT '创建时间' AFTER `statu`,
ADD COLUMN `mtime`  int(11) NULL DEFAULT NULL COMMENT '修改时间' AFTER `ctime`;


//20170911 武建银
CREATE TABLE `admin_user_loginlog` (
  `uid` int(11) NOT NULL COMMENT '用户id',
  `city` varchar(32) DEFAULT NULL COMMENT '用户登录城市',
  `ip` char(15) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL COMMENT '登录时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='后台用户登录日志';

//默认为审核中(2)
ALTER TABLE `race`
MODIFY COLUMN `checkStatus`  tinyint(3) NULL DEFAULT 2 COMMENT '审核状态，1通过，2审核中，3未通过' AFTER `desc`;

ALTER TABLE `task`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `ctime`;

ALTER TABLE `news`
CHANGE COLUMN `is_del` `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `type_id`;

ALTER TABLE `news_type`
CHANGE COLUMN `is_del` `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `news_type`;

CREATE TABLE `news_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻类型id',
  `type_name` varchar(20) DEFAULT '' COMMENT '新闻类型名称',
  `statu` tinyint(3) NOT NULL DEFAULT '1' COMMENT '逻辑删除字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='新闻类型表';

ALTER TABLE `news_type`
DROP COLUMN `ctime`,
ADD COLUMN `ctime`  int(11) NULL COMMENT '创建时间' AFTER `type_name`,
ADD COLUMN `mtime`  int(11) NULL COMMENT '修改时间' AFTER `ctime`;

//2017/09/18  武建银
ALTER TABLE `news_message`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `disagree`;

ALTER TABLE `users`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `level`;

ALTER TABLE `user_detail`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `homepage_limit`;

CREATE TABLE IF NOT EXISTS `access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


ALTER TABLE `banner`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `banner`
MODIFY COLUMN `bn_pic`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'banner图像' AFTER `bnid`;

ALTER TABLE `user_task`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `ctime`;

ALTER TABLE `user_property`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;

ALTER TABLE `rolls`
ADD COLUMN `statu`  tinyint(3) NOT NULL DEFAULT 1 COMMENT '逻辑删除字段' AFTER `mtime`;
