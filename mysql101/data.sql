DROP SCHEMA IF EXISTS data;
CREATE SCHEMA data;
USE data;
SET AUTOCOMMIT=0;

DROP TABLE IF EXISTS `goodslist`;

CREATE TABLE `goodslist` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`Name` CHAR(35) NOT NULL DEFAULT '',
	`FansiteName` CHAR(50) NOT NULL DEFAULT '',
	`Type` CHAR(100) NOT NULL DEFAULT '',
	`GoodsName` CHAR(50) NOT NULL DEFAULT '' ,
	`Code` CHAR(10)  NOT NULL UNIQUE DEFAULT '',
	`Delivery` CHAR(15) NOT NULL DEFAULT '',
	`Status` CHAR(15) NOT NULL DEFAULT '',
	PRIMARY KEY (`ID`)

)ENGINE=InnoDB AUTO_INCREMENT=4080 DEFAULT CHARSET=latin1;


INSERT INTO `goodslist` VALUES (1,'Jihoon','@mayrabbitprince','Season greeting','Luv popsicle','JHMRB-03','november','sent');
INSERT INTO `goodslist` VALUES (2,'Woojin','@PlanetCosmos112','Slogan','Cheering Kit Project','WJPNC-01','december','sent');
INSERT INTO `goodslist` VALUES (3,'Seongwu','@3point_ong','Photobook','Love Point','SW3P-01','january','not arrived');
INSERT INTO `goodslist` VALUES (4,'Minhyun','@btfway_mh','Slogan','Kill me Heal me','MHBTF-02','june','sent');
INSERT INTO `goodslist` VALUES (5,'Jihoon','@fluffyboy_jh','Season greeting','Dream Like','JHFFB-02','december','sent');
INSERT INTO `goodslist` VALUES (6,'Minhyun','@deepand_more','Season greeting, Blanket','Ever&Ever','MHDPM-03','december','sent');
INSERT INTO `goodslist` VALUES (7,'Jihoon','@RIGHTBEFORE_JH','Season greeting, Diary, Blanket','Love Ly Love','JHRBF-04','december','packing');
INSERT INTO `goodslist` VALUES (8,'Seongwu','@3point_ong','Season greeting','Hello, Shu Shu','SW3P-03','november','sent');
INSERT INTO `goodslist` VALUES (9,'Jihoon','@Hoonee_home','Season greeting','We again, spring','JHHNH-01','december','not arrived');
INSERT INTO `goodslist` VALUES (10,'Seongwu','@FLAWLESSLY_25','Season greeting, Planner','Sincerely, love','SWFLL-01','december','sent');

INSERT INTO `goodslist` VALUES (11,'Woojin','@ThinkAbout_woo','Diary','Your Youth','WJTAW-01','november','sent');
INSERT INTO `goodslist` VALUES (12,'Woojin','@112station','Season greeting','Crank In\'','WJ112-02','november','sent');
INSERT INTO `goodslist` VALUES (13,'Seongwu','@FORONG_825','Season greeting','Mon Amour, ONG','SWFO-01','december','sent');
INSERT INTO `goodslist` VALUES (14,'Woojin','@luvmyboy_1102','Slogan','Luv my boy 2nd Slogan','WJLMB-01','april','sent');
INSERT INTO `goodslist` VALUES (15,'Minhyun','@counterflow89','Season greeting, Diary','Groovin','MHCTF-01','december','sent');
INSERT INTO `goodslist` VALUES (16,'Minhyun','@miraclepaint_mh','Season greeting','Marmalade','MHMRC-01','december','refund');
INSERT INTO `goodslist` VALUES (17,'Woojin','@Babybird_lo','Season greeting','After Sunset','WJBBB-02','december','sent');
INSERT INTO `goodslist` VALUES (18,'Minhyun','@19950809_net','Season greeting','Just Right','MHJAF-03','december','packing');
INSERT INTO `goodslist` VALUES (19,'Woojin','@luvmyboy_1102','Season greeting','Slash','WJLMB-02','november','not arrived');
INSERT INTO `goodslist` VALUES (20,'Jihoon','@oddtrick_jh','Season greeting, Diary','Merry-go-round','JHOT-03','december','sent');

