-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-11-29 06:24:31
-- 服务器版本： 10.4.22-MariaDB
-- PHP 版本： 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2test`
--

-- --------------------------------------------------------

--
-- 表的结构 `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `board`
--

INSERT INTO `board` (`id`, `content`, `date`) VALUES
(1, '如果说，人生是一场遇见，那么杰克和露丝的遇见，可以说是他们一生最美好的遇见，一个是流浪的平民，一个是贵族之女，但露丝却不爱贵族的生活，甚至想用死，来结束她的一生，但她遇到了杰克。遇到了和她平常接触的所有人都不一样的杰克，杰克教给她的，都是她在女子学院学不到的东西，但偏偏是露丝喜欢的。 当两个人擦出了爱情的火花时，泰坦尼克号遇难了。在这场只能走一部分人的选择中，人们都慌了，船长的决定是，让女人和小孩先坐救生艇走，在生与死的抉择中，有无数慌乱的人们，有妄想混出去的贵族，有胆小怕死的男人。但，却有这么一些人，留在最后给人们演奏的小提琴家，放弃了走的机会，有打扮体面的绅士，安静的等死，有给孩子们讲故事的母亲，有安静站着等死的设计师，有回到船长十和泰坦尼克号一起沉没的船长，有相拥而眠的老夫妇………更有不离不弃的露丝，露丝放弃了两次走的机会，只为和她爱的杰克在一起。最后，露丝答应杰克，要好好活着，露丝活到了一百多岁，这种活着，不仅仅是她自己的活，她把杰克的姓’加到自己的名上，她是在和杰克一起活着，她活着，包括了杰克的那一份！最后，露丝把海洋之心扔到了海里，或许，只有大海，才可以包容那，举世无双的海洋之心吧！！！', '2021-11-28'),
(2, '盗梦空间是我看过的最好电影之一，场景的设置十分多样，而且，我一开始，根本就没看懂怎样回事，直到影片进行到一段后，才开始慢慢地有些看懂，就是这个盗梦空间，让我开始对男主角里昂那多迪卡普里奥开始有了较深的印象，虽然在泰坦尼克号的片段里我就见过他，但是直到盗梦空间，我才开始真正感受到他的魅力，用枫的话说，是：他的眼神，很犀利。', '2021-11-29');

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE `book` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '编号',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名称',
  `writer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '作者',
  `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '国家',
  `classification` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分类',
  `posted_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '出版时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`id`, `name`, `writer`, `country`, `classification`, `posted_date`) VALUES
('001', '三体', '刘慈欣', '中国', '科幻', '2008-01'),
('002', '和声学教程', '斯波索宾', '苏联', '音乐', '2000-01'),
('003', '倚天屠龙记', '金庸', '中国', '武侠', '1994-05');

-- --------------------------------------------------------

--
-- 表的结构 `drama`
--

CREATE TABLE `drama` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classification` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `drama`
--

INSERT INTO `drama` (`id`, `name`, `writer`, `country`, `classification`) VALUES
('001', '哈姆雷特', '莎士比亚', '英国', '悲剧'),
('002', '悲惨世界', '克劳德-米歇尔·勋伯格', '英国', '悲剧'),
('003', '猫', '安德鲁·劳埃德·韦伯', '法国', '音乐剧');

-- --------------------------------------------------------

--
-- 表的结构 `emmy`
--

CREATE TABLE `emmy` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `emmy`
--

INSERT INTO `emmy` (`id`, `name`, `year`, `type`) VALUES
('001', '绝命毒师', '65', '最佳剧集'),
('002', '杰夫·丹尼尔斯', '65', '最佳男主角'),
('003', '马丁·斯科塞斯', '64', '最佳导演');

-- --------------------------------------------------------

--
-- 表的结构 `game`
--

