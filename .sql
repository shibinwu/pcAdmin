

/**
 * 数据库添加添加表，或者添加字段请在此写上sql
 */
DROP TABLE IF EXISTS `user_property`;
CREATE TABLE `user_property` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `property_p` char(32) DEFAULT NULL COMMENT 'P豆',
  `property_v` char(32) DEFAULT NULL COMMENT 'V豆',
  `score` char(32) DEFAULT NULL COMMENT '积分',
  `type` enum('') NOT NULL COMMENT 'P豆，V豆，积分来源，1-签到，2-充值',
  `status` enum('') NOT NULL COMMENT '资产状态，1-为充值等增加，2-为消费减少',
  `ctime` INT NULL DEFAULT NULL,
  `mtime` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户资产表';

ALTER TABLE `user_property`
ADD COLUMN `uid`  bigint(11) NOT NULL COMMENT '用户id' AFTER `id`;


ALTER TABLE `friend`
DROP COLUMN `status`,
ADD COLUMN `status`  char(1) NULL COMMENT '好友状态，1-好友申请，2-成为好友，3-删除好友，4-拒绝好友申请' AFTER `uid2`;


//用户竞猜相关表
CREATE TABLE `guess_user_data` (
  `dgid` int(11) NOT NULL COMMENT '竞猜比赛数据的ID',
  `userId` int(11) NOT NULL COMMENT '竞猜用户的ID',
  `type` tinyint(3) NOT NULL COMMENT '用户竞猜方式 1dota饰品竞猜，2csgo饰品竞猜，P豆竞猜',
  `num` varchar(20) DEFAULT NULL COMMENT 'P豆竞猜数量',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户竞猜相关表';

ALTER TABLE `guess_user_data`
ADD COLUMN `duid`  int(11) NOT NULL AUTO_INCREMENT FIRST ,
ADD PRIMARY KEY (`duid`);

ALTER TABLE `guess_user_data`
ADD COLUMN `gtid`  int(11) NULL COMMENT '竞猜队伍的ID' AFTER `userId`;

ALTER TABLE `users`
ADD COLUMN `level`  tinyint(2) NOT NULL COMMENT '用户等级';

ALTER TABLE `goods_attr`
MODIFY COLUMN `ga_type` int(3) COMMENT '描述类型,1为游戏类型，2商品分类，3为商品等级，4为商品部位，5为商品外观';

ALTER TABLE `guess_data`
ADD COLUMN `ltid`  int(11) NULL COMMENT '竞猜左边队伍的ID' AFTER `gid`,
ADD COLUMN `rtid`  int(11) NULL COMMENT '竞猜右边队伍ID' AFTER `ltid`,
ADD COLUMN `lrate`  char(10) NULL COMMENT '竞猜左边队伍的支持率' AFTER `rtid`,
ADD COLUMN `rrate`  char(10) NULL COMMENT '竞猜右边队伍的支持率' AFTER `lrate`;


ALTER TABLE `guess_data`
ADD COLUMN `gtid`  int(11) NULL COMMENT '让分局中让分队伍的ID' AFTER `rrate`,
ADD COLUMN `score`  char(10) NULL COMMENT '让分局中让的分数' AFTER `gtid`;

//20170804
ALTER TABLE `users`
ADD COLUMN `IDnum`  int(11) NULL COMMENT '身份证号码' AFTER `id`;

ALTER TABLE `users`
MODIFY COLUMN `IDnum`  varchar(10) NULL DEFAULT NULL COMMENT '身份证号码' AFTER `id`;

//20170807
ALTER TABLE `guess_user_data`
ADD COLUMN `result`  tinyint(2) NULL COMMENT '竞猜结果，1赢，2输，3平局' AFTER `num`;

//用戶商品表
CREATE TABLE `user_goods` (
`ugid`  int(11) NOT NULL COMMENT '用户商品id' ,
`goodid`  int(11) NULL COMMENT '商品id' ,
`userid`  int(11) NULL COMMENT '用户id' ,
`goodNum`  char(32) NULL COMMENT '用户拥有的商品数量' ,
`ctime`  int(11) NULL ,
`mtime`  int(11) NULL ,
PRIMARY KEY (`ugid`)
);

ALTER TABLE `guess_user_data`
MODIFY COLUMN `num`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'P豆竞猜数量（或者是商品数量）' AFTER `type`,
ADD COLUMN `goodid`  int(11) NULL COMMENT '竞猜商品id' AFTER `gtid`;

//20170809 添加赛事的状态 添加时间 修改时间
ALTER TABLE `race`
ADD COLUMN `status`  tinyint(3) NULL COMMENT '赛事状态' AFTER `race_time`,
ADD COLUMN `ctime`  int(11) NULL AFTER `status`,
ADD COLUMN `mtime`  int(11) NULL AFTER `ctime`;

ALTER TABLE `race`
MODIFY COLUMN `status`  tinyint(3) NULL DEFAULT NULL COMMENT '赛事状态 0未开始， 1进行中，2结束' AFTER `race_time`;

ALTER TABLE `team`
ADD COLUMN `mtime`  int(11) NULL AFTER `status`;

ALTER TABLE `team`
MODIFY COLUMN `tid`  int(11) NOT NULL AUTO_INCREMENT COMMENT '战队ID' FIRST ;

ALTER TABLE `race`
ADD COLUMN `sponsor_name`  char(128) NULL COMMENT '主办方姓名' AFTER `rname`,
ADD COLUMN `sponsor_phone`  varchar(11) NULL COMMENT '主办方电话' AFTER `sponsor_name`,
ADD COLUMN `sponsor_qq`  varchar(11) NULL COMMENT '主办方QQ' AFTER `sponsor_phone`;

ALTER TABLE `race`
ADD COLUMN `desc`  varchar(256) NULL COMMENT '赛程介绍' AFTER `race_time`;

//20170810 章伯龙
CREATE TABLE `area` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL DEFAULT '' COMMENT '名称',
  `admin_level` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '行政级别（1=>省，2=>市，3=>区）',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='地区行政级别表';

//20180811
ALTER TABLE `race`
ADD COLUMN `raceprocess`  char(255) NULL COMMENT '报名流程' AFTER `rice_sponsor`,
ADD COLUMN `racerule`  char(255) NULL COMMENT '联赛规则' AFTER `raceprocess`;

ALTER TABLE `race`
ADD COLUMN `checkStatus`  tinyint(3) NULL COMMENT '审核状态，1通过，2审核中，3未通过' AFTER `desc`;

ALTER TABLE `users`
MODIFY COLUMN `level`  tinyint(2) NOT NULL DEFAULT 0 COMMENT '用户等级' AFTER `phone`;

//20170814
ALTER TABLE `race`
ADD COLUMN `contact`  int(3) NULL COMMENT '联系方式，1电话，2微信，3QQ' AFTER `racerule`;

ALTER TABLE `race`
ADD COLUMN `join_time`  varchar(32) NULL COMMENT '报名时间，格式为 时间戳-时间戳' AFTER `season_time`;

ALTER TABLE `race`
ADD COLUMN `game_area`  tinyint(3) NULL DEFAULT 0 COMMENT '比赛区域 ，0中国区，1东南亚区，3美洲区，4欧洲区，5全球性' AFTER `join_mode`;


//20170814 章伯龙
ALTER TABLE `users`
MODIFY COLUMN `IDnum`  varchar(18) NULL DEFAULT NULL COMMENT '身份证号码' AFTER `id`;

//20170815
ALTER TABLE `team_member`
MODIFY COLUMN `uid`  int(11) NULL DEFAULT NULL COMMENT '用户ID' AFTER `tmid`,
ADD COLUMN `tid`  int(11) NULL COMMENT '战队ID' AFTER `tmid`,
ADD COLUMN `ctime`  int(11) NULL AFTER `status`,
ADD COLUMN `mtime`  int(11) NULL AFTER `ctime`;

//20170816
ALTER TABLE `team_member`
MODIFY COLUMN `status`  tinyint(3) NULL DEFAULT NULL COMMENT '0：等待确认，1：正式队员' AFTER `role`;

ALTER TABLE `team_member`
MODIFY COLUMN `status`  tinyint(3) NULL DEFAULT NULL COMMENT '0：等待确认，1：正式队员 ，2：拒绝' AFTER `role`;




//20170815 章伯龙
ALTER TABLE `user_detail`
MODIFY COLUMN `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机号' AFTER `qq`;

//20170816 章伯龙
ALTER TABLE `user_goods`
ADD COLUMN `goods_sale` char(32) DEFAULT NULL COMMENT '出售中的商品数量' AFTER `goodNum`,
ADD COLUMN `goods_back` char(32) DEFAULT NULL COMMENT '取回中的商品数量' AFTER `goods_sale`;

//20170816 章伯龙
CREATE TABLE `user_goods_sold` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sale_uid` int(11) NOT NULL DEFAULT '0' COMMENT '出售方用户ID',
  `buy_uid` int(11) NOT NULL DEFAULT '0' COMMENT '购买方用户ID',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '交易的商品ID',
  `goods_num` int(11) NOT NULL DEFAULT '0' COMMENT '交易的商品数量',
  `ctime` int(10) NOT NULL DEFAULT '0' COMMENT '交易时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户商品出售记录表';

//20170817 章伯龙
CREATE TABLE `user_delivery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `delivery_area` varchar(255) NOT NULL DEFAULT '' COMMENT '收货地区（省/市/区县）',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '详细地址',
  `postal_code` varchar(16) NOT NULL DEFAULT '' COMMENT '邮政编码',
  `receiver_name` varchar(25) NOT NULL DEFAULT '' COMMENT '收货人姓名',
  `phone` int(11) NOT NULL DEFAULT '0' COMMENT '手机号码',
  `default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为默认地址（1=>是，0=>否）',
  `ctime` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户收货地址表';

//20170817 章伯龙
CREATE TABLE `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL DEFAULT '0' COMMENT '任务ID',
  `task_name` varchar(255) NOT NULL DEFAULT '' COMMENT '任务名称',
  `reward_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '任务奖励物品（1=>积分，2=>P豆，3=>V豆）',
  `reward_num` int(11) NOT NULL DEFAULT '0' COMMENT '任务奖励数量',
  `ctime` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='任务配置表';

ALTER TABLE `task`
ADD COLUMN `task_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '任务类型（1=>新手任务，2=>活动任务，3=>每日任务）' AFTER `task_name`,
ADD COLUMN `task_url` varchar(255) NOT NULL DEFAULT '' COMMENT '任务跳转链接' AFTER `reward_num`,
ADD COLUMN `task_guide` varchar(255) NOT NULL DEFAULT '' COMMENT '任务指引提示' AFTER `task_url`,
ADD COLUMN `task_stage` int(10) NOT NULL DEFAULT '0' COMMENT '完成任务需要的阶段数' AFTER `task_guide`,
MODIFY COLUMN `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '任务ID',
DROP COLUMN  `task_id`;

//20170817 章伯龙
CREATE TABLE `user_task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `task_id` int(11) NOT NULL DEFAULT '0' COMMENT '任务ID',
  `reward_type` varchar(255) NOT NULL DEFAULT '' COMMENT '任务奖励物品（1=>积分，2=>P豆，3=>V豆）',
  `reward_num` varchar(255) NOT NULL DEFAULT '' COMMENT '任务奖励数量',
  `ctime` int(10) NOT NULL DEFAULT '0' COMMENT '完成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户任务记录表';

//20170817
ALTER TABLE `data_race`
ADD COLUMN `rid`  int(11) NULL COMMENT '比赛id' AFTER `drid`;

ALTER TABLE `data_race_game`
ADD COLUMN `rid`  int(11) NULL COMMENT '比赛ID' AFTER `drid`;

//20170818 章伯龙
ALTER TABLE `user_delivery`
MODIFY COLUMN `phone` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号码';

//20170818
ALTER TABLE `data_race_game`
MODIFY COLUMN `who_won`  int(11) NOT NULL COMMENT '赢了的战队id' AFTER `kill_two`,
ADD COLUMN `ltid`  int(11) NULL COMMENT '第一队ID' AFTER `rid`,
ADD COLUMN `rtid`  int(11) NULL COMMENT '第二队ID' AFTER `ltid`;

ALTER TABLE `data_race_game`
MODIFY COLUMN `kill_one`  int(11) NOT NULL COMMENT '第一队（击杀数/比分）' AFTER `order`,
MODIFY COLUMN `kill_two`  int(11) NOT NULL COMMENT '第二队（击杀数/比分）' AFTER `kill_one`;

CREATE TABLE `per_race_data` (
  `prid` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL COMMENT '比赛id',
  `uid` int(11) DEFAULT NULL COMMENT '参与者id',
  `if_win` tinyint(2) DEFAULT NULL COMMENT '1赢，2输',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0加入， 1为进行中，2结束',
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`prid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='个人赛比赛数据';


//20170818 章伯龙
CREATE TABLE `user_exchange` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '兑换的商品ID',
  `goods_num` int(11) NOT NULL DEFAULT '0' COMMENT '兑换的商品数量',
  `consume_type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '兑换消耗的物品种类（1=>积分，2=>P豆，3=>普通礼品券）',
  `consume_num` int(10) NOT NULL DEFAULT '0' COMMENT '兑换消耗的物品数量',
  `ctime` int(10) NOT NULL DEFAULT '0' COMMENT '兑换时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户兑换记录表';

CREATE TABLE `user_message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `g_id` int(11) DEFAULT NULL COMMENT '竞猜ID',
  `uid` int(11) DEFAULT NULL COMMENT '发表评论者ID',
  `message` varchar(256) DEFAULT NULL COMMENT '评论内容',
  `like` int(11) DEFAULT NULL COMMENT '支持',
  `nolike` int(11) DEFAULT NULL COMMENT '反对',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户评论表';



CREATE TABLE `user_replay_message` (
  `hmid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL COMMENT '评论ID',
  `ruid` int(11) DEFAULT NULL COMMENT '回复评论用户ID',
  `replay_msg` varchar(256) DEFAULT NULL COMMENT '回复内容',
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`hmid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户回复评论表';

//20170818 章伯龙
ALTER TABLE `user_property`
MODIFY COLUMN `type` tinyint(2) NOT NULL COMMENT 'P豆，V豆，积分来源，1-签到，2-充值, 3-兑换' AFTER `score`,
MODIFY COLUMN `status` tinyint(2) NOT NULL COMMENT '资产状态，1-为充值等增加，2-为消费减少' AFTER `type`;