INSERT INTO `goodslist` VALUES (21,'Jihoon','@oddtrick_jh','Slogan, Diary','Oddtrick Cheering Kit','JHOT-01','febuary','sent');
INSERT INTO `goodslist` VALUES (22,'Daniel&Jihoon','@oddtrick_jh','Season greeting','The Flashback','DHSGR-02','november','sent');
INSERT INTO `goodslist` VALUES (23,'Seongwu','@doubletrap_sw','Season greeting','Time Of You','SWDBT-02','december','sent');
INSERT INTO `goodslist` VALUES (24,'Jinyoung','@Love_u_0510','Season greeting, Photobook','The Next Phase','JYLU-02','december','sent');
INSERT INTO `goodslist` VALUES (25,'Jihoon','@oddtrick_jh','Photobook','punch drunk love','JHOT-02','december','sent');
INSERT INTO `goodslist` VALUES (26,'Seongwu','@3point_ong','Slogan','3 point slogan','SW3P-02','march','sent');
INSERT INTO `goodslist` VALUES (27,'Minhyun','@btfway_mh','Season greeting','Truly your','MHBTF-03','december','sent');
INSERT INTO `goodslist` VALUES (28,'Jihoon','@mayrabbitprince','Eco Bag','Wink Blossom','JHMRB-02','may','sent');
INSERT INTO `goodslist` VALUES (29,'Jihoon','@fluffyboy_jh','Slogan','fluffyboy slogan','JHFFB-01','october','sent');
INSERT INTO `goodslist` VALUES (30,'Woojin','@112station','Season greeting','All Day All Night','WJ112-01','december','sent');

INSERT INTO `goodslist` VALUES (31,'Minhyun','@Fatewithyou1','Season greeting','NON - END','MHFWY-01','december','refund');
INSERT INTO `goodslist` VALUES (32,'Seongwu','@seduction0825','Slogan','Ong Your','SWSED-01','april','sent');
INSERT INTO `goodslist` VALUES (33,'Minhyun','@meanit_mh','Season greeting','One Love','MHMI-02','december','sent');
INSERT INTO `goodslist` VALUES (34,'Minhyun','@19950809_net','Slogan','Just a Feeling Cheering Kit','MHJAF-02','september','sent');
INSERT INTO `goodslist` VALUES (35,'Jihoon','@RIGHTBEFORE_JH','Season greeting','Once in a bluemoon','JHRBF-01','december','sent');
INSERT INTO `goodslist` VALUES (36,'Seongwu','@doubletrap_sw','Slogan','Slogan','SWDBT-01','july','sent');
INSERT INTO `goodslist` VALUES (37,'Woojin','@PlanetCosmos112','Season greeting','To The Moon And Back','WJPNC-02','december','sent');
INSERT INTO `goodslist` VALUES (38,'Jihoon','@RIGHTBEFORE_JH','Slogan, Bigfan','Right Before slogan & Fan','JHRBF-03','december','sent');
INSERT INTO `goodslist` VALUES (39,'Jihoon','@RIGHTBEFORE_JH','Slogan','Right Before Cheering Slogan','JHRBF-02','april','sent');
INSERT INTO `goodslist` VALUES (40,'Seongwu','@seduction0825','Season greeting','Sweet&Heart','SWSED-02','november','packing');

INSERT INTO `goodslist` VALUES (41,'Jihoon','@mayrabbitprince','Planner','WINK Planner','JHMRB-01','january','sent');
INSERT INTO `goodslist` VALUES (42,'Daniel&Jihoon','@SugarRush_9699','Season greeting','Cosmic Heart','DHSGR-01','november','sent');
INSERT INTO `goodslist` VALUES (43,'Woojin','@Babybird_lo','Slogan','Babybird 2nd Cheering Kit','WJBBB-01','july','sent');
INSERT INTO `goodslist` VALUES (44,'Minhyun','@19950809_net','Season greeting','Floating On The Moon','MHJAF-01','january','sent');
INSERT INTO `goodslist` VALUES (45,'Seongwu','@stillvibin_','Season greeting','Vibin On #03','SWSTV-02','november','sent');
INSERT INTO `goodslist` VALUES (46,'Woojin','@BlindForLovewj','Slogan','Blind For Love','WJBFL-01','october','not arrived');
INSERT INTO `goodslist` VALUES (47,'Jihoon','@Apreslapluie_JH','Slogan + Acrylic Standing','After The Rain','JHALP-01','march','sent');
INSERT INTO `goodslist` VALUES (48,'Jinyoung','@DarkMoon_JY','Season greeting','Debonaire boy','JYDM-01','november','refund');
INSERT INTO `goodslist` VALUES (49,'Minhyun','@Dreamofyou_mh','Slogan','Moonlight Dream','MHDOY-01','april','sent');
INSERT INTO `goodslist` VALUES (50,'Woojin','@PARKWOOJINkr','Photobook','Half Moon','WJMS-02','december','sent');