CREATE TABLE `game` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classification` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `game`
--

INSERT INTO `game` (`id`, `name`, `company`, `country`, `classification`, `posted_date`) VALUES
('001', '巫师3', ' CD PROJEKT RED', '波兰', '开放世界、角色扮演', '2015-5-18'),
('002', 'GTA5', ' Rockstar North', '苏格兰', '开放世界、犯罪', '2015-4-14'),
('003', '塞尔达传说：旷野之息', 'Nintendo', '日本', '动作、冒险', '2017-03-03');

-- --------------------------------------------------------

--
-- 表的结构 `grammy`
--

CREATE TABLE `grammy` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `grammy`
--

INSERT INTO `grammy` (`id`, `name`, `player`, `year`, `type`) VALUES
('001', 'Don\'t Fence Me In', 'John Daversa', '61', '最佳爵士乐器独奏'),
('002', 'This Land', 'Gary Clark Jr.', '62', '最佳摇滚歌曲'),
('003', 'Father Of The Bride', 'Vampire Weekend', '72', '最佳另类音乐专辑');

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1638032874),
('m130524_201442_init', 1638032877),
('m190124_110200_add_verification_token_column_to_user_table', 1638032877);

-- --------------------------------------------------------

--
-- 表的结构 `movie`
--

CREATE TABLE `movie` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '编号',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名称',
  `director` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '导演',
  `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '国家',
  `classification` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分类',
  `posted_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '上映时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `movie`
--

INSERT INTO `movie` (`id`, `name`, `director`, `country`, `classification`, `posted_date`) VALUES
('001', '黑客帝国', '沃卓斯基', '美国', '动作/科幻', '1999-03-31'),
('002', '流浪地球', '郭帆', '中国', '科幻/冒险/灾难', '2019-02-05'),
('003', '肖申克的救赎', '弗兰克·德拉邦特', '美国', '剧情/犯罪', '1994-09-10'),
('004', '沙丘', '丹尼斯·维伦纽瓦', '美国', '科幻/冒险/动作', '2021-10-22'),
('005', '2001太空漫游', '斯坦利·库布里克', '美国', '科幻/冒险', '1968-04-02'),
('006', '星际穿越', '克里斯托弗·诺兰', '美国', '科幻', '2014-11-05'),
('007', '盗梦空间', '克里斯托弗·诺兰', '美国', '动作/悬疑/惊悚/科幻', '2010-07-16'),
('008', '降临', '丹尼斯·维伦纽瓦', '美国', '科幻/剧情', '2016-11-11');

-- --------------------------------------------------------

--
-- 表的结构 `music`
--

CREATE TABLE `music` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '编号',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名称',
  `singer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '歌手',
  `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '国家',
  `classification` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分类',
  `posted_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '发行时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `music`
--

INSERT INTO `music` (`id`, `name`, `singer`, `country`, `classification`, `posted_date`) VALUES
('001', '薛丁格的猫', '容祖儿', '中国', '流行', '2021-11-17'),
('002', '在未来', '王源', '中国', '流行', '2021-11-20'),
('003', 'Easy On Me', 'Adele', '美国', '流行', '2021-10-15');

-- --------------------------------------------------------

--
-- 表的结构 `oscar`
--

CREATE TABLE `oscar` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名称',
  `year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '获奖年份',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '获奖类型'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `oscar`
--

INSERT INTO `oscar` (`id`, `name`, `year`, `type`) VALUES
('001', '寄生虫', '2020', '最佳影片'),
('002', 'Rami Malek', '2019', '最佳男主角'),
('003', '华金·菲尼克斯', '2020', '最佳男主角'),
('004', '芮妮·齐薇格', '2020', '最佳女主角'),
('005', '布拉德·皮特', '2020', '最佳男配角'),
('006', '劳拉·邓恩', '2020', '最佳女配角');

-- --------------------------------------------------------

--
-- 表的结构 `tony`
--

CREATE TABLE `tony` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `tony`
--

INSERT INTO `tony` (`id`, `name`, `year`, `type`) VALUES
('001', '长靴', '67', '最佳音乐剧'),
('002', '哈利·波特与被诅咒的孩子', '72', '最佳话剧'),
('003', '安德鲁·加菲尔德', '72', '最佳话剧男主角');

-- --------------------------------------------------------

--
-- 表的结构 `tv`
--

CREATE TABLE `tv` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '编号',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名称',
  `director` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '导演',
  `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '国家',
  `classification` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分类',
  `posted_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '上映时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `tv`
--

INSERT INTO `tv` (`id`, `name`, `director`, `country`, `classification`, `posted_date`) VALUES
('001', '国王排名', '八田洋介', '日本', '动画', '2021-10-15'),
('002', '大明王朝1566', '张黎', '中国', '剧情/历史/古装', '2019-02-05'),
('003', '大世界之旅（第一季）', '菲尔·查沃德', '英国', '真人秀', '2016-11-18');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(3, '1234', 'erAKAumpDKyVxGQYkGa2koz80HNbIoDC', '$2y$13$wwEbQSRSvXm5m8OTYgjTAe/yWLOcV.tAdGC4NtR1FW7ktqvrhs3mK', NULL, '1234@1234.com', 9, 1638088047, 1638088047, 'budflNpz5YvceTokO0hSbmt0ZhwuZdOs_1638088047');

--
-- 转储表的索引
--

--
-- 表的索引 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `drama`
--
ALTER TABLE `drama`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `emmy`
--
ALTER TABLE `emmy`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `grammy`
--
ALTER TABLE `grammy`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `oscar`
--
ALTER TABLE `oscar`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `tony`
--
ALTER TABLE `tony`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
