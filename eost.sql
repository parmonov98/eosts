-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 08 2021 г., 04:25
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eost`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `descriptionru` longtext DEFAULT NULL,
  `descriptionen` longtext DEFAULT NULL,
  `descriptiontu` longtext DEFAULT NULL,
  `textru` longtext DEFAULT NULL,
  `texten` longtext DEFAULT NULL,
  `texttu` longtext DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `izox` tinyint(1) DEFAULT 0,
  `heddin` tinyint(1) NOT NULL DEFAULT 0,
  `pwp` int(1) DEFAULT 0,
  `slider` int(1) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `descriptionru`, `descriptionen`, `descriptiontu`, `textru`, `texten`, `texttu`, `img`, `view_count`, `izox`, `heddin`, `pwp`, `slider`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '{\"ru\":\"\\u041c\\u044b EOSTS\",\"en\":\"\\u041c\\u044b EOSTS\",\"tu\":\"\\u041c\\u044b EOSTS\"}', '<p>От точки вывоза до места назначения Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</p>', '<p>От точки вывоза до места назначения Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</p>', '<p>От точки вывоза до места назначения Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</p>', '<div class=\"h3\">От точки вывоза до места назначения</div>\r\n<div class=\"h4\">Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</div>', '<div class=\"h3\">От точки вывоза до места назначения</div>\r\n<div class=\"h4\">Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</div>', '<div class=\"h3\">От точки вывоза до места назначения</div>\r\n<div class=\"h4\">Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</div>', '{\"max\":\"max_1onjcwdykszvarifihrh.jpg\",\"sr\":\"sr_1onjcwdykszvarifihrh.jpg\",\"min\":\"min_1onjcwdykszvarifihrh.jpg\"}', 328, 1, 1, 1, 1, 1, 2, '2021-11-02 21:11:14', '2021-11-06 11:28:19'),
(2, '{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}', '<p>От точки вывоза до места назначения Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</p>', '<p>От точки вывоза до места назначения Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</p>', '<p>От точки вывоза до места назначения Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</p>', '<div class=\"h3\">От точки вывоза до места назначения</div>\r\n<div class=\"h4\">Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</div>', '<div class=\"h3\">От точки вывоза до места назначения</div>\r\n<div class=\"h4\">Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</div>', '<div class=\"h3\">От точки вывоза до места назначения</div>\r\n<div class=\"h4\">Мы транспортируем быстро и безопасно. Наша задача сделать так чтобы вы забыли о проблемах при транспортировке!</div>', '{\"max\":\"max_x8edf2q92avouplvaq9b.jpg\",\"sr\":\"sr_x8edf2q92avouplvaq9b.jpg\",\"min\":\"min_x8edf2q92avouplvaq9b.jpg\"}', 311, 1, 1, 1, 1, 1, 2, '2020-07-07 18:22:39', '2021-11-07 12:55:28'),
(3, '{\"ru\":\"KUYDIRGI KASALLIGIDAN OGOX BO\\u2018LING\",\"en\":\"\\u041a\\u0423\\u0419\\u0414\\u0418\\u0420\\u0413\\u0418 \\u041a\\u0410\\u0421\\u0410\\u041b\\u041b\\u0418\\u0413\\u0418\\u0414\\u0410\\u041d \\u041e\\u0413\\u041e\\u0425 \\u0411\\u040e\\u041b\\u0418\\u041d\\u0413\",\"tu\":\"KUYDIRGI KASALLIGIDAN OGOX BO\\u2018LING\"}', '<p><em>Kuydirgi kasalligi-zooantraponoz kasallik bo&lsquo;lib odamlar va xayvonlarda uchraydigan o&lsquo;ta xavfli va yuqumli kasallikdir.</em></p>\r\n<p><em>Kasallik qo&lsquo;zg&lsquo;atuvchisi-tuproq infeksiyasi bo&lsquo;lib, xayvonlarda alikentar yo&lsquo;l bilan yem-xashak orqali yuqadi, odamlarga tuproqda yalang oyoq ishlaganda, paxsa (devar) urganda, kulolchilarda, dexqonchilik ishlari ximoyalanmagan yo&lsquo;l bilan ishlaganda, ochiq jaroxat orqali, kuyydirgi bilan kasallangan xayvonlarni so&lsquo;yish, terisini shilish, go&lsquo;shtini maydalash, kala-pocha va oshqozon-ichaklarini tozalash jarayonlarida yuqadi.</em></p>\r\n<p><em>Xayvonlarda kuydirgi kasalligi juda og&lsquo;ir kechib, tana xarorati to&lsquo;satdan 40-41 Sgacha ko&lsquo;tariladi, ichaklaridan qon ketadi, xolsizlanib yotib qoladi va bu xolat o&lsquo;lim bilan yakun topadi.</em></p>\r\n<p><em>Kuydirgi kasalligi xayvonlardan-xayvonlarga, xayvonlardan-odamlarga yuqadi, lekin odamdan &ndash;odamga yuqmaydi.</em></p>', '<p><em>Kuydirgi kasalligi-zooantraponoz kasallik bo&lsquo;lib odamlar va xayvonlarda uchraydigan o&lsquo;ta xavfli va yuqumli kasallikdir.</em></p>\r\n<p><em>Kasallik qo&lsquo;zg&lsquo;atuvchisi-tuproq infeksiyasi bo&lsquo;lib, xayvonlarda alikentar yo&lsquo;l bilan yem-xashak orqali yuqadi, odamlarga tuproqda yalang oyoq ishlaganda, paxsa (devar) urganda, kulolchilarda, dexqonchilik ishlari ximoyalanmagan yo&lsquo;l bilan ishlaganda, ochiq jaroxat orqali, kuyydirgi bilan kasallangan xayvonlarni so&lsquo;yish, terisini shilish, go&lsquo;shtini maydalash, kala-pocha va oshqozon-ichaklarini tozalash jarayonlarida yuqadi.</em></p>\r\n<p><em>Xayvonlarda kuydirgi kasalligi juda og&lsquo;ir kechib, tana xarorati to&lsquo;satdan 40-41 Sgacha ko&lsquo;tariladi, ichaklaridan qon ketadi, xolsizlanib yotib qoladi va bu xolat o&lsquo;lim bilan yakun topadi.</em></p>\r\n<p><em>Kuydirgi kasalligi xayvonlardan-xayvonlarga, xayvonlardan-odamlarga yuqadi, lekin odamdan &ndash;odamga yuqmaydi.</em></p>', '<p><em>Kuydirgi kasalligi-zooantraponoz kasallik bo&lsquo;lib odamlar va xayvonlarda uchraydigan o&lsquo;ta xavfli va yuqumli kasallikdir.</em></p>\r\n<p><em>Kasallik qo&lsquo;zg&lsquo;atuvchisi-tuproq infeksiyasi bo&lsquo;lib, xayvonlarda alikentar yo&lsquo;l bilan yem-xashak orqali yuqadi, odamlarga tuproqda yalang oyoq ishlaganda, paxsa (devar) urganda, kulolchilarda, dexqonchilik ishlari ximoyalanmagan yo&lsquo;l bilan ishlaganda, ochiq jaroxat orqali, kuyydirgi bilan kasallangan xayvonlarni so&lsquo;yish, terisini shilish, go&lsquo;shtini maydalash, kala-pocha va oshqozon-ichaklarini tozalash jarayonlarida yuqadi.</em></p>\r\n<p><em>Xayvonlarda kuydirgi kasalligi juda og&lsquo;ir kechib, tana xarorati to&lsquo;satdan 40-41 Sgacha ko&lsquo;tariladi, ichaklaridan qon ketadi, xolsizlanib yotib qoladi va bu xolat o&lsquo;lim bilan yakun topadi.</em></p>\r\n<p><em>Kuydirgi kasalligi xayvonlardan-xayvonlarga, xayvonlardan-odamlarga yuqadi, lekin odamdan &ndash;odamga yuqmaydi.</em></p>', '<p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<em>Куйдирги касаллиги-зооантрапоноз касаллик бўлиб одамлар ва хайвонларда учрайдиган ўта хавфли ва юқумли касалликдир.</em></p>\r\n<p style=\"text-align: justify;\">Касаллик қўзғатувчиси-тупроқ инфекцияси бўлиб, хайвонларда аликентар йўл билан ем-хашак орқали юқади, одамларга тупроқда яланг оёқишлаганда, пахса (девар) урганда, кулолчиларда, дехқончилик ишлари химояланмаган йўл билан ишлаганда, очиқ жарохат орқали, куййдирги билан касалланган хайвонларни сўйиш, терисини шилиш, гўштини майдалаш, кала-поча ва ошқозон-ичакларини тозалаш жараёнларида юқади.</p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-54-09.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>\r\n<p style=\"text-align: justify;\"><em>Хайвонларда куйдирги касаллиги жуда оғир кечиб, тана харорати тўсатдан 40-41 Сгача кўтарилади, ичакларидан қон кетади, холсизланиб ётиб қолади ва бу холат ўлим билан якун топади.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-54-58.jpg\" alt=\"\" width=\"960\" height=\"1280\" /></em></p>\r\n<p style=\"text-align: justify;\"><em>Куйдирги касаллиги хайвонлардан-хайвонларга, хайвонлардан-одамларга юқади, лекин одамдан &ndash;одамга юқмайди.</em></p>\r\n<p><strong>КАСАЛЛИК ОДАМЛАРДА ҚАНДАЙ КЕЧАДИ?</strong></p>\r\n<p style=\"text-align: justify;\"><em>-Одамларда касаллик асосан (98.0-99.0% холатларда) тери яраси (корбункул) шаклида наоён бўлади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Беморларда тана харорати кўтарилади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Куйдирги яраси оғриқсиз бўлади, яранинг устки қисми кўмир рангига ўхшаш қора пўмтлоқ билан қопланади, яра атрофи қизариб, шиш пайдо бўлади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Куйдирги яраси кўпинча баданнинг очиқ қисмларида (қўл, оёқ, юз, бўйин) учрайди.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-03.jpg\" alt=\"\" width=\"960\" height=\"1280\" /></em></p>\r\n<p><strong>КУЙДИРГИ КАСАЛЛИГИДАН САҚЛАНИШ УЧУН:</strong></p>\r\n<p style=\"text-align: justify;\"><em>-чорва молларини ветеринар кўригидан ўтказиб, кўйдирги касаллигига қарши эмлатиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-касал бўлган хайвонларни ветеринар рухсатисиз сўйилишига йўл қуймаслик, молларни фақат кушона ва сўйиш майдончаларида ветеринар кўригидан ўтказилгандан сўнг сўйиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-дуч келган жойлардан гўшт сотиб олмаслик, гўштни гўшт павилёнлари ва дўконлардан харид қилиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-ҳайвонларни парвариш қилишда шахсий гигиена қоидаларига қатъий риоя этиш; </em></p>\r\n<p style=\"text-align: justify;\"><em>-чорва моллари касалланганда, зудлик билан ветеринария хизмати идораларига мурожат қилиш керак.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-08.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-15.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>', '<p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<em>Куйдирги касаллиги-зооантрапоноз касаллик бўлиб одамлар ва хайвонларда учрайдиган ўта хавфли ва юқумли касалликдир.</em></p>\r\n<p style=\"text-align: justify;\">Касаллик қўзғатувчиси-тупроқ инфекцияси бўлиб, хайвонларда аликентар йўл билан ем-хашак орқали юқади, одамларга тупроқда яланг оёқишлаганда, пахса (девар) урганда, кулолчиларда, дехқончилик ишлари химояланмаган йўл билан ишлаганда, очиқ жарохат орқали, куййдирги билан касалланган хайвонларни сўйиш, терисини шилиш, гўштини майдалаш, кала-поча ва ошқозон-ичакларини тозалаш жараёнларида юқади.</p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-54-09.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>\r\n<p style=\"text-align: justify;\"><em>Хайвонларда куйдирги касаллиги жуда оғир кечиб, тана харорати тўсатдан 40-41 Сгача кўтарилади, ичакларидан қон кетади, холсизланиб ётиб қолади ва бу холат ўлим билан якун топади.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-54-58.jpg\" alt=\"\" width=\"960\" height=\"1280\" /></em></p>\r\n<p style=\"text-align: justify;\"><em>Куйдирги касаллиги хайвонлардан-хайвонларга, хайвонлардан-одамларга юқади, лекин одамдан &ndash;одамга юқмайди.</em></p>\r\n<p><strong>КАСАЛЛИК ОДАМЛАРДА ҚАНДАЙ КЕЧАДИ?</strong></p>\r\n<p style=\"text-align: justify;\"><em>-Одамларда касаллик асосан (98.0-99.0% холатларда) тери яраси (корбункул) шаклида наоён бўлади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Беморларда тана харорати кўтарилади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Куйдирги яраси оғриқсиз бўлади, яранинг устки қисми кўмир рангига ўхшаш қора пўмтлоқ билан қопланади, яра атрофи қизариб, шиш пайдо бўлади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Куйдирги яраси кўпинча баданнинг очиқ қисмларида (қўл, оёқ, юз, бўйин) учрайди.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-03.jpg\" alt=\"\" width=\"960\" height=\"1280\" /></em></p>\r\n<p><strong>КУЙДИРГИ КАСАЛЛИГИДАН САҚЛАНИШ УЧУН:</strong></p>\r\n<p style=\"text-align: justify;\"><em>-чорва молларини ветеринар кўригидан ўтказиб, кўйдирги касаллигига қарши эмлатиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-касал бўлган хайвонларни ветеринар рухсатисиз сўйилишига йўл қуймаслик, молларни фақат кушона ва сўйиш майдончаларида ветеринар кўригидан ўтказилгандан сўнг сўйиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-дуч келган жойлардан гўшт сотиб олмаслик, гўштни гўшт павилёнлари ва дўконлардан харид қилиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-ҳайвонларни парвариш қилишда шахсий гигиена қоидаларига қатъий риоя этиш; </em></p>\r\n<p style=\"text-align: justify;\"><em>-чорва моллари касалланганда, зудлик билан ветеринария хизмати идораларига мурожат қилиш керак.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-08.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-15.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>', '<p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<em>Куйдирги касаллиги-зооантрапоноз касаллик бўлиб одамлар ва хайвонларда учрайдиган ўта хавфли ва юқумли касалликдир.</em></p>\r\n<p style=\"text-align: justify;\">Касаллик қўзғатувчиси-тупроқ инфекцияси бўлиб, хайвонларда аликентар йўл билан ем-хашак орқали юқади, одамларга тупроқда яланг оёқишлаганда, пахса (девар) урганда, кулолчиларда, дехқончилик ишлари химояланмаган йўл билан ишлаганда, очиқ жарохат орқали, куййдирги билан касалланган хайвонларни сўйиш, терисини шилиш, гўштини майдалаш, кала-поча ва ошқозон-ичакларини тозалаш жараёнларида юқади.</p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-54-09.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>\r\n<p style=\"text-align: justify;\"><em>Хайвонларда куйдирги касаллиги жуда оғир кечиб, тана харорати тўсатдан 40-41 Сгача кўтарилади, ичакларидан қон кетади, холсизланиб ётиб қолади ва бу холат ўлим билан якун топади.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-54-58.jpg\" alt=\"\" width=\"960\" height=\"1280\" /></em></p>\r\n<p style=\"text-align: justify;\"><em>Куйдирги касаллиги хайвонлардан-хайвонларга, хайвонлардан-одамларга юқади, лекин одамдан &ndash;одамга юқмайди.</em></p>\r\n<p><strong>КАСАЛЛИК ОДАМЛАРДА ҚАНДАЙ КЕЧАДИ?</strong></p>\r\n<p style=\"text-align: justify;\"><em>-Одамларда касаллик асосан (98.0-99.0% холатларда) тери яраси (корбункул) шаклида наоён бўлади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Беморларда тана харорати кўтарилади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Куйдирги яраси оғриқсиз бўлади, яранинг устки қисми кўмир рангига ўхшаш қора пўмтлоқ билан қопланади, яра атрофи қизариб, шиш пайдо бўлади.</em></p>\r\n<p style=\"text-align: justify;\"><em>-Куйдирги яраси кўпинча баданнинг очиқ қисмларида (қўл, оёқ, юз, бўйин) учрайди.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-03.jpg\" alt=\"\" width=\"960\" height=\"1280\" /></em></p>\r\n<p><strong>КУЙДИРГИ КАСАЛЛИГИДАН САҚЛАНИШ УЧУН:</strong></p>\r\n<p style=\"text-align: justify;\"><em>-чорва молларини ветеринар кўригидан ўтказиб, кўйдирги касаллигига қарши эмлатиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-касал бўлган хайвонларни ветеринар рухсатисиз сўйилишига йўл қуймаслик, молларни фақат кушона ва сўйиш майдончаларида ветеринар кўригидан ўтказилгандан сўнг сўйиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-дуч келган жойлардан гўшт сотиб олмаслик, гўштни гўшт павилёнлари ва дўконлардан харид қилиш;</em></p>\r\n<p style=\"text-align: justify;\"><em>-ҳайвонларни парвариш қилишда шахсий гигиена қоидаларига қатъий риоя этиш; </em></p>\r\n<p style=\"text-align: justify;\"><em>-чорва моллари касалланганда, зудлик билан ветеринария хизмати идораларига мурожат қилиш керак.</em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-08.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>\r\n<p style=\"text-align: justify;\"><em><img src=\"/photos/1/yangiliklar/002/photo_2020-07-05_10-55-15.jpg\" alt=\"\" width=\"1280\" height=\"960\" /></em></p>', '{\"max\":\"max_isjz66zhmzutzl6g1lve.jpg\",\"sr\":\"sr_isjz66zhmzutzl6g1lve.jpg\",\"min\":\"min_isjz66zhmzutzl6g1lve.jpg\"}', 301, 1, 1, 1, 0, 1, 2, '2020-07-07 20:26:16', '2021-11-06 11:28:51'),
(4, '{\"ru\":\"Xalq ta\\u2019limi vazirligining kengaytirilgan Hay\\u2019at yig\\u2018ilishida ta\\u2019lim sifatini oshirish va maktablar reytingi masalalari tanqidiy tahlil etildi\",\"en\":\"\\u0425\\u0430\\u043b\\u049b \\u0442\\u0430\\u044a\\u043b\\u0438\\u043c\\u0438 \\u0432\\u0430\\u0437\\u0438\\u0440\\u043b\\u0438\\u0433\\u0438\\u043d\\u0438\\u043d\\u0433 \\u043a\\u0435\\u043d\\u0433\\u0430\\u0439\\u0442\\u0438\\u0440\\u0438\\u043b\\u0433\\u0430\\u043d \\u04b2\\u0430\\u0439\\u044a\\u0430\\u0442 \\u0439\\u0438\\u0493\\u0438\\u043b\\u0438\\u0448\\u0438\\u0434\\u0430 \\u0442\\u0430\\u044a\\u043b\\u0438\\u043c \\u0441\\u0438\\u0444\\u0430\\u0442\\u0438\\u043d\\u0438 \\u043e\\u0448\\u0438\\u0440\\u0438\\u0448 \\u0432\\u0430 \\u043c\\u0430\\u043a\\u0442\\u0430\\u0431\\u043b\\u0430\\u0440 \\u0440\\u0435\\u0439\\u0442\\u0438\\u043d\\u0433\\u0438 \\u043c\\u0430\\u0441\\u0430\\u043b\\u0430\\u043b\\u0430\\u0440\\u0438 \\u0442\\u0430\\u043d\\u049b\\u0438\\u0434\\u0438\\u0439 \\u0442\\u0430\\u04b3\\u043b\\u0438\\u043b \\u044d\\u0442\\u0438\\u043b\\u0434\\u0438\",\"tu\":\"Xalq ta\\u2019limi vazirligining kengaytirilgan Hay\\u2019at yig\\u2018ilishida ta\\u2019lim sifatini oshirish va maktablar reytingi masalalari tanqidiy tahlil etildi\"}', '<p style=\"text-align: justify;\">Joriy yilning 22 oktyabr kuni O&lsquo;zbekiston Respublikasi Xalq ta&rsquo;limi vazirligida &ldquo;Xalq ta&rsquo;limi vazirligi hududiy boshqaruv organlari va umumiy o&lsquo;rta ta&rsquo;lim muassasalari faoliyati samaradorligi hamda 2020 yil milliy reyting natijalari&rdquo;ga bag&lsquo;ishlangan hay&rsquo;at majlisi bo&lsquo;lib o&lsquo;tdi.</p>', '<p style=\"text-align: justify;\">Joriy yilning 22 oktyabr kuni O&lsquo;zbekiston Respublikasi Xalq ta&rsquo;limi vazirligida &ldquo;Xalq ta&rsquo;limi vazirligi hududiy boshqaruv organlari va umumiy o&lsquo;rta ta&rsquo;lim muassasalari faoliyati samaradorligi hamda 2020 yil milliy reyting natijalari&rdquo;ga bag&lsquo;ishlangan hay&rsquo;at majlisi bo&lsquo;lib o&lsquo;tdi.</p>', '<p style=\"text-align: justify;\">Joriy yilning 22 oktyabr kuni O&lsquo;zbekiston Respublikasi Xalq ta&rsquo;limi vazirligida &ldquo;Xalq ta&rsquo;limi vazirligi hududiy boshqaruv organlari va umumiy o&lsquo;rta ta&rsquo;lim muassasalari faoliyati samaradorligi hamda 2020 yil milliy reyting natijalari&rdquo;ga bag&lsquo;ishlangan hay&rsquo;at majlisi bo&lsquo;lib o&lsquo;tdi.</p>', '<p style=\"text-align: justify;\">Жорий йилнинг 22 октябрь куни Ўзбекистон Республикаси Халқ таълими вазирлигида &ldquo;Халқ таълими вазирлиги ҳудудий бошқарув органлари ва умумий ўрта таълим муассасалари фаолияти самарадорлиги ҳамда 2020 йил миллий рейтинг натижалари&rdquo;га бағишланган ҳайъат мажлиси бўлиб ўтди.</p>\r\n<p style=\"text-align: justify;\">Видеоселектор тарзида ўтказилган йиғилишда Халқ таълими вазирлиги раҳбарияти, Вазирлар Маҳкамаси ҳузуридаги Таълим сифатини назорат қилиш давлат инспекцияси, ушбу ташкилотларнинг ҳудудий бўлинмалари раҳбарлари иштирок этди.</p>\r\n<p style=\"text-align: justify;\">Йиғилишда 2019/2020 ўқув йили учун мактаблар рейтингини аниқлаш мақсадида 2019 йилнинг 3 октябрдан 18 декабргача республикамизнинг барча туман ва шаҳарларидан 992 та умумтаълим муассасаларида назорат ишлари ва ижтимоий сўровнома натижалари таҳлил этилди.</p>\r\n<p style=\"text-align: justify;\">Мактаблар рейтингини тузишда 4 та кўрсаткич асосий мезон сифатида жорий қилинган. Булар битирувчи ўқувчиларнинг умумтаълим фанлари бўйича таълим тайёргарлик даражаси ва сифат кўрсаткичи, 9-синф ўқувчиларининг билим даражаси, олий ва биринчи тоифали ўқитувчилар улуши, умумтаълим муассасасининг ўқувчилари ва педагог жамоаси ўртасида ўтказиладиган сўровнома натижалари.</p>\r\n<p style=\"font-weight: 500;\"><img src=\"/photos/1/yangiliklar/01/kvvfffff-2.jpg\" alt=\"\" width=\"769\" height=\"432\" /></p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларига кўра, ҳудудлар рейтингида энг юқори ўринларни Бухоро, Наманган ва Хоразм вилоятлари эгаллаган бўлса, қуйи ўринларда Сирдарё, Тошкент вилояти ва Сурхондарё вилоятлари қайд этилди.</p>\r\n<p style=\"text-align: justify;\">11-синф битирувчиларининг ўқишга кириш кўрсаткичлари бўйича Тошкент шаҳри (10,2%), Навоий (10,2%), ҚҚР (10,4%, Фарғона (10,7%) ва Бухоро (16,5%) вилоятлари пешқадам бўлди.</p>\r\n<p style=\"text-align: justify;\">9-синф ўқувчиларининг билим даражасини аниқлаш бўйича ўтказилган назорат ишларида жами 22769 нафар ўқувчи қатнашди ва уларнинг 56.1%и она тилидан диктантдан ва 11.97%и математикадан ёзма ишдан ижобий баҳоланди.</p>\r\n<p style=\"text-align: justify;\">Олий ва биринчи тоифали ўқитувчилар улуши бўйича юқори ўринларда Фарғона, Андижон ва Наманган вилоятлари бўлса, қуйи ўринларда Самарқанд, Сурхондарё ва Жиззах вилоятлари мактаблари аниқланди.</p>\r\n<p>Мактаб ўқитувчилари жамоаси билан ўтказилган сўровномада жами 28707 нафар педагог ходимлар қатнашди. Ижтимоий сўровномалар TALIS-халқаро тадқиқотлари саволлари асосида ўтказилди. Бу ўтказилган сўровномалар ўқитувчининг профессионал фаолиятини текширишга имконият берди. Сўровномада ўқитувчилар ўз касбий тайёргарлиги, педагогик фаолияти, шахсий фикр-мулоҳазалари, мактаб шароити ҳақида маълумот берган.&nbsp;</p>\r\n<p>Рейтингга жалб қилинган мактаблар рўйхати умумтаълим муассасалари рейтингини тузиш бўйича мувофиқлаштирувчи комиссия томонидан тасдиқланган технология асосида танлаб олиш орқали шакллантирилди. Танлов натижаларига кўра, 186 та ихтисослаштирилган мактаб ва 806 та оддий мактаб рейтинг рўйхатига киритилди.</p>\r\n<p style=\"text-align: justify;\">Мактаб рейтингини аниқлайдиган индикаторларни яратиш жараёнида хорижий тажрибалар ўрганилиб, хусусан АҚШ, Россия Федерацияси, Япония, Австралия, Швейцария, Голландия, Канада ва Украина каби давлатларда умумтаълим муассасалари рейтингини баҳолаш методикаси чуқур таҳлил қилинди.</p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларини таҳлил қилиш асосида соғлом рақобат муҳитни шакллантириш, мактабларда таълим сифатини кўтариш, ўқитувчиларнинг билим даражасини ва педагогик маҳоратини ошириш, умумтаълим муассасалари фаолиятидаги очиқлик ва шаффофлик даражасини таъминлашга қаратилган чора-тадбирларни ишлаб чиқиш, паст кўрсаткич қайд этган мактабларда таълим сифатини кўтариш ва камчиликларни бартараф қилиш бўйича таклифлар билдирилди.</p>', '<p style=\"text-align: justify;\">Жорий йилнинг 22 октябрь куни Ўзбекистон Республикаси Халқ таълими вазирлигида &ldquo;Халқ таълими вазирлиги ҳудудий бошқарув органлари ва умумий ўрта таълим муассасалари фаолияти самарадорлиги ҳамда 2020 йил миллий рейтинг натижалари&rdquo;га бағишланган ҳайъат мажлиси бўлиб ўтди.</p>\r\n<p style=\"text-align: justify;\">Видеоселектор тарзида ўтказилган йиғилишда Халқ таълими вазирлиги раҳбарияти, Вазирлар Маҳкамаси ҳузуридаги Таълим сифатини назорат қилиш давлат инспекцияси, ушбу ташкилотларнинг ҳудудий бўлинмалари раҳбарлари иштирок этди.</p>\r\n<p style=\"text-align: justify;\">Йиғилишда 2019/2020 ўқув йили учун мактаблар рейтингини аниқлаш мақсадида 2019 йилнинг 3 октябрдан 18 декабргача республикамизнинг барча туман ва шаҳарларидан 992 та умумтаълим муассасаларида назорат ишлари ва ижтимоий сўровнома натижалари таҳлил этилди.</p>\r\n<p style=\"text-align: justify;\">Мактаблар рейтингини тузишда 4 та кўрсаткич асосий мезон сифатида жорий қилинган. Булар битирувчи ўқувчиларнинг умумтаълим фанлари бўйича таълим тайёргарлик даражаси ва сифат кўрсаткичи, 9-синф ўқувчиларининг билим даражаси, олий ва биринчи тоифали ўқитувчилар улуши, умумтаълим муассасасининг ўқувчилари ва педагог жамоаси ўртасида ўтказиладиган сўровнома натижалари.</p>\r\n<p style=\"font-weight: 500;\"><img src=\"/photos/1/yangiliklar/01/kvvfffff-2.jpg\" alt=\"\" width=\"769\" height=\"432\" /></p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларига кўра, ҳудудлар рейтингида энг юқори ўринларни Бухоро, Наманган ва Хоразм вилоятлари эгаллаган бўлса, қуйи ўринларда Сирдарё, Тошкент вилояти ва Сурхондарё вилоятлари қайд этилди.</p>\r\n<p style=\"text-align: justify;\">11-синф битирувчиларининг ўқишга кириш кўрсаткичлари бўйича Тошкент шаҳри (10,2%), Навоий (10,2%), ҚҚР (10,4%, Фарғона (10,7%) ва Бухоро (16,5%) вилоятлари пешқадам бўлди.</p>\r\n<p style=\"text-align: justify;\">9-синф ўқувчиларининг билим даражасини аниқлаш бўйича ўтказилган назорат ишларида жами 22769 нафар ўқувчи қатнашди ва уларнинг 56.1%и она тилидан диктантдан ва 11.97%и математикадан ёзма ишдан ижобий баҳоланди.</p>\r\n<p style=\"text-align: justify;\">Олий ва биринчи тоифали ўқитувчилар улуши бўйича юқори ўринларда Фарғона, Андижон ва Наманган вилоятлари бўлса, қуйи ўринларда Самарқанд, Сурхондарё ва Жиззах вилоятлари мактаблари аниқланди.</p>\r\n<p>Мактаб ўқитувчилари жамоаси билан ўтказилган сўровномада жами 28707 нафар педагог ходимлар қатнашди. Ижтимоий сўровномалар TALIS-халқаро тадқиқотлари саволлари асосида ўтказилди. Бу ўтказилган сўровномалар ўқитувчининг профессионал фаолиятини текширишга имконият берди. Сўровномада ўқитувчилар ўз касбий тайёргарлиги, педагогик фаолияти, шахсий фикр-мулоҳазалари, мактаб шароити ҳақида маълумот берган.&nbsp;</p>\r\n<p>Рейтингга жалб қилинган мактаблар рўйхати умумтаълим муассасалари рейтингини тузиш бўйича мувофиқлаштирувчи комиссия томонидан тасдиқланган технология асосида танлаб олиш орқали шакллантирилди. Танлов натижаларига кўра, 186 та ихтисослаштирилган мактаб ва 806 та оддий мактаб рейтинг рўйхатига киритилди.</p>\r\n<p style=\"text-align: justify;\">Мактаб рейтингини аниқлайдиган индикаторларни яратиш жараёнида хорижий тажрибалар ўрганилиб, хусусан АҚШ, Россия Федерацияси, Япония, Австралия, Швейцария, Голландия, Канада ва Украина каби давлатларда умумтаълим муассасалари рейтингини баҳолаш методикаси чуқур таҳлил қилинди.</p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларини таҳлил қилиш асосида соғлом рақобат муҳитни шакллантириш, мактабларда таълим сифатини кўтариш, ўқитувчиларнинг билим даражасини ва педагогик маҳоратини ошириш, умумтаълим муассасалари фаолиятидаги очиқлик ва шаффофлик даражасини таъминлашга қаратилган чора-тадбирларни ишлаб чиқиш, паст кўрсаткич қайд этган мактабларда таълим сифатини кўтариш ва камчиликларни бартараф қилиш бўйича таклифлар билдирилди.</p>\r\n<p style=\"text-align: justify;\">Жорий йилнинг 22 октябрь куни Ўзбекистон Республикаси Халқ таълими вазирлигида &ldquo;Халқ таълими вазирлиги ҳудудий бошқарув органлари ва умумий ўрта таълим муассасалари фаолияти самарадорлиги ҳамда 2020 йил миллий рейтинг натижалари&rdquo;га бағишланган ҳайъат мажлиси бўлиб ўтди.</p>\r\n<p style=\"text-align: justify;\">Видеоселектор тарзида ўтказилган йиғилишда Халқ таълими вазирлиги раҳбарияти, Вазирлар Маҳкамаси ҳузуридаги Таълим сифатини назорат қилиш давлат инспекцияси, ушбу ташкилотларнинг ҳудудий бўлинмалари раҳбарлари иштирок этди.</p>\r\n<p style=\"text-align: justify;\">Йиғилишда 2019/2020 ўқув йили учун мактаблар рейтингини аниқлаш мақсадида 2019 йилнинг 3 октябрдан 18 декабргача республикамизнинг барча туман ва шаҳарларидан 992 та умумтаълим муассасаларида назорат ишлари ва ижтимоий сўровнома натижалари таҳлил этилди.</p>\r\n<p style=\"text-align: justify;\">Мактаблар рейтингини тузишда 4 та кўрсаткич асосий мезон сифатида жорий қилинган. Булар битирувчи ўқувчиларнинг умумтаълим фанлари бўйича таълим тайёргарлик даражаси ва сифат кўрсаткичи, 9-синф ўқувчиларининг билим даражаси, олий ва биринчи тоифали ўқитувчилар улуши, умумтаълим муассасасининг ўқувчилари ва педагог жамоаси ўртасида ўтказиладиган сўровнома натижалари.</p>\r\n<p style=\"font-weight: 500;\"><img src=\"/photos/1/yangiliklar/01/kvvfffff-2.jpg\" alt=\"\" width=\"769\" height=\"432\" /></p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларига кўра, ҳудудлар рейтингида энг юқори ўринларни Бухоро, Наманган ва Хоразм вилоятлари эгаллаган бўлса, қуйи ўринларда Сирдарё, Тошкент вилояти ва Сурхондарё вилоятлари қайд этилди.</p>\r\n<p style=\"text-align: justify;\">11-синф битирувчиларининг ўқишга кириш кўрсаткичлари бўйича Тошкент шаҳри (10,2%), Навоий (10,2%), ҚҚР (10,4%, Фарғона (10,7%) ва Бухоро (16,5%) вилоятлари пешқадам бўлди.</p>\r\n<p style=\"text-align: justify;\">9-синф ўқувчиларининг билим даражасини аниқлаш бўйича ўтказилган назорат ишларида жами 22769 нафар ўқувчи қатнашди ва уларнинг 56.1%и она тилидан диктантдан ва 11.97%и математикадан ёзма ишдан ижобий баҳоланди.</p>\r\n<p style=\"text-align: justify;\">Олий ва биринчи тоифали ўқитувчилар улуши бўйича юқори ўринларда Фарғона, Андижон ва Наманган вилоятлари бўлса, қуйи ўринларда Самарқанд, Сурхондарё ва Жиззах вилоятлари мактаблари аниқланди.</p>\r\n<p>Мактаб ўқитувчилари жамоаси билан ўтказилган сўровномада жами 28707 нафар педагог ходимлар қатнашди. Ижтимоий сўровномалар TALIS-халқаро тадқиқотлари саволлари асосида ўтказилди. Бу ўтказилган сўровномалар ўқитувчининг профессионал фаолиятини текширишга имконият берди. Сўровномада ўқитувчилар ўз касбий тайёргарлиги, педагогик фаолияти, шахсий фикр-мулоҳазалари, мактаб шароити ҳақида маълумот берган.&nbsp;</p>\r\n<p>Рейтингга жалб қилинган мактаблар рўйхати умумтаълим муассасалари рейтингини тузиш бўйича мувофиқлаштирувчи комиссия томонидан тасдиқланган технология асосида танлаб олиш орқали шакллантирилди. Танлов натижаларига кўра, 186 та ихтисослаштирилган мактаб ва 806 та оддий мактаб рейтинг рўйхатига киритилди.</p>\r\n<p style=\"text-align: justify;\">Мактаб рейтингини аниқлайдиган индикаторларни яратиш жараёнида хорижий тажрибалар ўрганилиб, хусусан АҚШ, Россия Федерацияси, Япония, Австралия, Швейцария, Голландия, Канада ва Украина каби давлатларда умумтаълим муассасалари рейтингини баҳолаш методикаси чуқур таҳлил қилинди.</p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларини таҳлил қилиш асосида соғлом рақобат муҳитни шакллантириш, мактабларда таълим сифатини кўтариш, ўқитувчиларнинг билим даражасини ва педагогик маҳоратини ошириш, умумтаълим муассасалари фаолиятидаги очиқлик ва шаффофлик даражасини таъминлашга қаратилган чора-тадбирларни ишлаб чиқиш, паст кўрсаткич қайд этган мактабларда таълим сифатини кўтариш ва камчиликларни бартараф қилиш бўйича таклифлар билдирилди.</p>', '<p style=\"text-align: justify;\">Жорий йилнинг 22 октябрь куни Ўзбекистон Республикаси Халқ таълими вазирлигида &ldquo;Халқ таълими вазирлиги ҳудудий бошқарув органлари ва умумий ўрта таълим муассасалари фаолияти самарадорлиги ҳамда 2020 йил миллий рейтинг натижалари&rdquo;га бағишланган ҳайъат мажлиси бўлиб ўтди.</p>\r\n<p style=\"text-align: justify;\">Видеоселектор тарзида ўтказилган йиғилишда Халқ таълими вазирлиги раҳбарияти, Вазирлар Маҳкамаси ҳузуридаги Таълим сифатини назорат қилиш давлат инспекцияси, ушбу ташкилотларнинг ҳудудий бўлинмалари раҳбарлари иштирок этди.</p>\r\n<p style=\"text-align: justify;\">Йиғилишда 2019/2020 ўқув йили учун мактаблар рейтингини аниқлаш мақсадида 2019 йилнинг 3 октябрдан 18 декабргача республикамизнинг барча туман ва шаҳарларидан 992 та умумтаълим муассасаларида назорат ишлари ва ижтимоий сўровнома натижалари таҳлил этилди.</p>\r\n<p style=\"text-align: justify;\">Мактаблар рейтингини тузишда 4 та кўрсаткич асосий мезон сифатида жорий қилинган. Булар битирувчи ўқувчиларнинг умумтаълим фанлари бўйича таълим тайёргарлик даражаси ва сифат кўрсаткичи, 9-синф ўқувчиларининг билим даражаси, олий ва биринчи тоифали ўқитувчилар улуши, умумтаълим муассасасининг ўқувчилари ва педагог жамоаси ўртасида ўтказиладиган сўровнома натижалари.</p>\r\n<p style=\"font-weight: 500;\"><img src=\"/photos/1/yangiliklar/01/kvvfffff-2.jpg\" alt=\"\" width=\"769\" height=\"432\" /></p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларига кўра, ҳудудлар рейтингида энг юқори ўринларни Бухоро, Наманган ва Хоразм вилоятлари эгаллаган бўлса, қуйи ўринларда Сирдарё, Тошкент вилояти ва Сурхондарё вилоятлари қайд этилди.</p>\r\n<p style=\"text-align: justify;\">11-синф битирувчиларининг ўқишга кириш кўрсаткичлари бўйича Тошкент шаҳри (10,2%), Навоий (10,2%), ҚҚР (10,4%, Фарғона (10,7%) ва Бухоро (16,5%) вилоятлари пешқадам бўлди.</p>\r\n<p style=\"text-align: justify;\">9-синф ўқувчиларининг билим даражасини аниқлаш бўйича ўтказилган назорат ишларида жами 22769 нафар ўқувчи қатнашди ва уларнинг 56.1%и она тилидан диктантдан ва 11.97%и математикадан ёзма ишдан ижобий баҳоланди.</p>\r\n<p style=\"text-align: justify;\">Олий ва биринчи тоифали ўқитувчилар улуши бўйича юқори ўринларда Фарғона, Андижон ва Наманган вилоятлари бўлса, қуйи ўринларда Самарқанд, Сурхондарё ва Жиззах вилоятлари мактаблари аниқланди.</p>\r\n<p>Мактаб ўқитувчилари жамоаси билан ўтказилган сўровномада жами 28707 нафар педагог ходимлар қатнашди. Ижтимоий сўровномалар TALIS-халқаро тадқиқотлари саволлари асосида ўтказилди. Бу ўтказилган сўровномалар ўқитувчининг профессионал фаолиятини текширишга имконият берди. Сўровномада ўқитувчилар ўз касбий тайёргарлиги, педагогик фаолияти, шахсий фикр-мулоҳазалари, мактаб шароити ҳақида маълумот берган.&nbsp;</p>\r\n<p>Рейтингга жалб қилинган мактаблар рўйхати умумтаълим муассасалари рейтингини тузиш бўйича мувофиқлаштирувчи комиссия томонидан тасдиқланган технология асосида танлаб олиш орқали шакллантирилди. Танлов натижаларига кўра, 186 та ихтисослаштирилган мактаб ва 806 та оддий мактаб рейтинг рўйхатига киритилди.</p>\r\n<p style=\"text-align: justify;\">Мактаб рейтингини аниқлайдиган индикаторларни яратиш жараёнида хорижий тажрибалар ўрганилиб, хусусан АҚШ, Россия Федерацияси, Япония, Австралия, Швейцария, Голландия, Канада ва Украина каби давлатларда умумтаълим муассасалари рейтингини баҳолаш методикаси чуқур таҳлил қилинди.</p>\r\n<p style=\"text-align: justify;\">Рейтинг натижаларини таҳлил қилиш асосида соғлом рақобат муҳитни шакллантириш, мактабларда таълим сифатини кўтариш, ўқитувчиларнинг билим даражасини ва педагогик маҳоратини ошириш, умумтаълим муассасалари фаолиятидаги очиқлик ва шаффофлик даражасини таъминлашга қаратилган чора-тадбирларни ишлаб чиқиш, паст кўрсаткич қайд этган мактабларда таълим сифатини кўтариш ва камчиликларни бартараф қилиш бўйича таклифлар билдирилди.</p>', NULL, 257, 1, 1, 1, 0, 1, 2, '2020-11-02 19:16:34', '2021-11-06 06:55:23'),
(5, '{\"ru\":\"\\u041f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u043a\\u0430 \\u0442\\u0440\\u0435\\u0431\\u0443\\u044e\\u0449\\u0438\\u0439 \\u043e\\u0441\\u043e\\u0431\\u044b\\u0445 \\u0443\\u0441\\u043b\\u043e\\u0432\\u0438\\u0439 \\u0445\\u0440\\u0430\\u043d\\u0435\\u043d\\u0438\\u044f\",\"en\":\"\\u041f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u043a\\u0430 \\u0442\\u0440\\u0435\\u0431\\u0443\\u044e\\u0449\\u0438\\u0439 \\u043e\\u0441\\u043e\\u0431\\u044b\\u0445 \\u0443\\u0441\\u043b\\u043e\\u0432\\u0438\\u0439 \\u0445\\u0440\\u0430\\u043d\\u0435\\u043d\\u0438\\u044f\",\"tu\":\"\\u041f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u043a\\u0430 \\u0442\\u0440\\u0435\\u0431\\u0443\\u044e\\u0449\\u0438\\u0439 \\u043e\\u0441\\u043e\\u0431\\u044b\\u0445 \\u0443\\u0441\\u043b\\u043e\\u0432\\u0438\\u0439 \\u0445\\u0440\\u0430\\u043d\\u0435\\u043d\\u0438\\u044f\"}', '<p>Под классификацию таких грузов<br />попадают, в основном, пищевые продукты и требующие особых условий хранения (уровень<br />влажности, температурный режим) и сроков доставки.</p>', '<p>Под классификацию таких грузов<br />попадают, в основном, пищевые продукты и требующие особых условий хранения (уровень<br />влажности, температурный режим) и сроков доставки.</p>', '<p>Под классификацию таких грузов<br />попадают, в основном, пищевые продукты и требующие особых условий хранения (уровень<br />влажности, температурный режим) и сроков доставки.</p>', '<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>\r\n<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>\r\n<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>\r\n<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '{\"max\":\"max_9vcdss6hagyvlgrg9drb.jpg\",\"sr\":\"sr_9vcdss6hagyvlgrg9drb.jpg\",\"min\":\"min_9vcdss6hagyvlgrg9drb.jpg\"}', 136, 1, 1, 1, 0, 1, 2, '2021-11-05 22:06:08', '2021-11-07 13:20:54');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `heddin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `prev` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `article_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `name`, `email`, `site`, `parent_id`, `heddin`, `prev`, `created_at`, `updated_at`, `user_id`, `article_id`) VALUES
(12, 'egegegg', NULL, NULL, 'http://eost.loc/blog/uslugi/5', 0, '0', 0, '2021-11-06 05:07:45', '2021-11-06 05:07:45', 1, 5),
(13, 'etetget', NULL, NULL, 'http://eost.loc/blog/uslugi/5', 0, '0', 0, '2021-11-06 05:08:54', '2021-11-06 05:08:54', 1, 5),
(14, 'ergdgzfg', NULL, NULL, 'http://eost.loc/blog/uslugi/5', 0, '1', 1, '2021-11-06 05:11:07', '2021-11-06 05:23:46', 1, 5),
(15, 'dffbdfbdb', NULL, NULL, 'http://eost.loc/blog/uslugi/5', 0, '1', 1, '2021-11-06 05:16:42', '2021-11-06 05:23:57', 1, 5),
(16, 'csdvsvsv s s ss', 'Tuliq', 'info@sarbontrans.com', 'http://eost.loc/blog/uslugi/5', 0, '0', 0, '2021-11-06 06:07:24', '2021-11-06 06:07:24', NULL, 5),
(17, 'csdvsvsv s s ss', 'Tuliq', 'info@sarbontrans.com', 'http://eost.loc/blog/uslugi/5', 0, '0', 0, '2021-11-06 06:08:24', '2021-11-06 06:08:24', NULL, 5),
(18, 'csdvsvsv s s ss', 'Tuliq', 'info@sarbontrans.com', 'http://eost.loc/blog/uslugi/5', 0, '0', 0, '2021-11-06 06:08:42', '2021-11-06 06:08:42', NULL, 5),
(19, 'csdvsvsv s s ss', 'Tuliq', 'info@sarbontrans.com', 'http://eost.loc/blog/uslugi/5', 0, '1', 1, '2021-11-06 06:09:04', '2021-11-06 06:09:59', NULL, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sezi` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`, `sezi`, `created_at`, `updated_at`) VALUES
(4, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_w4wbdbizqfmk2azfwtdl.jpg\",\"min\":\"min_w4wbdbizqfmk2azfwtdl.jpg\",\"sr\":\"sr_w4wbdbizqfmk2azfwtdl.jpg\"}', 1, '2021-11-07 01:38:27', '2021-11-07 01:38:27'),
(5, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_edxjqkwitoy3t6amzrjv.jpg\",\"min\":\"min_edxjqkwitoy3t6amzrjv.jpg\",\"sr\":\"sr_edxjqkwitoy3t6amzrjv.jpg\"}', 2, '2021-11-07 01:38:52', '2021-11-07 01:38:52'),
(6, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_yoidluerfddxfpdhngxs.jpg\",\"min\":\"min_yoidluerfddxfpdhngxs.jpg\",\"sr\":\"sr_yoidluerfddxfpdhngxs.jpg\"}', 3, '2021-11-07 01:39:16', '2021-11-07 01:39:16'),
(7, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_xd7boisn98zqqdo4uvze.jpg\",\"min\":\"min_xd7boisn98zqqdo4uvze.jpg\",\"sr\":\"sr_xd7boisn98zqqdo4uvze.jpg\"}', 1, '2021-11-07 01:40:14', '2021-11-07 01:40:14'),
(8, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_br5t0837bxosbzoqoce3.jpg\",\"min\":\"min_br5t0837bxosbzoqoce3.jpg\",\"sr\":\"sr_br5t0837bxosbzoqoce3.jpg\"}', 2, '2021-11-07 01:40:38', '2021-11-07 01:40:38'),
(9, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_vx27iw2gziinfvboihsu.jpg\",\"min\":\"min_vx27iw2gziinfvboihsu.jpg\",\"sr\":\"sr_vx27iw2gziinfvboihsu.jpg\"}', 3, '2021-11-07 01:41:00', '2021-11-07 01:41:00'),
(10, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_eaquqv35jbxvwxzdpycj.jpg\",\"min\":\"min_eaquqv35jbxvwxzdpycj.jpg\",\"sr\":\"sr_eaquqv35jbxvwxzdpycj.jpg\"}', 1, '2021-11-07 01:41:23', '2021-11-07 01:41:23'),
(11, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_p2ghsnjqkvtk9mhz1zou.jpg\",\"min\":\"min_p2ghsnjqkvtk9mhz1zou.jpg\",\"sr\":\"sr_p2ghsnjqkvtk9mhz1zou.jpg\"}', 2, '2021-11-07 01:41:54', '2021-11-07 01:41:54'),
(12, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_olbzg1jokc5dghjsyrhr.jpg\",\"min\":\"min_olbzg1jokc5dghjsyrhr.jpg\",\"sr\":\"sr_olbzg1jokc5dghjsyrhr.jpg\"}', 3, '2021-11-07 01:42:14', '2021-11-07 01:42:14'),
(14, '{\"name\":{\"ru\":null,\"en\":null,\"tu\":null}}', '{\"max\":\"max_nc4immzvgbggoga8ano9.jpg\",\"min\":\"min_nc4immzvgbggoga8ano9.jpg\",\"sr\":\"sr_nc4immzvgbggoga8ano9.jpg\"}', 1, '2021-11-07 01:52:45', '2021-11-07 01:52:45'),
(15, '{\"name\":{\"ru\":null,\"en\":null,\"tu\":null}}', '{\"max\":\"max_jzj7ojeadyqzyrzn8cd9.jpg\",\"min\":\"min_jzj7ojeadyqzyrzn8cd9.jpg\",\"sr\":\"sr_jzj7ojeadyqzyrzn8cd9.jpg\"}', 2, '2021-11-07 01:53:20', '2021-11-07 01:53:20'),
(16, '{\"name\":{\"ru\":null,\"en\":null,\"tu\":null}}', '{\"max\":\"max_q9oxqhewdtw46iedklff.jpg\",\"min\":\"min_q9oxqhewdtw46iedklff.jpg\",\"sr\":\"sr_q9oxqhewdtw46iedklff.jpg\"}', 3, '2021-11-07 01:53:35', '2021-11-07 01:53:35'),
(17, '{\"name\":{\"ru\":null,\"en\":null,\"tu\":null}}', '{\"max\":\"max_gikh8ynryhlkig6s9ajt.jpg\",\"min\":\"min_gikh8ynryhlkig6s9ajt.jpg\",\"sr\":\"sr_gikh8ynryhlkig6s9ajt.jpg\"}', 1, '2021-11-07 01:53:59', '2021-11-07 01:53:59'),
(22, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"}}', '{\"max\":\"max_tv9sr1v1mrppdngpjlxv.jpg\",\"min\":\"min_tv9sr1v1mrppdngpjlxv.jpg\",\"sr\":\"sr_tv9sr1v1mrppdngpjlxv.jpg\"}', 2, '2021-11-07 02:15:40', '2021-11-07 02:15:40'),
(23, '{\"name\":{\"ru\":null,\"en\":null,\"tu\":null}}', '{\"max\":\"max_c6viig8wvbt2rpjoqqgq.jpg\",\"min\":\"min_c6viig8wvbt2rpjoqqgq.jpg\",\"sr\":\"sr_c6viig8wvbt2rpjoqqgq.jpg\"}', 3, '2021-11-07 02:47:16', '2021-11-07 02:47:16');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `title`, `path`, `parent`, `created_at`, `updated_at`) VALUES
(1, '{\"ru\":\"\\u041e \\u043d\\u0430\\u0441\",\"en\":\"About Us\",\"tu\":\"Hakk\\u0131m\\u0131zda\"}', 'o-nas', 0, '2018-07-19 03:25:13', '2021-11-07 10:42:37'),
(2, '{\"ru\":\"\\u0423\\u0441\\u043b\\u0443\\u0433\\u0438\",\"en\":\"Services\",\"tu\":\"Hizmetler\"}', 'uslugi', 0, '2018-07-19 03:28:24', '2021-11-07 10:43:03'),
(3, '{\"ru\":\"\\u041a\\u043e\\u043d\\u0442\\u0430\\u043a\\u0442\\u044b\",\"en\":\"Contacts\",\"tu\":\"Ki\\u015filer\"}', '/contacts/contacts', 0, '2018-07-19 03:29:51', '2021-11-07 13:46:57');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_03_000133_create_loyxa_table', 2),
(5, '2021_06_03_000335_create_certificate_table', 2),
(6, '2021_06_03_000930_create_certifol_table', 2),
(7, '2021_11_05_234440_create_sliders_table', 3),
(8, '2021_11_05_234952_create_gallery_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `obuna`
--

CREATE TABLE `obuna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bjr061981@gmail.com', '$2y$10$LlZtBNtfEpK/9ribUDA7heOpETdtSAXgJLPnG8r8glFChtM3tWam.', '2021-10-19 05:48:56');

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `atama` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `atama`, `created_at`, `updated_at`) VALUES
(1, 'VIEW_ADMIN', '{\"ru\":\"\\u0410\\u0434\\u043c\\u0438\\u043d \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(2, 'VIEW_ADMIN_XATO', '{\"ru\":\"\\u0425\\u0430\\u0442\\u043e\\u043b\\u0438\\u043a \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(3, 'UPDATE_XATO', '{\"ru\":\"\\u0425\\u0430\\u0442\\u043e\\u043b\\u0438\\u043a\\u043b\\u0430\\u0440\\u043d\\u0438 \\u045e\\u0437\\u0433\\u0430\\u0440\\u0442\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(4, 'DELETE_XATO', '{\"ru\":\"\\u0425\\u0430\\u0442\\u043e\\u043b\\u0438\\u043a\\u043b\\u0430\\u0440\\u043d\\u0438 \\u0443\\u0447\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(7, 'VIEW_ADMIN_COMMENT', '{\"ru\":\"\\u0418\\u0437\\u043e\\u04b3 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(8, 'UPDATE_COMMENT', '{\"ru\":\"\\u0418\\u0437\\u043e\\u04b3\\u043b\\u0430\\u0440\\u043d\\u0438 \\u045e\\u0437\\u0433\\u0430\\u0440\\u0442\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(9, 'DELETE_COMMENT', '{\"ru\":\"\\u0418\\u0437\\u043e\\u04b3\\u043b\\u0430\\u0440\\u043d\\u0438 \\u0443\\u0447\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(10, 'ADD_COMMENT', '{\"ru\":\"\\u0418\\u0437\\u043e\\u04b3 \\u043a\\u0438\\u0440\\u0438\\u0442\\u0438\\u0448\"}', NULL, NULL),
(11, 'VIEW_ADMIN_USERS', '{\"ru\":\"\\u0424\\u043e\\u0439\\u0434\\u0430\\u043b\\u0430\\u043d\\u0443\\u0432\\u0447\\u0438\\u043b\\u0430\\u0440 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(12, 'EDIT_USERS', '{\"ru\":\"\\u0424\\u043e\\u0439\\u0434\\u0430\\u043b\\u0430\\u043d\\u0443\\u0432\\u0447\\u0438\\u043d\\u0438 \\u045e\\u0437\\u0433\\u0430\\u0440\\u0442\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(13, 'ADMIN_USERS', '{\"ru\":\"\\u0424\\u043e\\u0439\\u0434\\u0430\\u043b\\u0430\\u043d\\u0443\\u0432\\u0447\\u0438\\u043b\\u0430\\u0440\"}', NULL, NULL),
(14, 'VIEW_ADMIN_MENU', '{\"ru\":\"\\u0410\\u0434\\u043c\\u0438\\u043d\\u0434\\u0430 \\u043c\\u0435\\u043d\\u044e\\u043d\\u0438 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(15, 'ADD_MENU', '{\"ru\":\"\\u0410\\u0434\\u043c\\u0438\\u043d\\u0434\\u0430 \\u043c\\u0435\\u043d\\u044e\\u043d\\u0438 \\u043a\\u0438\\u0440\\u0438\\u0442\\u0438\\u0448\"}', NULL, NULL),
(16, 'EDIT_MENU', '{\"ru\":\"\\u0410\\u0434\\u043c\\u0438\\u043d\\u0434\\u0430 \\u043c\\u0435\\u043d\\u044e\\u043d\\u0438 \\u045e\\u0437\\u0433\\u0430\\u0440\\u0442\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(17, 'DELETE_MENU', '{\"ru\":\"\\u0410\\u0434\\u043c\\u0438\\u043d\\u0434\\u0430 \\u043c\\u0435\\u043d\\u044e\\u043d\\u0438 \\u045e\\u0447\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(18, 'VIEW_ADMIN_ARTICLES', '{\"ru\":\"\\u0410\\u0434\\u043c\\u0438\\u043d\\u0434\\u0430 \\u043c\\u0430\\u049b\\u043e\\u043b\\u0430 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(19, 'ADD_ARTICLES', '{\"ru\":\"\\u041c\\u0430\\u049b\\u043e\\u043b\\u0430 \\u043a\\u0438\\u0440\\u0438\\u0442\\u0438\\u0448\"}', NULL, NULL),
(20, 'UPDATE_ARTICLES', '{\"ru\":\"\\u041c\\u0430\\u049b\\u043e\\u043b\\u0430\\u043d\\u0438 \\u045e\\u0437\\u0433\\u0430\\u0440\\u0442\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(21, 'DELETE_ARTICLES', '{\"ru\":\"\\u041c\\u0430\\u049b\\u043e\\u043b\\u0430\\u043d\\u0438 \\u045e\\u0447\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(22, 'VIEW_ADMIN_CONTACT', '{\"ru\":\"\\u0410\\u0434\\u043c\\u0438\\u043d\\u0434\\u0430 \\u0445\\u0430\\u0431\\u0430\\u0440\\u043b\\u0430\\u0440 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(23, 'ADD_CONTACT', '{\"ru\":\"\\u0425\\u0430\\u0431\\u0430\\u0440\\u043b\\u0430\\u0440\\u043d\\u0438 \\u043a\\u0438\\u0440\\u0438\\u0442\\u0438\\u0448\"}', NULL, NULL),
(24, 'UPDATE_CONTACT', '{\"ru\":\"\\u0425\\u0430\\u0431\\u0430\\u0440\\u043b\\u0430\\u0440\\u043d\\u0438 \\u045e\\u0437\\u0433\\u0430\\u0440\\u0442\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(25, 'DELETE_CONTACT', '{\"ru\":\"\\u0425\\u0430\\u0431\\u0430\\u0440\\u043b\\u0430\\u0440\\u043d\\u0438 \\u045e\\u0447\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(26, 'EDIT_PERMISSIONS', '{\"ru\":\"\\u0424\\u043e\\u0439\\u0434\\u0430\\u043b\\u0430\\u043d\\u0443\\u0432\\u0447\\u0438 \\u0445\\u0443\\u049b\\u0443\\u049b\\u0438\\u043d\\u0438 \\u045e\\u0437\\u0433\\u0430\\u0440\\u0442\\u0438\\u0440\\u0438\\u0448\"}', NULL, NULL),
(27, 'VIEW_ADMIN_SETTINGS', '{\"ru\":\"\\u041b\\u043e\\u0439\\u0445\\u0430 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(28, 'UPDATE_SETTINGS', '{\"ru\":\"\\u0421\\u0435\\u0440\\u0442\\u0438\\u0444\\u0438\\u043a\\u0430\\u0442 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL),
(29, 'DELETE_CONTACT', '{\"ru\":\"\\u0421\\u0435\\u0440\\u0442\\u0438\\u0444\\u0438\\u043a\\u0430\\u0442 \\u0431\\u045e\\u043b\\u0438\\u043c\\u0438\\u043d\\u0438 \\u043a\\u045e\\u0440\\u0438\\u0448\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(9, 1, 9, NULL, NULL),
(10, 1, 10, NULL, NULL),
(11, 1, 11, NULL, NULL),
(12, 1, 12, NULL, NULL),
(13, 1, 13, NULL, NULL),
(14, 1, 14, NULL, NULL),
(15, 1, 15, NULL, NULL),
(16, 1, 16, NULL, NULL),
(17, 1, 17, NULL, NULL),
(18, 1, 18, NULL, NULL),
(19, 1, 19, NULL, NULL),
(20, 1, 20, NULL, NULL),
(21, 1, 21, NULL, NULL),
(22, 1, 22, NULL, NULL),
(23, 1, 23, NULL, NULL),
(24, 1, 24, NULL, NULL),
(25, 1, 25, NULL, NULL),
(26, 1, 26, NULL, NULL),
(35, 1, 27, NULL, NULL),
(36, 1, 28, NULL, NULL),
(37, 1, 29, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, '2020-12-13 05:39:26', '2020-12-13 05:39:26', 1, 1),
(14, '2021-10-31 21:02:13', '2021-10-31 21:02:13', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sot_network` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`id`, `names`, `address`, `sot_network`, `img`, `rating`, `css`, `created_at`, `updated_at`) VALUES
(1, '{\"name\":{\"ru\":\"EO\\u0421T\\u0421 (\\u0415\\u0432\\u0440\\u043e \\u041e\\u0441\\u0438\\u0451 \\u0421\\u0430\\u0440\\u0431\\u043e\\u043d \\u0422\\u0440\\u0430\\u043d\\u0441 \\u0421\\u0435\\u0440\\u0432\\u0438\\u0441)\",\"en\":\"EOSTS(EvroOsiyo Sarbon Trans Servis)\",\"tu\":\"EOSTS(EvroOsiyo Sarbon Trans Servis)\"}}', '{\"addres\":{\"ru\":\"\\u0420\\u0435\\u0441\\u043f\\u0443\\u0431\\u043b\\u0438\\u043a\\u0430 \\u0423\\u0437\\u0431\\u0435\\u043a\\u0438\\u0441\\u0442\\u0430\\u043d, \\u0411\\u0443\\u0445\\u0430\\u0440\\u0441\\u043a\\u0438\\u0439 \\u043e\\u0431\\u043b, \\u0413\\u0438\\u0436\\u0434\\u0443\\u0432\\u0430\\u043d \\u0440\\u0430\\u0439\\u043e\\u043d, \\u0443\\u043b. \\u0427\\u043e\\u0440\\u0441\\u0443 101\",\"en\":\"Republic of Uzbekistan, Bukhara region,<br> Gijduvan district, st. Chorsu 101\",\"tu\":\"\\u00d6zbekistan Cumhuriyeti, Buhara b\\u00f6lgesi,<br> Gijduvan il\\u00e7esi, st. korsu 101\"},\"phone\":[\"+99899 311 49 00\",\"+99899 311 49 00\"],\"email\":[\"info@sarbontrans.com\",\"support@sarbontrans.com\"]}', '{\"sotnet\":{\"facebook\":\"http:\\/\\/www.facebook.com\\/\",\"telegram\":\"http:\\/\\/www.telegram.me\\/\",\"instagram\":\"http:\\/\\/www.instagram.com\\/\",\"twitter\":null,\"whatsapp\":\"http:\\/\\/www.whatsapp.com\\/\",\"youtube\":null}}', NULL, NULL, 0, NULL, '2021-11-07 08:08:54');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS\",\"en\":\"\\u041c\\u044b EOSTS\",\"tu\":\"\\u041c\\u044b EOSTS\"},\"title\":{\"ru\":\"\\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\",\"en\":\"\\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\",\"tu\":\"\\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\"},\"description\":{\"ru\":\"\\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438  \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!\",\"en\":\"\\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438  \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!\",\"tu\":\"\\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438  \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!\"}}', '{\"max\":\"max_c2qbiuelro5mo2ghduds.jpg\",\"min\":\"min_c2qbiuelro5mo2ghduds.jpg\"}', '2021-11-05 21:42:09', '2021-11-05 21:42:09'),
(2, '{\"name\":{\"ru\":\"\\u041c\\u044b \\u0433\\u043e\\u0442\\u043e\\u0432\\u044b\",\"en\":\"\\u041c\\u044b \\u0433\\u043e\\u0442\\u043e\\u0432\\u044b\",\"tu\":\"\\u041c\\u044b \\u0433\\u043e\\u0442\\u043e\\u0432\\u044b\"},\"title\":{\"ru\":\"\\u043f\\u0440\\u0435\\u043e\\u0434\\u043e\\u043b\\u0435\\u0432\\u0430\\u0442\\u044c \\u043f\\u0440\\u0435\\u043f\\u044f\\u0442\\u0441\\u0442\\u0432\\u0438\\u044f\",\"en\":\"\\u043f\\u0440\\u0435\\u043e\\u0434\\u043e\\u043b\\u0435\\u0432\\u0430\\u0442\\u044c \\u043f\\u0440\\u0435\\u043f\\u044f\\u0442\\u0441\\u0442\\u0432\\u0438\\u044f\",\"tu\":\"\\u043f\\u0440\\u0435\\u043e\\u0434\\u043e\\u043b\\u0435\\u0432\\u0430\\u0442\\u044c \\u043f\\u0440\\u0435\\u043f\\u044f\\u0442\\u0441\\u0442\\u0432\\u0438\\u044f\"},\"description\":{\"ru\":\"\\u041d\\u0430\\u0448\\u0430 \\u043a\\u043e\\u043c\\u0430\\u043d\\u0434\\u0430 \\u0432\\u0441\\u0435\\u0433\\u0434\\u0430 \\u0433\\u043e\\u0442\\u043e\\u0432\\u0430 \\u0440\\u0435\\u0448\\u0438\\u0442\\u044c \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u044b \\u043f\\u0440\\u0438 \\u0440\\u0430\\u0431\\u043e\\u0442\\u0435 \\u0441 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c\\u0438.\",\"en\":\"\\u041d\\u0430\\u0448\\u0430 \\u043a\\u043e\\u043c\\u0430\\u043d\\u0434\\u0430 \\u0432\\u0441\\u0435\\u0433\\u0434\\u0430 \\u0433\\u043e\\u0442\\u043e\\u0432\\u0430 \\u0440\\u0435\\u0448\\u0438\\u0442\\u044c \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u044b \\u043f\\u0440\\u0438 \\u0440\\u0430\\u0431\\u043e\\u0442\\u0435 \\u0441 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c\\u0438.\",\"tu\":\"\\u041d\\u0430\\u0448\\u0430 \\u043a\\u043e\\u043c\\u0430\\u043d\\u0434\\u0430 \\u0432\\u0441\\u0435\\u0433\\u0434\\u0430 \\u0433\\u043e\\u0442\\u043e\\u0432\\u0430 \\u0440\\u0435\\u0448\\u0438\\u0442\\u044c \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u044b \\u043f\\u0440\\u0438 \\u0440\\u0430\\u0431\\u043e\\u0442\\u0435 \\u0441 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c\\u0438.\"}}', '{\"max\":\"max_bjbqkyshgai5layyctyc.jpg\",\"min\":\"min_bjbqkyshgai5layyctyc.jpg\"}', '2021-11-05 21:43:46', '2021-11-05 21:43:46'),
(3, '{\"name\":{\"ru\":\"\\u0417\\u0430\\u0441\\u0442\\u0440\\u0430\\u0445\\u043e\\u0432\\u0430\\u0442\\u044c \\u0442\\u0435\\u043f\\u0435\\u0440\\u044c <span class=\\\"small\\\">                             \\u043d\\u0435\\u0441\\u043b\\u043e\\u0436\\u043d\\u043e                         <\\/span>\",\"en\":\"\\u0417\\u0430\\u0441\\u0442\\u0440\\u0430\\u0445\\u043e\\u0432\\u0430\\u0442\\u044c \\u0442\\u0435\\u043f\\u0435\\u0440\\u044c <span class=\\\"small\\\">                             \\u043d\\u0435\\u0441\\u043b\\u043e\\u0436\\u043d\\u043e                         <\\/span>\",\"tu\":\"\\u0417\\u0430\\u0441\\u0442\\u0440\\u0430\\u0445\\u043e\\u0432\\u0430\\u0442\\u044c \\u0442\\u0435\\u043f\\u0435\\u0440\\u044c <span class=\\\"small\\\">                             \\u043d\\u0435\\u0441\\u043b\\u043e\\u0436\\u043d\\u043e                         <\\/span>\"},\"title\":{\"ru\":\"\\u0412\\u0430\\u043c \\u043d\\u0435 \\u043d\\u0443\\u0436\\u043d\\u043e \\u0431\\u0435\\u0441\\u043f\\u043e\\u043a\\u043e\\u0438\\u0442\\u044c\\u0441\\u044f \\u043e \\u0441\\u0442\\u0440\\u0430\\u0445\\u043e\\u0432\\u0430\\u043d\\u0438\\u0438 \\u0433\\u0440\\u0443\\u0437\\u0430, \\u043c\\u044b \\u043f\\u043e\\u043c\\u043e\\u0436\\u0435\\u043c \\u0432\\u0430\\u043c \\u0432 \\u044d\\u0442\\u043e\\u043c.\",\"en\":\"\\u0412\\u0430\\u043c \\u043d\\u0435 \\u043d\\u0443\\u0436\\u043d\\u043e \\u0431\\u0435\\u0441\\u043f\\u043e\\u043a\\u043e\\u0438\\u0442\\u044c\\u0441\\u044f \\u043e \\u0441\\u0442\\u0440\\u0430\\u0445\\u043e\\u0432\\u0430\\u043d\\u0438\\u0438 \\u0433\\u0440\\u0443\\u0437\\u0430, \\u043c\\u044b \\u043f\\u043e\\u043c\\u043e\\u0436\\u0435\\u043c \\u0432\\u0430\\u043c \\u0432 \\u044d\\u0442\\u043e\\u043c.\",\"tu\":\"\\u0412\\u0430\\u043c \\u043d\\u0435 \\u043d\\u0443\\u0436\\u043d\\u043e \\u0431\\u0435\\u0441\\u043f\\u043e\\u043a\\u043e\\u0438\\u0442\\u044c\\u0441\\u044f \\u043e \\u0441\\u0442\\u0440\\u0430\\u0445\\u043e\\u0432\\u0430\\u043d\\u0438\\u0438 \\u0433\\u0440\\u0443\\u0437\\u0430, \\u043c\\u044b \\u043f\\u043e\\u043c\\u043e\\u0436\\u0435\\u043c \\u0432\\u0430\\u043c \\u0432 \\u044d\\u0442\\u043e\\u043c.\"},\"description\":{\"ru\":null,\"en\":null,\"tu\":null}}', '{\"max\":\"max_1xbg2xi5ridigepvzfrx.jpg\",\"min\":\"min_1xbg2xi5ridigepvzfrx.jpg\"}', '2021-11-05 21:44:53', '2021-11-05 21:44:53'),
(5, '{\"name\":{\"ru\":\"\\u041c\\u044b EOSTS 2\",\"en\":\"\\u041c\\u044b EOSTS 2\",\"tu\":\"\\u041c\\u044b EOSTS 2\"},\"title\":{\"ru\":\"\\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\",\"en\":\"\\u043f\\u0440\\u0435\\u043e\\u0434\\u043e\\u043b\\u0435\\u0432\\u0430\\u0442\\u044c \\u043f\\u0440\\u0435\\u043f\\u044f\\u0442\\u0441\\u0442\\u0432\\u0438\\u044f\",\"tu\":\"\\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\"},\"description\":{\"ru\":\"\\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438 \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!   \\u041c\\u044b EOSTS \\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f \\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438 \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!   \\u041c\\u044b EOSTS 2 \\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\",\"en\":\"\\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438 \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!   \\u041c\\u044b EOSTS \\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f \\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438 \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!   \\u041c\\u044b EOSTS 2 \\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\",\"tu\":\"\\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438 \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!   \\u041c\\u044b EOSTS \\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f \\u041c\\u044b \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u044b\\u0441\\u0442\\u0440\\u043e \\u0438 \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u043e. \\u041d\\u0430\\u0448\\u0430 \\u0437\\u0430\\u0434\\u0430\\u0447\\u0430 \\u0441\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0442\\u0430\\u043a \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u044b \\u0437\\u0430\\u0431\\u044b\\u043b\\u0438 \\u043e \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u0445 \\u043f\\u0440\\u0438 \\u0442\\u0440\\u0430\\u043d\\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0440\\u043e\\u0432\\u043a\\u0435!   \\u041c\\u044b EOSTS 2 \\u041e\\u0442 \\u0442\\u043e\\u0447\\u043a\\u0438 \\u0432\\u044b\\u0432\\u043e\\u0437\\u0430 \\u0434\\u043e \\u043c\\u0435\\u0441\\u0442\\u0430 \\u043d\\u0430\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f\"}}', '{\"max\":\"max_xeym8ts0ghpbokrfzd5v.jpg\",\"min\":\"min_xeym8ts0ghpbokrfzd5v.jpg\"}', '2021-11-07 10:48:44', '2021-11-07 10:48:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `telegram_id`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jurabek', NULL, '1635471588.jpg', 'bjr061981@gmail.com', NULL, '$2y$10$pyU6LGpn5Fv2QneNNl3DQecKmcVLTfVxyrINEkIsRCh6Hoqq7TAAG', NULL, '2021-03-29 22:31:14', '2021-10-28 20:39:48'),
(2, 'yosh', NULL, NULL, 'uqituvchi@uz.uz', NULL, '$2y$10$GalXh.sFqrr3BBDJQwoCE.hOXwUv/RQnfx2ZBjek09TTbLNzpBx3y', NULL, '2021-07-06 20:30:04', '2021-07-06 20:30:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `obuna`
--
ALTER TABLE `obuna`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `obuna`
--
ALTER TABLE `obuna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