INSERT INTO `goodslist` VALUES (51,'Seongwu','@alluresw','Slogan','One The World','SWALU-02','may','sent');
INSERT INTO `goodslist` VALUES (52,'Jihoon','@maylandlab_jh','Slogan','MayLandLAB Holy GAN','JHMLL-01','september','refund');
INSERT INTO `goodslist` VALUES (53,'Minhyun','@winterrain0809','Slogan','Winterrain Cheering Kit','MHWTR-01','september','sent');
INSERT INTO `goodslist` VALUES (54,'Seongwu&Daniel','@Ace_Ace_OD','Slogan','ACE','ONACE-02','december','sent');
INSERT INTO `goodslist` VALUES (55,'Woojin','@HundertP1102','Slogan','HundertProzent\'s 1st Slogan','WJHDP-01','october','not arrived');
INSERT INTO `goodslist` VALUES (56,'Seongwu','@0hMy0ng','Slogan','Across the Horizon','SWOMO-01','july','sent');
INSERT INTO `goodslist` VALUES (57,'Jihoon','@lovelywink_0529','Slogan','LW Summer Slogan Kit','JHLLW-01','september','sent');
INSERT INTO `goodslist` VALUES (58,'Minhyun','@Koisuruhi_hmh','Slogan','Elf Gan','MHKSU-01','september','sent');
INSERT INTO `goodslist` VALUES (59,'Seongwu','@HERETODAY_825','Season greeting','Incandescent','SWHTD-01','december','sent');
INSERT INTO `goodslist` VALUES (60,'Woojin','@spin_out1102','Season greeting','19 , nineteen','WJSPO-01','january','sent');

INSERT INTO `goodslist` VALUES (61,'Daniel&Jihoon','@cherrycola_nw','Slogan','Cherrycola Cheering Kit','DHCRC-01','october','sent');
INSERT INTO `goodslist` VALUES (62,'Jinyoung','@LittleWolf_0510','Season greeting','Never Stop, Looking Up','JSLTW-01','january','sent');
INSERT INTO `goodslist` VALUES (63,'Seongwu','@ong_box','Box set','Ong Box','SWBOX-01','january','not arrived');
INSERT INTO `goodslist` VALUES (64,'Jihoon','@HoonSpirit_0529','Slogan','Debut 2nd Anniversary Slogan','JHHSR-01','september','sent');
INSERT INTO `goodslist` VALUES (65,'Minhyun','@imperialreign_','Slogan','Imperial Reign\'s First Slogan','MHSIM-02','march','refund');
INSERT INTO `goodslist` VALUES (66,'Daehwi','@FingerSparkle','Season greeting','H\' orbit','DWFS-01','january','sent');
INSERT INTO `goodslist` VALUES (67,'Seongwu','@ench_epoch','Slogan','Becoming','SWENE-01','october','sent');
INSERT INTO `goodslist` VALUES (68,'Woojin','@19991102MG','Slogan','Hey! Woojin Malfoy','WJMGP-01','december','sent');
INSERT INTO `goodslist` VALUES (69,'Wanna One','@winkly0529','Sticker','EMW Sticker','WOWK-01','febuary','sent');
INSERT INTO `goodslist` VALUES (70,'Jihoon','@_529percent ','Slogan','529percent Slogan set','JH529-01','january','sent');

INSERT INTO `goodslist` VALUES (71,'Minhyun','@Fallingfor_MH ','Season greeting','Falling in Love','MHFIL-01','december','sent');
INSERT INTO `goodslist` VALUES (72,'Seongwu','@neverland_osw ','Slogan','neverland_osw Slogan','SWNVL-01','september','sent');
INSERT INTO `goodslist` VALUES (73,'Woojin','@lightson_1102 ','Season greeting','Dream\' in','WJLO-01','december','sent');
INSERT INTO `goodslist` VALUES (74,'Jinyoung','@ohmybae0510 ','Season greeting','Oh, My Boy','JYOMB-01','november','sent');
INSERT INTO `goodslist` VALUES (75,'Seongwu&Daniel','@heavensent_9596 ','Season greeting','No Vacancy','ONHVS-01','december','sent');
INSERT INTO `goodslist` VALUES (76,'Jihoon','@SPRITEJELLY0529 ','Photobook','Me Before You','JHSPJ-01','febuary','sent');
INSERT INTO `goodslist` VALUES (77,'Wanna One','@9CHs5 ','Sticker','Metal Sticker','WO9CH-01','october','sent');
INSERT INTO `goodslist` VALUES (78,'Jihoon','@pinktape0529 ','Season greeting','So Winkly!','JHPT-01','december','refund');
INSERT INTO `goodslist` VALUES (79,'Seongwu','@bf_osw ','Season greeting','UN-Reality','SWBF-01','november','sent');
INSERT INTO `goodslist` VALUES (80,'Woojin','@PARKWOOJINkr ','Slogan','The Crescent Moon','WJMS-01','october','sent');

