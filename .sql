
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

 