INSERT INTO `goodslist` VALUES (81,'Daehwi','@Scintilla29 ','Slogan','Shining Star','DWSTL-01','febuary','sent');
INSERT INTO `goodslist` VALUES (82,'Jinyoung','@Mydeepdark_jy ','Season greeting','Because Of You','JYMDD-01','december','sent');
INSERT INTO `goodslist` VALUES (83,'Minhyun','@HoPPang95 ','Slogan','Dear&Universe','MHHP-01','october','sent');
INSERT INTO `goodslist` VALUES (84,'Seongwu','@ongticker ','Sticker','ongticker','SWOTC-01','june','sent');
INSERT INTO `goodslist` VALUES (85,'Jihoon','@milkywayboy_99 ','MilkyWay Boy','The Crescent Moon','JHMKW-01','july','sent');
INSERT INTO `goodslist` VALUES (86,'Seongwu','@alluresw ','Season greeting, Planner','Fairy Pitta','SWALU-01','december','sent');
INSERT INTO `goodslist` VALUES (87,'Woojin','@spin_out1102 ','Slogan','Lights Up The Night','WJSPO-02','october','sent');
INSERT INTO `goodslist` VALUES (88,'Wanna One','@winter_factory ','Sticker','Pajamas EMW Sticker','WOWTF-01','september','sent');
INSERT INTO `goodslist` VALUES (89,'Seongwu','@pomeloboy0825  ','Slogan','Adore U!','SWPML-01','october','sent');
INSERT INTO `goodslist` VALUES (90,'Jihoon','@FIRST_LOVETOOTH ','Slogan','Cheong Myeong & Slytherin','JHFLT-01','september','sent');

INSERT INTO `goodslist` VALUES (91,'Seongwu','@HERETODAY_825 ','Blanket','1ST Blanket HERE TODAY','SWHTD-02','november','sent');
INSERT INTO `goodslist` VALUES (92,'Woojin','@sulisuli_1102 ','Slogan','Your Name','WJSL-01','october','sent');
INSERT INTO `goodslist` VALUES (93,'Jihoon','@eyesnoselips99 ','Season greeting','UNPLUGGED-BOY, UNPLUGGED-EYES','JHENL-01','march','sent');
INSERT INTO `goodslist` VALUES (94,'Jinyoung','@Doubleup_jy ','Season greeting, Slogan','May I Love U ?','JYDBU-01','december','sent');
INSERT INTO `goodslist` VALUES (95,'Seongwu','@pomeloboy0825  ','Blanket','Alter ego','SWPML-02','november','sent');
INSERT INTO `goodslist` VALUES (96,'Minhyun','@meanit_mh','Season greeting','Heaven','MHMI-01','december','sent');
INSERT INTO `goodslist` VALUES (97,'Minhyun&Daniel','@artscenefilm ','Slogan','Art Scene Film','DMASF-01','november','sent');
INSERT INTO `goodslist` VALUES (98,'Woojin','@19991102_cherry ','Season greeting','Dear Roman','WJCRS-01','november','sent');
INSERT INTO `goodslist` VALUES (99,'Jihoon','@cand971919 ','Sticker','Pink Wink','JHCAN-01','may','sent');
INSERT INTO `goodslist` VALUES (100,'Seongwu','@focuson_osw','Slogan','1ND Reflection','SWFCO-01','april','sent');
-- INSERT INTO `goodslist` VALUES (DEFAULT,'Seongwu','@focuson_osw ','Slogan','1ND Reflection','SWFCO-02','april','sent');

-- DELETE FROM `goodslist` WHERE Code='WJPNC-04';
-- DELETE FROM `goodslist` WHERE Code='WJPNC-05';
-- DELETE FROM `goodslist` WHERE Code='WJPNC-06';
-- DELETE FROM `goodslist` WHERE Code='WJPNC-07';

COMMIT;