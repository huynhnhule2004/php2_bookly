-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2025 at 02:11 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2_bookly`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `category_id` int NOT NULL DEFAULT '1',
  `user_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `user_id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(3, 2, 4, 'Review sách Cây cam ngọt của tôi – Tuổi thơ ngọt ngào và đắng cay', '<p>Cây cam ngọt của tôi là cuốn <a href=\"https://tiki.vn/search?q=ti%E1%BB%83u%20thuy%E1%BA%BFt\">tiểu thuyết</a> kể về một chú bé đáng yêu, tinh nghịch có tên là Zeze, 5 tuổi, sinh ra và lớn lên trong một gia đình nghèo đông con. Ước mơ của cậu là trở thành một nhà thơ cổ thắt nơ bướm. Zeze bẩm sinh đã thông minh, lại sống trong nghịch cảnh nên suy nghĩ già dặn và chín chắn hơn rất nhiều so với những đứa trẻ cùng trang lứa.&nbsp;</p><p>Có thể thấy, cái nghèo đã đeo bám dai dẳng gia đình Zeze, bố mẹ phải lao động quần quật để kiếm miếng ăn nên thời gian gần gũi, chia sẻ với nhau luôn thật hiếm hoi. Cậu bé thường phải tự nghĩ ra các trò chơi và tự mình tận hưởng nó. Thậm chí, Zeze còn chơi khăm hàng xóm, bạn bè. Chính vì thế, các anh chị trong nhà đều cho rằng cậu rất hư hỏng, đặc biệt là người chị gái tên Gloria.&nbsp;</p><p>Đầu óc tưởng tượng phong phú đã giúp Zeze tự biến khu vườn trong nhà trở thành rừng rậm Amazon, thậm chí là Châu Phi. Cậu tự mình đi khám phá những vùng đất mới lạ trên thế giới bằng sự hình dung và ước mơ khám phá vô tận. Thật may mắn khi Zeze có một cậu em trai tên là Luis, luôn chăm sóc em như một ông vua, đưa em đi thăm thú khu vườn, dòng sông trong trí tưởng tượng của mình.&nbsp;</p><p>Zeze chấp nhận nhường món <a href=\"https://tiki.vn/search?q=%C4%91%E1%BB%93%20ch%C6%A1i\">đồ chơi</a> duy nhất trong nhà cho Luis chỉ để dỗ em nín khóc khi hai anh em tới muộn trong ngày phát quà Giáng sinh. Tuy không được mọi người quan tâm, cậu bé vẫn luôn biết cách yêu thương người khác. Em còn dành hẳn cho cha một túi thuốc lá trong ngày Noel, tăng chị Gloria một cuốn sổ bài hát.</p><p>Sau này, gia đình Zeze chuyển nhà. Em bất ngờ thấy có một cây cam trong khoảng sân phía sau. Ban đầu, cậu không để ý lắm vì nghĩ mình quá nhỏ để trèo được lên trên. Kỳ lạ thay, dần dần, Zeze phát hiện điều kỳ diệu là mình có thể trò chuyện, tâm sự với cây cam như một người bạn. Cây biết nói, hiểu về mọi thứ trên đời, là nơi để cậu bé bộc bạch hết những nỗi suy tư trong lòng.&nbsp;</p><p>Trái lại, gia đình chỉ giao tiếp với em bằng những trận đòn roi. Zeze nhiều lần nghĩ mình đáng lẽ không xứng đáng được sinh ra. Khi nỗi đau đến cùng cực, cậu đã nghĩ đến việc tự kết thúc cuộc đời mình để chấm dứt những tháng ngày bị hành hạ liên tục. Thậm chí, Zeze từng có ý định trả thù hoặc giết một ai đó để thỏa mãn nỗi uất hận trong lòng. Tất nhiên, cậu bé không nghĩ giết chết bằng súng mà là bằng trái tim, muốn một ngày họ sẽ chết vì không nhận được tình yêu thương. Thật sự rất bi kịch khi một chú bé đáng yêu, lương thiện lại hình thành những suy nghĩ tiêu cực đến như thế.</p><p>May mắn thay, đến cuối câu chuyện, Zeze đã gặp được một người bác đặc biệt. Đây là người đàn ông Bồ Đào Nha, mang đến cho cậu tình yêu thương ấm áp, là mối liên hệ tuyệt vời giữa người với người. Trích từ lời của Zeze, cậu bé thổ lộ rằng: “Ông ấy là bạn tốt nhất của tớ. Nhưng cậu là vị vua đích thực của cây cối trong vườn, cũng như Luís là vua đích thực của các anh em trai tớ ấy. Trái tim chúng ta cần phải đủ lớn để có chỗ cho tất cả mọi thứ chúng ta yêu thương”.</p><figure class=\"image\"><img src=\"https://tiki.vn/blog/wp-content/uploads/2023/08/review-noi-dung-sach-cay-cam-ngot-cua-toi.jpg\" alt=\"Review sách Cây cam ngọt của tôi đều cho thấy cảm nhận nội dung đầy cảm động và ý nghĩa\" srcset=\"https://tiki.vn/blog/wp-content/uploads/2023/08/review-noi-dung-sach-cay-cam-ngot-cua-toi.jpg 1024w, https://tiki.vn/blog/wp-content/uploads/2023/08/review-noi-dung-sach-cay-cam-ngot-cua-toi-300x300.jpg 300w, https://tiki.vn/blog/wp-content/uploads/2023/08/review-noi-dung-sach-cay-cam-ngot-cua-toi-150x150.jpg 150w, https://tiki.vn/blog/wp-content/uploads/2023/08/review-noi-dung-sach-cay-cam-ngot-cua-toi-768x768.jpg 768w, https://tiki.vn/blog/wp-content/uploads/2023/08/review-noi-dung-sach-cay-cam-ngot-cua-toi-696x696.jpg 696w\" sizes=\"100vw\" width=\"1024\"></figure><h2><strong>Nhận xét về cuốn sách Cây cam ngọt của tôi</strong></h2><p>Cây cam ngọt của tôi được đánh giá là một cuốn tự truyện tuy đau đớn nhưng vô cùng cảm động và ngập tràn tình yêu thương. Thông qua cuốn sách này, chúng ta mới nhận ra bản thân mỗi người đều là một món quà. Cuộc sống này vốn rất đáng không, bất kỳ ai cũng xứng đáng nhận được yêu thương ấm áp. Những nỗi đau rồi cũng qua đi khi nhận đủ tình yêu. Zeze với số phận bất hạnh cuối cùng cũng nhận được sự quan tâm đặc biệt từ những người hàng xóm thân quen hay từ những bông hoa trắng của cây cam trong khu vườn nhỏ.&nbsp;</p><p>Nếu đọc nhiều bài <strong>review sách Cây cam ngọt của tôi</strong>, bạn cũng sẽ nhận ra rằng, người lớn nên học cách đối xử đúng mực với trẻ con. Các em tuy tuổi nhỏ nhưng luôn sở hữu một tâm hồn nhạy cảm. Đòn roi vốn không phải là yêu thương, không phải là cách giao tiếp hiệu quả. Có thể thấy, cuốn <a href=\"https://tiki.vn/search?q=s%C3%A1ch\">sách</a> đã giúp người đọc hồi tưởng lại những kỷ niệm tuổi thơ đầy ngọt ngào, đáng yêu. Những chuyến phiêu lưu thú vị trong tưởng tượng của Zeze chính là miền ký ức vui vẻ mà bất kỳ ai cũng muốn quay trở về.&nbsp;</p><figure class=\"image\"><img src=\"https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-1024x683.jpg\" alt=\"Cây cam ngọt của tôi là cuốn tự truyện đầy đau đớn và cảm động\" srcset=\"https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-1024x683.jpg 1024w, https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-300x200.jpg 300w, https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-768x512.jpg 768w, https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-1536x1024.jpg 1536w, https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-2048x1366.jpg 2048w, https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-696x464.jpg 696w, https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-1068x712.jpg 1068w, https://tiki.vn/blog/wp-content/uploads/2023/08/nhan-xet-ve-cuon-sach-cay-cam-ngot-cua-toi-1920x1280.jpg 1920w\" sizes=\"100vw\" width=\"1024\"></figure><p><i>Cây cam ngọt của tôi là cuốn tự truyện đầy đau đớn và cảm động (Nguồn: Internet)</i></p><h2><strong>Cảm nhận của độc giả về cuốn sách Cây cam ngọt của tôi</strong></h2><p>Cây cam ngọt của tôi đã chạm đến trái tim nhạy cảm của hàng triệu độc giả trên khắp thế giới, bất kỳ ai cũng phải rơi nước mắt khi theo dõi mạch câu chuyện. Trên Tiki và nhiều trang review khác, người đọc cũng có những phản hồi vô cùng tích cực, là những cảm nhận sâu sắc đến từ con tim:</p><ul><li>Có những người đến, lấp đầy hạnh phúc vào những vết nứt trong trái tim, chữa lành và an ủi chúng. Thế nhưng, họ lại ra đi, làm tan vỡ trái tim của người ở lại. Câu chuyện bắt đầu bằng sự vui vẻ, nghịch ngợm của cậu bé Zeze, kết thúc lại bằng nỗi đau tột cùng khi mất đi hai người bạn quý giá nhất trong đời. Khi đọc cuốn tiểu thuyết này, tôi nhiều lần đau xót và thương cảm cho cậu bé 5 tuổi với tuổi thơ nhiều rạn vỡ. Tuy nhiên, tôi mỉm cười và cảm thấy yêu thương sự sống đến từ sâu thẳm trong tim mình. Xuyên suốt tiểu thuyết, người với người vẫn đối xử với nhau rất đỗi dịu dàng. Cho đến khi kết thúc câu chuyện, trái tim tôi lại thổn thương nỗi buồn vấn vương, buồn cho sự mất mát tình yêu thương, buồn cho sự trưởng thành đầy nỗi đau, trưởng thành quá sớm nhưng không ai mong muốn.</li><li>Mới đầu đọc, mình thấy vừa giận vừa buồn cười bởi những trò nghịch ngợm của Zeze, ngưỡng mộ tài năng và yêu luôn tính cách dễ thương của bé. Tuy nhiên, đến nửa phần sau thì mình khóc sướt mướt, mình giận cuộc đời sao đối xử bất công. Zeze vẫn còn quá nhỏ để hiểu thế sự, hiểu cái chết là gì. Dẫu biết cuộc sống khó khăn cậu phải trải qua thuở bé là hành trang cho đường đời sau này nhưng mình vẫn thương, vẫn tiếc cho một tuổi thơ đáng lẽ tươi đẹp và hồn nhiên.</li></ul>', '20250223230243.jpg', '2025-02-05 00:49:04', '2025-02-05 00:49:04'),
(4, 2, 4, 'Review sách Tư Duy Ngược – Lột xác từ góc nhìn khác biệt', '<p>Sách \"Tư Duy Ngược\" đã nhanh chóng trở thành hiện tượng tại Việt Nam nhờ sự truyền cảm hứng mạnh mẽ và những bài học ứng dụng thực tế. Tuy nhiên, không phải ai cũng phù hợp với cuốn sách này. Hãy tham khảo <strong>review sách Tư Duy Ngược</strong> dưới đây để hiểu rõ hơn về nội dung, ưu nhược điểm và xem liệu cuốn sách có phù hợp với bạn hay không nhé!</p><figure class=\"image\"><img src=\"https://hadosa.com.vn/wp-content/uploads/2024/10/review-sach-tu-duy-nguoc.jpg\" alt=\"Tóm tắt sách tư duy ngược\"></figure><p><i>Tóm tắt sách tư duy ngược</i></p><h2><strong>Giới thiệu về sách Tư Duy Ngược</strong></h2><p>Tư Duy Ngược là tác phẩm của tác giả Nguyễn Anh Dũng, một trong những tác giả nổi bật với khả năng tư duy sáng tạo và cách tiếp cận vấn đề độc đáo. Cuốn sách khuyến khích người đọc suy nghĩ theo những hướng đi mới lạ, phá vỡ các quy tắc truyền thống và khơi dậy tiềm năng sáng tạo trong cuộc sống và công việc.</p><ul><li><i><strong>Tác giả</strong></i>: Nguyễn Anh Dũng</li><li><i><strong>Công ty phát hành</strong></i>: SBOOKS</li><li><i><strong>Ngày xuất bản</strong></i>: 2021-08-30 17:57:39</li><li><i><strong>Loại bìa</strong></i>: Bìa mềm</li><li><i><strong>Số trang</strong></i>: 244</li><li><i><strong>Nhà xuất bản</strong></i>: NXB Dân Trí</li><li><i><strong>Giá bán tham khảo</strong></i>: <i><strong>79.000 VNĐ</strong></i></li></ul><figure class=\"image\"><img src=\"https://hadosa.com.vn/wp-content/uploads/2024/10/sach-tu-duy-nguoc.jpg\" alt=\"Tư Duy Ngược của Nguyễn Anh Dũng\"></figure><p><i>Tư Duy Ngược của Nguyễn Anh Dũng</i></p><h2><strong>Review sách Tư Duy Ngược</strong></h2><p>Tư Duy Ngược là một cuốn sách khuyến khích bạn đọc phá vỡ các giới hạn tư duy, dám thử thách bản thân và không ngừng học hỏi từ thất bại. Sách mang lại nguồn cảm hứng mạnh mẽ cho những ai muốn phát triển bản thân và đạt được thành công trong cuộc sống.</p><p>Nhằm giúp bạn hiểu rõ hơn về nội dung cuốn sách Tư Duy Ngược, chúng ta sẽ cùng nhau khám phá,<strong> review sách Tư Duy Ngược</strong> qua từng chương.</p><h3><i><strong>Tóm tắt sách Tư Duy Ngược</strong></i></h3><p>Sách Tư Duy Ngược của Nguyễn Anh Dũng có 3 phần, bao gồm:&nbsp;</p><ul><li>Phần 1: Bạn đã sống cuộc đời thế nào?</li><li>Phần 2: Sống cuộc đời bạn muốn</li><li>Phần 3: Lựa chọn thật sự rất dễ dàng</li></ul><p>Dưới đây là một số nội dung nổi bật của từng phần:</p><h4><i>Phần 1: Bạn đã sống cuộc đời thế nào?</i></h4><p>Đây là bước khởi đầu quan trọng trong cuốn sách “Tư Duy Ngược”, giúp người đọc nhận ra sự cần thiết của việc thay đổi tư duy để có thể sống một cuộc đời ý nghĩa hơn.</p><p>Phần này tập trung vào việc giúp người đọc nhìn lại cuộc sống của mình, suy ngẫm về cách mình đã lựa chọn và hành động trong suốt thời gian qua. Nguyễn Anh Dũng khuyến khích mỗi người tự vấn về thói quen, tư duy và các quyết định đã định hình cuộc đời mình đến hiện tại.</p><p>Mục tiêu của phần này là nhận diện những tư duy hạn chế, thói quen lối mòn mà chúng ta thường vô tình mắc phải, từ đó khơi dậy sự thay đổi trong nhận thức. Bằng cách tự đánh giá bản thân, người đọc có thể thấy rõ hơn về những gì mình đang làm và giá trị thực sự mà mình theo đuổi.</p><ul><li><strong>Tự vấn và đánh giá</strong>: Người đọc được dẫn dắt qua những câu hỏi về cuộc sống, công việc và các mối quan hệ để nhận ra liệu mình có đang sống đúng với mong muốn thật sự hay chỉ đang chịu đựng các áp lực và kỳ vọng từ bên ngoài.</li><li><strong>Cái giá của lối sống thiếu ý thức</strong>: Tác giả cũng đề cập đến hậu quả của việc sống thiếu tự chủ, chẳng hạn như cảm giác mệt mỏi, mất đam mê và lạc lối. Những hệ lụy này thường xuất phát từ việc không chủ động định hình cuộc sống theo giá trị và mong muốn của chính mình.</li></ul><figure class=\"image\"><img src=\"https://hadosa.com.vn/wp-content/uploads/2024/10/noi-dung-cuon-sach-tu-duy-nguoc.jpg\" alt=\"Tự vấn và đánh giá bản thân là bước đầu thực hành tư duy ngược\"></figure><p><i>Tự vấn và đánh giá bản thân là bước đầu thực hành tư duy ngược</i></p><h4><i>Phần 2: Sống cuộc đời bạn muốn</i></h4><p>Đây là trọng tâm của cuốn sách, giúp người đọc chuyển từ việc sống theo quán tính sang việc chủ động sống cuộc đời mà họ thực sự mong muốn. Tác giả giới thiệu các phương pháp và tư duy cần thiết để giúp người đọc tìm ra được điều gì là quan trọng nhất đối với họ và cách để họ biến những mong muốn đó thành hiện thực.</p><ul><li><strong>Tư duy ngược</strong>: Thay vì chạy theo những điều xã hội cho là thành công, tác giả khuyến khích người đọc tự định nghĩa thành công theo ý mình. Điều này đòi hỏi sự dũng cảm trong việc từ bỏ những kỳ vọng từ người khác và theo đuổi đam mê, sở thích cá nhân.</li><li><strong>Xác định giá trị cốt lõi</strong>: Mỗi người có những giá trị, mong muốn khác nhau và thành công thực sự là sống phù hợp với giá trị của chính mình. Tác giả đưa ra các bài tập, ví dụ và chiến lược giúp người đọc khám phá ra những điều mà họ thực sự khao khát.</li><li><strong>Thực hiện hành động cụ thể</strong>: Tác giả nhấn mạnh rằng không chỉ suy nghĩ mà hành động mới là điều quyết định. Phần này hướng dẫn cách thiết lập các mục tiêu cụ thể và từng bước để đạt được chúng.</li></ul><h4><i>Phần 3: Lựa chọn thật sự rất dễ dàng</i></h4><p>Trong phần này, Nguyễn Anh Dũng làm rõ rằng việc lựa chọn cuộc đời mà bạn muốn không phức tạp như nhiều người nghĩ. Sự phức tạp thực ra chỉ đến từ việc thiếu sự nhận thức và không dám hành động. Tác giả khuyến khích việc đưa ra quyết định nhanh chóng, dứt khoát và mạnh dạn.</p><ul><li><strong>Giản lược sự phức tạp</strong>: Chúng ta thường tự tạo ra các rào cản tâm lý và suy nghĩ rằng việc thay đổi cuộc sống là rất khó khăn. Tuy nhiên, nếu bạn đã biết rõ mình muốn gì và điều gì là quan trọng, thì lựa chọn sẽ trở nên dễ dàng hơn nhiều.</li><li><strong>Sức mạnh của việc quyết định</strong>: Khi bạn quyết định lựa chọn một điều gì đó, cuộc đời sẽ thay đổi theo hướng đó. Quan trọng là cần phải kiên trì và không bị phân tâm bởi những yếu tố không liên quan.</li><li><strong>Động lực để hành động</strong>: Phần này nhấn mạnh tầm quan trọng của việc không trì hoãn và hành động ngay. Tác giả khuyến khích độc giả hãy làm những điều nhỏ trước và từng bước đạt được cuộc sống họ mong muốn.</li></ul><figure class=\"image\"><img src=\"https://hadosa.com.vn/wp-content/uploads/2024/10/tom-tat-sach-tu-duy-nguoc.jpg\" alt=\"Thực hiện từng bước chinh phục ước mơ\"></figure><p><i>Thực hiện từng bước chinh phục ước mơ</i></p><h3><i><strong>Ưu điểm của sách Tư Duy Ngược</strong></i></h3><p>Một trong những điều đáng chú ý nhất trong <strong>review sách tư duy ngược</strong> chính là cách mà Nguyễn Anh Dũng khéo léo kết hợp các câu chuyện thực tế và nghiên cứu khoa học để minh họa cho luận điểm của mình.&nbsp;</p><p>Ngoài ra, cuốn sách không chỉ truyền cảm hứng mà còn đưa ra các hướng dẫn rõ ràng về cách tạo ra sự thay đổi trong cuộc sống. Nó khuyến khích người đọc hành động ngay lập tức, từ những bước nhỏ đến những thay đổi lớn hơn.</p><p>Đặc biệt, trong cuốn Tư Duy Ngược, tác giả tập trung vào việc giúp người đọc khám phá giá trị cá nhân và định nghĩa thành công theo ý mình, thay vì chạy theo những tiêu chuẩn chung. Đây là một thông điệp tích cực, giúp người đọc cảm thấy tự tin hơn vào con đường mình chọn.</p><h3><i><strong>Nhược điểm của sách Tư Duy Ngược</strong></i></h3><p>Dù sách cung cấp nhiều thông tin hữu ích, một số bài học và khái niệm có thể đã được đề cập trong các cuốn sách về phát triển bản thân khác. Vì vậy, đối với những người đã quen thuộc với thể loại này, nội dung có thể không mang lại nhiều sự mới lạ.</p><p>Mặt khác, một số phần của sách chưa đi sâu vào cách giải quyết các khó khăn và thách thức mà người đọc có thể gặp phải khi thực hiện thay đổi, vì vậy cần có thêm hướng dẫn cụ thể cho từng bước, giúp người đọc dễ dàng áp dụng vào thực tế hơn.</p><h2><strong>Cảm nhận của độc giả</strong></h2><p>Tính đến hiện tại, sách đã bán được hơn <strong>20.000 </strong>bản tại Tiki và trở thành một trong những đầu sách tư duy được yêu thích nhất. Dưới đây là một số phản hồi từ cộng đồng về nội dung sách Tư Duy Ngược:</p><p>Chị Nguyễn Thị Thơ đã nhận xét:<i> “Rất dễ hiểu, tuy có chút triết học nhưng vẫn là một cuốn sách rất đáng đọc”</i>.</p><p>Anh Lê Anh để lại phản hồi:<i> “Cực kỳ hài lòng, in ấn/màu sắc rõ nét, Khổ sách nhỏ gọn, dễ mang đi, nội dung sách hấp dẫn, bổ ích, trình bày/Bố cục dễ hiểu”</i>.</p><p>Chị Nguyễn Thắm bình luận:<i> “Chất liệu in rõ đẹp, sách chuẩn đáng để mua. Khá hay”.</i></p><figure class=\"image\"><img src=\"https://hadosa.com.vn/wp-content/uploads/2024/10/danh-gia-sach-tu-duy-nguoc.jpg\" alt=\"Sách Tư Duy Ngược nhận được nhiều phản hồi tích cực\"></figure><p><i>Sách Tư Duy Ngược nhận được nhiều phản hồi tích cực</i></p><p>Tóm lại, Tư Duy Ngược là một cuốn sách truyền cảm hứng mạnh mẽ, giúp người đọc thay đổi cách nhìn nhận về cuộc sống và thành công. Tuy nhiên, cuốn sách có thể phù hợp nhất với những ai đang bắt đầu hành trình thay đổi tư duy và phát triển bản thân, trong khi với những người đã quen thuộc với thể loại này, nội dung có thể không mới mẻ lắm.</p><p>Trên đây là bài <i><strong>review sách Tư Duy Ngược</strong></i> với cái nhìn tổng quan về nội dung của <a href=\"https://hadosa.com.vn/\"><strong>nhà sách Hadosa</strong></a>, ưu - nhược điểm cuốn sách. Hãy tìm đọc để trải nghiệm và bước ra khỏi vùng an toàn của bạn để đạt được những thành tựu mà trước đây bạn chưa từng nghĩ tới!</p>', '20250223230250.webp', '2025-02-23 16:50:51', '2025-02-23 16:50:51'),
(6, 2, 4, 'Review Sách Giận – Bí Quyết Chuyển Hóa Lửa Giận Để Sống An Yên', '<p><strong>Giận</strong> – một cuốn sách vô cùng hay và ý nghĩa của Thầy Thích Nhất Hạnh, với tiêu đề chỉ gói gọn trong một chữ nhưng lại mở ra cho người đọc muôn vàn sự hiểu biết về cơn giận, những khả năng vô cùng kỳ diệu nhưng lại rất dễ dàng thực hành để tự bản thân mình có thể từng bước thoát ra khỏi những cơn giận dữ, từ khởi nguồn của cơn giận trong mỗi con người cho đến cách làm sao để chúng ta tháo gỡ được nó và sống đẹp với xã hội xung quanh mình.</p><p>&nbsp;</p><p>Mục Lục</p><ul><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Tac_gia_cuon_sach_Gian_-_Thay_Thich_Nhat_Hanh\">Tác giả cuốn sách Giận – Thầy Thích Nhất Hạnh</a></li><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Noi_dung_cuon_Gian_-_Thich_Nhat_Hanh\">Nội dung cuốn Giận – Thích Nhất Hạnh</a><ul><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Thuc_tap_hanh_phuc\">Thực tập hạnh phúc</a></li><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Bien_rac_thanh_hoa\">Biến rác thành hoa</a></li><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Tim_hieu_ban_chat_cua_con_gian\">Tìm hiểu bản chất của cơn giận</a></li><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Tho_de_cham_soc_con_gian\">Thở để chăm sóc cơn giận</a></li></ul></li><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Trich_dan_hay_trong_sach\">Trích dẫn hay trong sách</a></li><li><a href=\"https://revisach.com/review-sach-gian-thich-nhat-hanh/#Loi_ket\">Lời kết</a></li></ul><h2><strong>Tác giả cuốn sách Giận – Thầy Thích Nhất Hạnh</strong></h2><p>Thiền sư Thích Nhất Hạnh, tên khai sinh là Nguyễn Xuân Bảo, sinh ngày 11 tháng 10 năm 1926. Ông hoạt động chủ yếu với vai trò là một thiền sư, giảng viên, nhà văn, nhà thơ; ngoài ra còn là nhà khảo cứu, nhà hoạt động xã hội tại Việt Nam.&nbsp;</p><p>Thầy là một nhân vật có ảnh hưởng rất lớn không chỉ ở Việt Nam mà còn lan rộng trên toàn thế giới. Nhắc đến đạo Bụt, thì không thể không nói đến tên ông. Trong cuộc đời của mình, vị thiền sư Thích Nhất Hạnh đã viết hơn 100 cuốn sách, trong số đó có rất nhiều sách bằng tiếng Anh.</p><p>Ngoài ra, thầy còn là người tiên phong cho các phong trào hòa bình, sử dụng các giải pháp mềm dẻo, không bạo lực. Một số tác phẩm tiêu biểu của sư ông như: Con sư tử vàng của thầy Pháp Tạng, Phép lạ của sự tỉnh thức, How to love, Đạo Phật ngày nay, Muốn an được an, Nói với tuổi hai mươi, Trái tim của Bụt,… Và một trong những cuốn sách đã để lại nhiều dấu ấn không chỉ cho độc giả tại Việt Nam mà còn có sức ảnh hưởng đến nhiều độc giả quốc tế chính là cuốn Giận.</p><figure class=\"image\"><img src=\"https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh.png\" alt=\"review-sach-gian-thich-nhat-hanh\" srcset=\"https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh.png 800w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-300x199.png 300w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-768x509.png 768w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-696x461.png 696w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-634x420.png 634w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-600x398.png 600w\" sizes=\"100vw\" width=\"800\"></figure><p><i>Review sách Giận – Bí quyết chuyển hóa lửa giận để sống an yên</i></p><p>Sách hay nên đọc:&nbsp;<a href=\"https://revisach.com/review-sach-cua-thich-nhat-hanh/\">7 Cuốn Sách Của Thích Nhất Hạnh Giúp Bạn Hiểu Được Triết Lý Thiền Tập Cốt Lõi Và Thâm Sâu</a></p><h2><strong>Nội dung cuốn Giận – Thích Nhất Hạnh</strong></h2><p>Giận bao gồm 11 phần gồm những bài thiền giúp cho độc giả buông bỏ được sân hận trong lòng mình và hướng đến cuộc sống tươi đẹp. Tại Hàn Quốc, trong vòng 11 tháng kể từ ngày sản xuất Giận đã bán được 1 triệu bản. Có rất nhiều độc giả nhờ đọc sách này mà đã điều phục được tâm mình, sử dụng ái ngữ lắng nghe để hòa giải với người thân, đem lại hạnh phúc trong gia đình và trong cộng đồng của họ.</p><p>Trong cuộc sống, có rất nhiều tình huống khiến chúng ta phải tức giận và không ít lần bạn không thể giữ bình tĩnh khiến nhiều chuyện đáng tiếc xảy ra. Chúng ta thường có suy nghĩ xả những cơn giận ấy lên đầu người khác với mong muốn nó sẽ tan biến ngay lập tức, thế nhưng chính những suy nghĩ đó đã khiến cho bạn thêm mệt mỏi. Cuốn sách Giận của thầy Thích Nhất Hạnh sẽ giúp ta chuyển hóa cơn giận và cùng nhau sống tích cực hơn.</p><h3><strong>Thực tập hạnh phúc</strong></h3><p>Theo thầy Thích Nhất Hạnh hạnh phúc có nghĩa là ít đau khổ. Nếu không chuyển hóa được đau khổ thì không thể nào có hạnh phúc.</p><p>Xã hội ngày càng phát triển thế nên tiêu chuẩn về hạnh phúc cũng ngày càng thay đổi rất đa dạng, tùy vào môi trường sống mà mỗi người đều có những định nghĩa khác nhau về hạnh phúc. Có người nghĩ rằng có thật nhiều tiền sẽ hạnh phúc, có người muốn một cuộc sống giản đơn.</p><figure class=\"image\"><img src=\"https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-3.png\" alt=\"review-sach-gian-thich-nhat-hanh-3\" srcset=\"https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-3.png 800w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-3-300x199.png 300w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-3-768x509.png 768w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-3-696x461.png 696w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-3-634x420.png 634w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-3-600x398.png 600w\" sizes=\"100vw\" width=\"800\"></figure><p><i>Review sách Giận – Bí quyết chuyển hóa lửa giận để sống an yên</i></p><p>Sách hay nên đọc:&nbsp;<a href=\"https://revisach.com/review-sach-muon-an-duoc-an/\">Review Sách Muốn An Được An – Tìm Bình An, Hãy Tìm Ở Trong Tâm</a></p><p>&nbsp;</p><p>Nhưng nếu chúng ta nhìn nhận mọi việc ở một góc độ khác, có nhiều tiền chưa chắc đã hạnh phúc, những giá trị vật chất bên ngoài không thể giúp chúng ta duy trì sự hạnh phúc mà hạnh phúc thật sự xuất phát từ bên trong của mỗi con người. Nếu chúng ta cứ mãi chạy theo những giá trị vật chất bên ngoài mà cố tình không chăm sóc thế giới bên trong thì đến một ngày bạn sẽ phải hối hận.</p><h3><strong>Biến rác thành hoa</strong></h3><p><i>“Ta không sợ. Ta có khả năng chuyển rác lại thành hoa, chuyển thù hận lại thành yêu thương.”</i></p><p>Ai trong chúng ta đều phải chấp nhận rằng tiêu cực chính là một phần không thể thiếu trong cuộc sống. Thế nhưng rất nhiều người lại sợ hãi và không dám đối diện với nó và mỗi ngày trôi qua chúng ta đều mang một gánh nặng trên người lúc nào không hay. Nếu muốn hạnh phúc bạn phải biến những điều tiêu cực ấy trở nên tích cực. Và bước đầu của việc kiềm chế cơn giận của mình chính là bạn phải nhận diện được nó.</p><h3><strong>Tìm hiểu bản chất của cơn giận</strong></h3><p>Để kiềm chế được cơn giận thì điều đầu tiên chúng ta cần biết chính là tìm hiểu bản chất của nó, vì sao khi giận dữ chúng ta thường đánh mất lý trí? Vì sao chúng ta luôn mang trong mình những năng lượng tiêu cực.</p><p>Bởi nếu chúng ta không thực hành việc tu tập thì những câu chuyện đau khổ thường xuyên xảy ra quanh chúng ta, giống như việc bạn có thể bực tức chỉ vì có người đứng chen hàng ở siêu thị với mình, bạn cũng có thể bực tức khi bị sếp khiển trách,… những vấn đề này có thể biến một ngày tươi đẹp của bạn trở nên u tối ngay lập tức.</p><p>“Khi bắt đầu tu tập và chế tác năng lượng chánh niệm thì tuệ giác đầu tiên mà ta có được là ta khám phá ra rằng nguyên nhân chính của khổ đau của ta không phải là tự người kia mà do ở hạt giống giận trong tâm ta.”</p><figure class=\"image\"><img src=\"https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-2.png\" alt=\"review-sach-gian-thich-nhat-hanh-2\" srcset=\"https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-2.png 800w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-2-300x199.png 300w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-2-768x509.png 768w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-2-696x461.png 696w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-2-634x420.png 634w, https://revisach.com/wp-content/uploads/2022/12/review-sach-gian-thich-nhat-hanh-2-600x398.png 600w\" sizes=\"100vw\" width=\"800\"></figure><p><i>Review sách Giận – Bí quyết chuyển hóa lửa giận để sống an yên</i></p><h3><strong>Thở để chăm sóc cơn giận</strong></h3><p>Bạn đã bao giờ nghĩ rằng cơn giận của mình cũng cần phải được chăm sóc không? Nghe có chút kì lạ thế nhưng nếu không biết cách để chăm sóc nó thì bạn khó có thể điều chỉnh hành vi của bản thân. Cơ thể của chúng ta vô cùng quan trọng cũng vì sự bận rộn trong công việc mà rất nhiều người lãng quên. “Hơi thở chánh niệm là một pháp môn thực tập giúp ta chăm sóc cảm xúc.”</p><p>Giận là một trong những cuốn sách hay nhất của thầy Thích Nhất Hạnh mà ai cũng nên đọc một lần trong đời, nếu bạn là một người nóng nảy, luôn hành động theo cảm xúc thì hãy đọc ngay cuốn sách này nhé.</p><h2><strong>Trích dẫn hay trong sách</strong></h2><p><i>“Muốn thay đổi sâu sắc cuộc sống trước mắt ta phải xét lại cách ăn uống, tiêu thụ. Phải ngưng tiêu thụ những gì có thể đầu độc ta. Khi đó ta mới có được sức mạnh để nuôi lớn những gì tốt đẹp trong ta và không còn là nạn nhân của sân hận, phiền não.”</i></p><p><i>“Chúng ta biết rằng khi giận thì không nên phản ứng, nghĩa là không nên nói, không nên làm bất cứ điều gì. Khi giận mà nói năng hay hành động là không khoan ngoan. Ta phải trở về tự thân để chăm sóc cơn giận của mình.”</i></p><p><i>“Lắng nghe với tâm từ bi có thể làm người khác bớt khổ. Tuy nhiên, mặc dầu có nhiều thiện chí, ta cũng khó lắng nghe một cách sâu sắc nếu không thực tập lắng nghe với tâm từ bi. Nếu có thể ngồi yên và lắng nghe người ấy với tâm từ bi chỉ trong một giờ thì ta có thể làm vơi bớt khổ đau của người ấy rất nhiều. Ta lắng nghe với một mục đích duy nhất là để cho người kia có cơ hội giãi bày tâm tư và nguôi bớt khổ đau.”</i></p><h2><strong>Lời kết</strong></h2><p>“Hãy ôm ấp cơn giận với tất cả nâng niu, dịu hiền. Cơn giận không phải là kẻ thù, cơn giận là em bé do chính ta thai nghén và cho ra đời.”</p><p>Ai trong đời không từng nổi giận, đó là bản ngã của mỗi con người, hơn nhau ở chỗ ta để cơn giận dẫn dắt ta hay ta có thể chuyển hóa nó thành những điều tốt đẹp. Thực hành Chánh niệm theo giáo lý nhà Phật là một trong những cách buông bỏ cơn giận và tận hưởng những điều tích cực mà nó có thể mang lại cho ta. Đọc sách Giận để giải tỏa năng lượng tiêu cực của bản thân bạn nhé.</p><p>Sách hay nên đọc:&nbsp;<a href=\"https://revisach.com/khong-diet-khong-sinh-dung-so-hai/\">Review Sách Không Diệt Không Sinh Đừng Sợ Hãi – Ôm Lấy Trái Tim Đang Run Rẩy Và An Ủi Tâm Hồn Đang Sợ hãi</a></p>', '20250223230258.jpg', '2025-02-23 16:57:36', '2025-02-23 16:57:36'),
(7, 2, 4, 'Review Sách Hay Nghĩ Giàu Và Làm Giàu : Bí Quyết Thành Công Từ Tư Duy Giàu Có', '<p>Nếu bạn đang tìm kiếm một cuốn sách đầy cảm hứng và kiến thức để truyền cảm hứng cho sự phát triển cá nhân và thành công kinh doanh, thì \"Nghĩ giàu và làm giàu\" của tác giả Napoleon Hill chắc chắn là một lựa chọn không thể bỏ qua.</p><p>Với tuổi đời hơn một thế kỷ và sức ảnh hưởng vượt qua những thăng trầm của lịch sử, cuốn sách kinh điển \"Nghĩ giàu và làm giàu\" của tác giả Napoleon Hill đã trở thành người bạn đồng hành đáng tin cậy và là kim chỉ nam cho biết bao thế hệ đam mê chinh phục thành công.</p><p>&nbsp;</p><h2><strong>Thông tin sách “Nghĩ giàu và làm giàu”</strong></h2><p><strong>Tác giả</strong>: Napoleon Hill</p><p><strong>Thể loại:</strong> Học tập - Hướng nghiệp, Nghệ thuật sống,&nbsp;<a href=\"https://ebook.waka.vn/top-5-cuon-sach-kinh-doanh-lam-giau-nhat-dinh-phai-doc-frnVW.html\">Sách làm giàu</a></p><p><strong>Đọc sách tại đây:</strong> <a href=\"https://ebook.waka.vn/nghi-giau-va-lam-giau-napoleon-hill-bxNbGW.html\">Napoleon Hill - Nghĩ giàu và làm giàu</a>&nbsp;</p><figure class=\"image\"><img src=\"https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/32974.jpg?v=1&amp;w=340&amp;h=497\" alt=\"Bìa sách Nghĩa Giàu và Làm Giàu\"></figure><h2><strong>Review sách “Nghĩ giàu và làm giàu”</strong></h2><p>&nbsp;</p><p>Ra mắt độc giả lần đầu tiên vào năm 1937, cuốn sách \"Nghĩ giàu và làm giàu\" của tác giả Napoleon Hill nhanh chóng trở thành một trong những cuốn sách về tài chính cá nhân bán chạy nhất mọi thời đại. Với tuổi đời hơn 100 năm nhưng giá trị của nó vẫn không hề bị phai mờ theo thời gian, cuốn sách đã để lại dấu ấn sâu đậm trong lòng bạn đọc và truyền cảm hứng cho nhiều thế hệ về thành công, làm giàu và thay đổi cuộc sống.</p><p>Thay vì chỉ đơn thuần chia sẻ những bí quyết làm giàu dễ dàng, \"Nghĩ giàu và làm giàu\" lại mang triết lý sâu sắc hơn. Napoleon Hill tin rằng, thành công và giàu có không chỉ đến từ việc tích lũy tài sản vật chất, mà còn đến từ việc trau dồi, phát triển bản thân. Đó là thông điệp chính xuyên suốt cuốn sách.&nbsp;</p><p>Đặc biệt, tác giả còn chia sẻ bí quyết thành công của những tên tuổi lừng danh như Thomas Edison, Henry Ford, John D. Rockefeller... qua hành trình phỏng vấn huyền thoại của mình.</p><p>Với những giá trị vượt thời gian ấy, cuốn sách \"Nghĩ giàu và làm giàu\" xứng đáng là người bạn đồng hành đáng tin cậy của bất kỳ ai có hoài bão lớn và khao khát thay đổi cuộc đời mình. Đó là lý do tại sao nó vẫn luôn nằm trong danh sách những cuốn sách bán chạy nhất mọi thời đại.</p><p>Với 13 chương mang đến 13 nguyên tắc thành công và hàng trăm trang viết chi tiết về cách áp dụng các nguyên tắc đó, cuốn sách đã truyền cảm hứng cho độc giả về ý chí, nghị lực phấn đấu vươn lên trong cuộc sống và sự nghiệp.</p><p><strong>Nguyên tắc 1 là Khát Vọng</strong>, khuyên bạn nên nuôi dưỡng khát vọng lớn lao để đạt được thành công.</p><p><strong>Nguyên tắc 2 là Niềm Tin</strong>, nhấn mạnh tầm quan trọng của việc tin tưởng vào bản thân và mục tiêu của mình.</p><p><strong>Nguyên tắc 3 là Tự Kỷ Ám Thị,</strong> đề cập đến sức mạnh của việc tự nhủ với bản thân về thành công.</p><p><strong>Nguyên tắc 4 là Kiến Thức Chuyên Môn</strong>, khuyến khích việc học hỏi và trau dồi kiến thức trong lĩnh vực mình theo đuổi.</p><p><strong>Nguyên tắc 5 là Óc Tưởng Tượng</strong>, nhấn mạnh tầm quan trọng của trí tưởng tượng trong việc thiết kế tương lai.</p><p><strong>Nguyên tắc 6 là Lập Kế Hoạch</strong>, lên kế hoạch cụ thể cho mục tiêu của mình.</p><p><strong>Nguyên tắc 7 là Tính Quyết Đoán</strong>, dám đưa ra quyết định dứt khoát để đi đến thành công.</p><p><strong>Nguyên tắc 8 là Lòng Kiên Trì</strong>, không từ bỏ dù gặp thử thách.</p><p><strong>Nguyên tắc 9 là Sức Mạnh của Nhóm Trí Tuệ Ưu Tú</strong>, tìm kiếm sự giúp đỡ từ những người thông minh.</p><p><strong>Nguyên tắc 10 là Tình Dục</strong>, kiểm soát ham muốn và năng lượng tình dục để tập trung vào mục tiêu.</p><p><strong>Nguyên tắc 11 là Tiềm Thức</strong>, sử dụng tiềm thức để đạt mục tiêu.</p><p><strong>Nguyên tắc 12 là Não Bộ</strong>, luôn học hỏi để phát triển não bộ.</p><p><strong>Nguyên tắc 13 là Giác Quan Thứ 6</strong>, tin vào linh cảm của bản thân.</p><figure class=\"image\"><img src=\"http://static-company.waka.vn/img.media/tin%20t%E1%BB%A9c/092023/ngh%C4%A9%20gi%C3%A0u%20l%C3%A0m%20gi%C3%A0u%201200x1200.jpg\" alt=\"Trích dẫn cuốn sách Nghĩ Giàu Làm Giàu\"></figure><p><i>Nghĩ giàu và làm giàu - Napoleon Hill</i></p><p>Cuốn sách \"Nghĩ giàu và làm giàu\" của Napoleon Hill không chỉ cung cấp những bí quyết làm giàu mà còn tập trung vào việc phát triển tư duy và khai phá tiềm năng bên trong chúng ta.</p><p>Trong cuốn sách, tác giả Hill khám phá sự quan trọng của việc xây dựng một tư duy giàu có và khả năng tạo ra các ý tưởng sáng tạo. Ông đưa bạn đọc qua từng bước làm giàu bằng cách chia sẻ kinh nghiệm của các doanh nhân, triệu phú thành đạt mà ông từng phỏng vấn.</p><p>Ông cung cấp những phương pháp và kỹ thuật cụ thể để rèn luyện tư duy, như tập trung, trí nhớ, và khả năng tưởng tượng. Những kỹ năng này giúp nâng cao khả năng sáng tạo và tư duy phản biện của bạn đọc.</p><p>Những ý tưởng làm giàu trong \"Nghĩ giàu và làm giàu\" đều mang tính thực tiễn, có thể áp dụng vào cuộc sống. Chúng là hành trang và động lực giúp bạn hướng tới mục tiêu “Thành công cá nhân” và “Luôn luôn suy nghĩ tích cực” mà Hill nhấn mạnh. Đây chính là những bí quyết giúp bạn đi đến thành công một cách dễ dàng hơn cho dù bạn đang hoạt động trong bất cứ lĩnh vực nào.</p><h2><strong>Kết luận</strong></h2><p>Sách “Nghĩ giàu và làm giàu” của Napoleon Hill vẫn là một kiệt tác vượt thời gian tiếp tục truyền cảm hứng cho các cá nhân qua nhiều thế hệ. Cuốn sách này mang đến những bài học vô giá giúp bạn không chỉ giàu có về mặt tiền bạc, mà còn làm giàu thêm vốn sống và cuộc đời của bạn.</p><p>Cuộc sống có thể khó khăn, chúng ta có thể vẫn đang loay hoay định hướng tương lai, nhưng chỉ cần có niềm tin, sự lạc quan và lòng kiên trì, thành công rồi cũng sẽ tìm đến bạn.</p><p>Đọc và áp dụng những nguyên tắc trong cuốn sách này, bạn sẽ mở cánh cửa cho thành công và giàu có trong cuộc sống của mình.</p>', '20250224000203.jpeg', '2025-02-23 17:03:19', '2025-02-23 17:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Review sách', '<p>Review sách</p>', '2025-02-04 16:07:31', '2025-02-04 16:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` enum('inactive','active') COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `status`, `created_at`, `updated_at`, `image`) VALUES
(4, 'Bút', '', 'active', '2025-02-05 16:54:59', '2025-02-05 16:54:59', ''),
(5, 'Giấy In Ấn - Photo', '<p>Giấy In Ấn - Photo</p>', 'active', '2025-02-06 02:05:10', '2025-02-06 02:05:10', ''),
(6, 'Sách', '<p>Sách</p>', 'active', '2025-02-23 15:49:18', '2025-02-23 15:49:18', '20250223220249.webp');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `rating` tinyint DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '1'
) ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `rating`, `content`, `created_at`, `updated_at`, `status`) VALUES
(5, 4, 7, NULL, 'Sản phẩm tốt', '2025-02-23 19:01:28', '2025-02-23 19:01:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` int NOT NULL,
  `total_price` int NOT NULL,
  `status` enum('Pending','Processing','Shipped','Delivered','Cancelled') COLLATE utf8mb4_unicode_520_ci DEFAULT 'Pending',
  `phone_number` varchar(10) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `shipping_fee` int NOT NULL,
  `payment_method` enum('COD','Online payment','VNPAY') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `payment_status` enum('Paid','Unpaid','Refunded') COLLATE utf8mb4_unicode_520_ci DEFAULT 'Unpaid',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `user_id`, `total_price`, `status`, `phone_number`, `shipping_address`, `shipping_fee`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(13, 'G8MAFTPA', 4, 89, 'Pending', '0364402449', '106/2 Hưng Yên Huyện Phù Cừ Xã Tam Đa', 0, 'Online payment', 'Unpaid', '2025-02-24 04:53:52', '2025-02-24 07:42:20'),
(14, 'G8MAFHCT', 4, 89, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'VNPAY', 'Unpaid', '2025-02-24 04:54:59', '2025-02-24 04:54:59'),
(15, 'G8MAFX7M', 4, 59, 'Pending', '0364402449', '106/2 Lào Cai Huyện Mường Khương Xã Thanh Bình', 0, 'VNPAY', 'Unpaid', '2025-02-24 04:56:06', '2025-02-24 04:56:06'),
(16, 'G8MAFXXL', 4, 59, 'Pending', '0364402449', '106/2 Lào Cai Huyện Mường Khương Xã Thanh Bình', 0, 'Online payment', 'Unpaid', '2025-02-24 04:56:59', '2025-02-28 09:24:54'),
(17, 'G8MAFXRA', 4, 89, 'Pending', '0364402449', '106/2 Hưng Yên Huyện Văn Lâm Xã Tân Quang', 0, 'VNPAY', 'Unpaid', '2025-02-24 04:57:12', '2025-02-24 04:57:12'),
(18, 'G8MA77U9', 4, 89001, 'Shipped', '0364402449', '106/2 Hưng Yên Huyện Phù Cừ Xã Tống Phan', 0, 'Online payment', 'Unpaid', '2025-02-24 05:08:24', '2025-02-28 09:25:08'),
(19, 'G8MA7GBD', 4, 89001, 'Delivered', '0364402449', '106/2 Hưng Yên Huyện Tiên Lữ Xã Thủ Sỹ', 0, 'Online payment', 'Unpaid', '2025-02-24 05:10:12', '2025-02-28 09:14:38'),
(20, 'G8MA7CHG', 4, 89001, 'Shipped', '0364402449', '106/2 Hưng Yên Huyện Văn Giang Xã Phụng Công', 0, 'Online payment', 'Unpaid', '2025-02-24 05:12:38', '2025-02-28 09:24:12'),
(21, 'G8MA7NCQ', 4, 89001, 'Delivered', '0364402449', '106/2 Ninh Thuận Huyện Thuận Bắc Xã Phước Kháng', 0, 'Online payment', 'Paid', '2025-02-24 05:17:56', '2025-02-28 09:03:58'),
(22, 'G8MA7DHY', 4, 89001, 'Cancelled', '0364402449', '106/2 Phú Yên Huyện Tây Hòa Xã Hòa Bình 1', 0, 'Online payment', 'Refunded', '2025-02-24 05:20:50', '2025-02-26 00:05:10'),
(23, 'G8MA7BPG', 4, 89001, 'Pending', '0364402449', '106/2 Phú Yên Huyện Tuy An Xã An Lĩnh', 0, 'VNPAY', 'Unpaid', '2025-02-24 05:23:39', '2025-02-24 05:23:39'),
(24, 'G8MA73P7', 4, 89001, 'Pending', '0364402449', '106/2 Phú Yên Huyện Tây Hòa Xã Hòa Mỹ Đông', 0, 'VNPAY', 'Unpaid', '2025-02-24 05:25:06', '2025-02-24 05:25:06'),
(25, 'G8MA7TUR', 4, 89001, 'Pending', '0364402449', '106/2 Phú Yên Huyện Tây Hòa Xã Hòa Mỹ Đông', 0, 'VNPAY', 'Unpaid', '2025-02-24 05:30:30', '2025-02-24 05:30:30'),
(26, 'G8MA7HR8', 4, 89001, 'Pending', '0364402449', '106/2 Phú Yên Huyện Tây Hòa Xã Hòa Mỹ Đông', 0, 'VNPAY', 'Unpaid', '2025-02-24 05:32:40', '2025-02-24 05:32:40'),
(27, 'G8MA7XLL', 4, 89001, 'Pending', '0364402449', '106/2 Phú Yên Huyện Tây Hòa Xã Hòa Mỹ Đông', 0, 'VNPAY', 'Unpaid', '2025-02-24 05:32:54', '2025-02-24 05:32:54'),
(28, 'G8MA7RTC', 4, 89001, 'Pending', '0364402449', '106/2 Cà Mau Huyện Thới Bình Xã Biển Bạch', 0, 'VNPAY', 'Unpaid', '2025-02-24 05:38:31', '2025-02-24 05:38:31'),
(29, 'G8MAUVRW', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:17:32', '2025-02-24 06:17:32'),
(30, 'G8MAU4QM', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:23:06', '2025-02-24 06:23:06'),
(31, 'G8MAUWGV', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:24:39', '2025-02-24 06:24:39'),
(32, 'G8MAUAWR', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:28:13', '2025-02-24 06:28:13'),
(33, 'G8MAU8XM', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:29:05', '2025-02-24 06:29:05'),
(34, 'G8MAUYY8', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:29:57', '2025-02-24 06:29:57'),
(35, 'G8MAUEN4', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:31:43', '2025-02-24 06:31:43'),
(36, 'G8MACFU9', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:33:40', '2025-02-24 06:33:40'),
(37, 'G8MAC7GC', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:34:20', '2025-02-24 06:34:20'),
(38, 'G8MACGBG', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:35:12', '2025-02-24 06:35:12'),
(39, 'G8MACGYT', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:35:35', '2025-02-24 06:35:35'),
(40, 'G8MACUC3', 4, 89001, 'Pending', '0364402449', '106/2 Hòa Bình Huyện Mai Châu Xã Tân Thành', 0, 'COD', 'Unpaid', '2025-02-24 06:35:51', '2025-02-24 06:35:51'),
(41, 'G8MAVPLX', 4, 89001, 'Pending', '0364402449', '106/2 Kon Tum Huyện Ia H Drai Xã Ia Tơi', 0, 'COD', 'Unpaid', '2025-02-24 07:15:36', '2025-02-24 07:15:36'),
(42, 'G8MAV37A', 4, 89001, 'Pending', '0364402449', '106/2 Kon Tum Huyện Ia H Drai Xã Ia Tơi', 0, 'COD', 'Unpaid', '2025-02-24 07:17:07', '2025-02-24 07:17:07'),
(43, 'G8MAVHXL', 4, 89001, 'Pending', '0364402449', '106/2 Kon Tum Huyện Ia H Drai Xã Ia Tơi', 0, 'COD', 'Unpaid', '2025-02-24 07:21:03', '2025-02-24 07:21:03'),
(44, 'G8MAVXVB', 4, 89001, 'Pending', '0364402449', '106/2 Kon Tum Huyện Ia H Drai Xã Ia Tơi', 0, 'COD', 'Unpaid', '2025-02-24 07:21:30', '2025-02-24 07:21:30'),
(45, 'G8MAVX3Q', 4, 89001, 'Pending', '0364402449', '106/2 Kon Tum Huyện Ia H Drai Xã Ia Tơi', 0, 'COD', 'Unpaid', '2025-02-24 07:21:41', '2025-02-24 07:21:41'),
(46, 'G8MA6GAA', 4, 89001, 'Pending', '0364402449', '106/2 Lào Cai Huyện Mường Khương Xã Tả Thàng', 0, 'COD', 'Unpaid', '2025-02-24 07:30:15', '2025-02-24 07:30:15'),
(47, 'G8MANDTP', 4, 50001, 'Pending', '0364402449', '106/2 Bạc Liêu Huyện Phước Long Xã Vĩnh Phú Tây', 0, 'COD', 'Unpaid', '2025-02-24 07:51:22', '2025-02-24 07:51:22'),
(48, 'G8MAN4UL', 4, 45001, 'Pending', '0364402449', '106/2 Điện Biên Huyện Si Ma Cai Xã Sín Chéng', 0, 'VNPAY', 'Unpaid', '2025-02-24 07:54:16', '2025-02-24 07:54:16'),
(49, 'G8MADB8V', 4, 50001, 'Pending', '0364402449', '106/2 Bắc Giang Huyện Hiệp Hòa Xã Hòa Sơn', 0, 'VNPAY', 'Unpaid', '2025-02-24 08:11:11', '2025-02-24 08:11:11'),
(50, 'G8MADEWX', 4, 40001, 'Pending', '0364402449', '106/2 Bắc Giang Huyện Hiệp Hòa Xã Hoàng An', 0, 'VNPAY', 'Unpaid', '2025-02-24 08:19:12', '2025-02-24 08:19:12'),
(51, 'G8MAP9HX', 4, 40001, 'Pending', '0364402449', '106/2 Bắc Ninh Thị xã Thuận Thành Xã Đại Đồng Thành', 0, 'VNPAY', 'Paid', '2025-02-24 08:24:26', '2025-02-24 08:25:15'),
(52, 'G8MYTMB9', 4, 145001, 'Pending', '0364402449', '106/2', 0, 'VNPAY', 'Paid', '2025-02-26 03:44:39', '2025-02-26 03:45:16'),
(53, 'G8MYHB97', 4, 40001, 'Pending', '0364402449', '106/2', 30, 'VNPAY', 'Paid', '2025-02-26 03:59:17', '2025-02-26 03:59:53'),
(54, 'G8MYH8HK', 4, 102001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-02-26 04:07:58', '2025-02-26 04:07:58'),
(55, 'G8EQTD8C', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 11:47:14', '2025-03-01 11:47:14'),
(56, 'G8EQTM4G', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 12:55:03', '2025-03-01 12:55:03'),
(57, 'G8EQHQ3P', 4, 155901, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:05:41', '2025-03-01 13:05:41'),
(58, 'G8EQHLKV', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:11:30', '2025-03-01 13:11:30'),
(59, 'G8EQHF38', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:16:09', '2025-03-01 13:16:09'),
(60, 'G8EQHG7M', 4, 20000, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:19:30', '2025-03-01 13:19:30'),
(61, 'G8EQHG33', 4, 20000, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:21:40', '2025-03-01 13:21:40'),
(62, 'G8EQHCBW', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:26:56', '2025-03-01 13:26:56'),
(63, 'G8EQHCA3', 4, 203901, 'Pending', '0364402449', '106/2', 37001, 'COD', 'Unpaid', '2025-03-01 13:28:32', '2025-03-01 13:28:32'),
(64, 'G8EQHVWC', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:36:56', '2025-03-01 13:36:56'),
(65, 'G8EQHBQ7', 4, 230001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 13:55:45', '2025-03-01 13:55:45'),
(66, 'G8EQH366', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:02:22', '2025-03-01 14:02:22'),
(67, 'G8EQH346', 4, 308302, 'Pending', '0364402449', '106/2', 58002, 'COD', 'Unpaid', '2025-03-01 14:03:38', '2025-03-01 14:03:38'),
(68, 'G8EQH3E4', 4, 308302, 'Pending', '0364402449', '106/2', 58002, 'COD', 'Unpaid', '2025-03-01 14:05:53', '2025-03-01 14:05:53'),
(69, 'G8EQH49E', 4, 308302, 'Pending', '0364402449', '106/2', 58002, 'COD', 'Unpaid', '2025-03-01 14:07:13', '2025-03-01 14:07:13'),
(70, 'G8EQH4DR', 4, 308302, 'Pending', '0364402449', '106/2', 58002, 'COD', 'Unpaid', '2025-03-01 14:08:01', '2025-03-01 14:08:01'),
(71, 'G8EQH4B6', 4, 308302, 'Pending', '0364402449', '106/2', 58002, 'COD', 'Unpaid', '2025-03-01 14:08:15', '2025-03-01 14:08:15'),
(72, 'G8EQH48N', 4, 308302, 'Pending', '0364402449', '106/2', 58002, 'COD', 'Unpaid', '2025-03-01 14:08:32', '2025-03-01 14:08:32'),
(73, 'G8EQHKK7', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:11:47', '2025-03-01 14:11:47'),
(74, 'G8EQHK8Y', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:13:05', '2025-03-01 14:13:05'),
(75, 'G8EQHWLE', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:14:27', '2025-03-01 14:14:27'),
(76, 'G8EQHWDD', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:16:31', '2025-03-01 14:16:31'),
(77, 'G8EQHW8Q', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:18:32', '2025-03-01 14:18:32'),
(78, 'G8EQHTL9', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:19:49', '2025-03-01 14:19:49'),
(79, 'G8EQHT9P', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:20:58', '2025-03-01 14:20:58'),
(80, 'G8EQHXBW', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:30:30', '2025-03-01 14:30:30'),
(81, 'G8EQHAT6', 4, 70001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:36:23', '2025-03-01 14:36:23'),
(82, 'G8EQHMBB', 4, 70001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:53:10', '2025-03-01 14:53:10'),
(83, 'G8EQHMY7', 4, 110001, 'Pending', '0364402449', '106/2', 30001, 'COD', 'Unpaid', '2025-03-01 14:54:53', '2025-03-01 14:54:53'),
(84, 'G8EL4XEK', 4, 90001, 'Pending', '0364402449', '106/2', 30001, 'Online payment', 'Unpaid', '2025-03-02 12:48:03', '2025-03-02 12:48:03'),
(85, 'G8EL4MLW', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'Online payment', 'Unpaid', '2025-03-02 13:05:21', '2025-03-02 13:05:21'),
(86, 'G8ELKQEG', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'Online payment', 'Unpaid', '2025-03-02 13:16:17', '2025-03-02 13:16:17'),
(87, 'G8ELKF3D', 4, 50001, 'Pending', '0364402449', 'Tra vinh', 30001, 'Online payment', 'Unpaid', '2025-03-02 13:22:44', '2025-03-02 13:22:44'),
(88, 'G8ELKUQB', 4, 50001, 'Pending', '0364402449', '106/2', 30001, 'VNPAY', 'Paid', '2025-03-02 13:30:53', '2025-03-02 13:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL
) ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(29, 27, 7, 1, 59000),
(30, 28, 7, 1, 59000),
(31, 29, 7, 1, 59000),
(32, 30, 7, 1, 59000),
(33, 31, 7, 1, 59000),
(34, 32, 7, 1, 59000),
(35, 33, 7, 1, 59000),
(36, 34, 7, 1, 59000),
(37, 35, 7, 1, 59000),
(38, 36, 7, 1, 59000),
(39, 37, 7, 1, 59000),
(40, 38, 7, 1, 59000),
(41, 39, 7, 1, 59000),
(42, 40, 7, 1, 59000),
(43, 41, 7, 1, 59000),
(44, 42, 7, 1, 59000),
(45, 43, 7, 1, 59000),
(46, 44, 7, 1, 59000),
(47, 45, 7, 1, 59000),
(48, 46, 7, 1, 59000),
(49, 47, 3, 1, 20000),
(50, 48, 8, 1, 15000),
(51, 49, 3, 1, 20000),
(52, 50, 11, 1, 10000),
(53, 51, 11, 1, 10000),
(54, 52, 4, 1, 100000),
(55, 52, 8, 1, 15000),
(56, 53, 11, 1, 10000),
(57, 54, 6, 1, 72000),
(58, 55, 3, 1, 20000),
(59, 56, 3, 1, 20000),
(60, 57, 7, 1, 59000),
(61, 57, 12, 1, 32900),
(62, 57, 13, 1, 34000),
(63, 58, 3, 1, 20000),
(64, 59, 3, 1, 20000),
(65, 60, 3, 1, 20000),
(66, 61, 3, 1, 20000),
(67, 62, 3, 1, 20000),
(68, 63, 12, 1, 32900),
(69, 63, 13, 1, 34000),
(70, 63, 4, 1, 100000),
(71, 64, 3, 1, 20000),
(72, 65, 3, 10, 20000),
(73, 66, 3, 1, 20000),
(74, 67, 3, 1, 20000),
(75, 68, 3, 1, 20000),
(76, 68, 12, 7, 32900),
(77, 69, 3, 1, 20000),
(78, 69, 12, 7, 32900),
(79, 70, 3, 1, 20000),
(80, 70, 12, 7, 32900),
(81, 71, 3, 1, 20000),
(82, 71, 12, 7, 32900),
(83, 72, 3, 1, 20000),
(84, 72, 12, 7, 32900),
(85, 73, 3, 1, 20000),
(86, 74, 3, 1, 20000),
(87, 75, 3, 1, 20000),
(88, 76, 3, 1, 20000),
(89, 77, 3, 1, 20000),
(90, 78, 3, 1, 20000),
(91, 79, 3, 1, 20000),
(92, 80, 3, 1, 20000),
(93, 81, 3, 2, 20000),
(94, 82, 3, 2, 20000),
(95, 83, 3, 4, 20000),
(96, 84, 3, 3, 20000),
(97, 85, 3, 1, 20000),
(98, 86, 3, 1, 20000),
(99, 87, 3, 1, 20000),
(100, 88, 3, 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int NOT NULL,
  `discount_price` int NOT NULL,
  `view` int DEFAULT '0',
  `stock` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_feature` tinyint NOT NULL,
  `status` enum('available','out_of_stock','discontinued','') COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'available',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `length` decimal(10,2) DEFAULT NULL COMMENT 'Chiều dài (cm)',
  `width` decimal(10,2) DEFAULT NULL COMMENT 'Chiều rộng (cm)',
  `height` decimal(10,2) DEFAULT NULL COMMENT 'Chiều cao (cm)',
  `weight` decimal(10,2) DEFAULT NULL COMMENT 'Cân nặng (kg)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `short_description`, `long_description`, `price`, `discount_price`, `view`, `stock`, `image`, `is_feature`, `status`, `created_at`, `updated_at`, `length`, `width`, `height`, `weight`) VALUES
(3, 4, 'Bút bi dán bàn đôi Thiên Long FO-PH01 xanh', '<p>Bút đế cắm Flexoffice FO-PH01. Bút chuyên để trên bàn làm việc nơi đông người, bàn tiếp tân,ngân hàng, siêu thị...</p>', '<p>CHI TIẾT SẢN PHẨM</p><figure class=\"table\"><table><tbody><tr><td>Tên danh mục</td><td>Bút đế cắm</td></tr><tr><td>Thương hiệu</td><td>Flexoffice</td></tr><tr><td>Kích thước đầu bút</td><td>0.7 mm</td></tr><tr><td>Chiều dài viết được</td><td>900 -1200 m</td></tr><tr><td>Số lượng bút</td><td>2</td></tr><tr><td>Đóng gói</td><td>10 bộ/ hộp</td></tr><tr><td>Trọng lượng</td><td>47 gram</td></tr></tbody></table></figure><p>Bút đế cắm Flexoffice FO-PH01. Bút chuyên để trên bàn làm việc nơi đông người, bàn tiếp tân,ngân hàng, siêu thị...Bút bền màu, đẹp, nét viết thanh, sắc nét, không lem mực, ít khi chảy mực.Sản phẩm do Tập đoàn Thiên Long sản xuất.&nbsp;Bút chuyên dùng in quảng cáo. Bút đế cắm FO-PH01 có đế cắm rộng, bạn có thể in quảng cáo lên đế bút thay cho chữ \"Flexoffice\" bằng thương hiệu của bạn. Hoặc có thể in quảng cáo lên Thân Bút để làm quà tặng cho khách hàng. Bút đế cắm thường được đặt ở nơi công cộng, nên lượng khách hàng tiềm năng sẽ biết công ty bạn thông qua hình thức quảng cáo này.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://file.hstatic.net/1000230347/file/but_de_cam_thien_long_-_flexoffice_fo-ph01__10__grande.jpg\" alt=\"Bút đế cắm Thiên Long - Flexoffice FO-PH01\"></figure><p>&nbsp;</p><p><strong>Đặc điểm:</strong><br>- Kiểu dáng chắc chắn, Xoay 360 độ rất thuận tiện sử dụng nơi công cộng.<br>- Dây lò xo bằng nhựa mềm có độ đàn hồi và độ bền cao.<br>- Có băng keo 2 mặt phía dưới đế cắm, giúp giữ sản phẩm không xê dịch<br>- Bao bì túi có tai treo thuận tiện cho trưng bày ở siêu thị, của hàng.<br>- Bút viết trơn êm, mực ra đều và liên tục.<br>- Đầu bi 0.7mm<br>- Chiều dài nét mực viết được ít nhất 1000m.<br>- Màu sắc: xanh</p><p>&nbsp;</p><p><strong>Bảo quản:</strong>&nbsp;Nơi khô ráo, thoáng mát.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://file.hstatic.net/1000230347/file/but_de_cam_thien_long_-_flexoffice_fo-ph01__11__grande.jpg\" alt=\"Bút đế cắm Thiên Long - Flexoffice FO-PH01\"></figure><p>&nbsp;</p>', 35000, 15000, 18, 2988, '20250206080221.jpg', 1, 'available', '2025-02-06 01:21:10', '2025-02-06 01:21:10', 15.00, 2.00, 17.00, 47.00),
(4, 4, 'Hộp 20 cây Bút bi Thiên Long TL027 - xanh', '<p>Đây là một trong những cây bút đang được học sinh sử dụng nhiều nhất tại Việt Nam</p>', '<p><strong>CHI TIẾT SẢN PHẨM</strong></p><figure class=\"table\"><table><tbody><tr><td>Thương hiệu</td><td>Thiên Long</td></tr><tr><td>Đường kính viên bi</td><td>0.5 mm</td></tr><tr><td>Khối lượng mực</td><td>0.12 - 0.15 g</td></tr><tr><td>Đóng gói</td><td>20 cây / hộp</td></tr><tr><td>Trọng lượng</td><td>9 gram</td></tr></tbody></table></figure><p>Đây là một trong những cây bút đang được học sinh sử dụng nhiều nhất tại Việt Nam. Bút có thiết kế tối giản, nhưng tinh tế và ấn tượng. Toàn bộ thân bút làm từ nhựa trong, phối hợp hoàn hảo với màu ruột bút bên trong.</p><p><strong>Đặc điểm:</strong><br>- Đầu bi: 0.5mm, sản xuất tại Thụy Sĩ.<br>- Bút bi dạng bấm cò.<br>- Nơi tì ngón tay có tiết diện hình tam giác vừa vặn với tay cầm giúp giảm trơn tuột khi viết thường xuyên.<br>- Độ dài viết được: 1.600-2.000m<br>- Mực đạt chuẩn: ASTM D-4236, ASTM F 963-91, EN71/3, TSCA.</p>', 105000, 5000, 3, 30000, '20250206080240.png', 1, 'available', '2025-02-06 01:40:55', '2025-02-06 01:40:55', 15.00, 5.00, 3.00, 200.00),
(5, 4, 'Bút dạ quang Staedtler - Vàng', '<p>Bút dạ quang Staedler là loại bút dùng để đánh dấu, nhớ dòng dùng cho mọi loại giấy</p>', '<p>CHI TIẾT SẢN PHẨM</p><figure class=\"table\"><table><tbody><tr><td>Công dụng : Công dụng của bút dạ quang hay gọi là bút nhớ dòng được ứng dụng nhiều và phải nói là thường xuyên hằng ngày trong cuộc sống của chúng ta như, học sinh sinh viên dùng trong học tập, nhân viên văn phòng dùng để ghi chú đánh dấu các loại giấy tờ quan trọng</td></tr><tr><td>Đặc Điểm : Bút dạ quang Staedler là loại bút dùng để đánh dấu, nhớ dòng dùng cho mọi loại giấy. Màu mực tươi sáng làm nổi bật các dòng cần điểm cần lưu ý. Mực viết được sản xuất Đức từ chất màu hoà với nước vì vậy không gây mùi khó chịu và không độc hại. Bút có nhiều màu sắc lựa chọn giúp cho bạn thể hiện dòng thông tin của mình rõ ràng hơn</td></tr><tr><td>Đơn Vị Tính : Cây - 10 cây/hộp</td></tr><tr><td>Quy Cách : Đầu bút 5mm</td></tr><tr><td>Màu Sắc : Vàng / Cam / Hồng / Xanh / Lá</td></tr></tbody></table></figure><p><strong>Bảo quản</strong>:</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nhiệt độ: 10 ~ 55º C.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Độ ẩm: 55 ~ 95% RH.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tránh xa nguồn nhiệt, dầu mỡ.</p>', 19000, 0, 4, 3000, '20250206080244.jpg', 0, 'available', '2025-02-06 01:44:35', '2025-02-06 01:44:35', 14.00, 2.00, 2.00, 30.00),
(6, 4, 'Hộp 10 cây Bút dạ quang TOYO xanh lá', '<p>Bút dạ quang Toyo thiết kế hình trụ, cầm nhẹ và chắc tay. Đầu bút bằng Polyethylene, dạng vát xéo, bề rộng nét viết 5mm giúp sử dụng linh hoạt mà không gây mỏi tay khi cầm lâu</p>', '<p>CHI TIẾT SẢN PHẨM</p><figure class=\"table\"><table><tbody><tr><td>Công dụng : Công dụng của bút dạ quang hay gọi là bút nhớ dòng được ứng dụng nhiều và phải nói là thường xuyên hằng ngày trong cuộc sống của chúng ta như, học sinh sinh viên dùng trong học tập, nhân viên văn phòng dùng để ghi chú đánh dấu các loại giấy tờ quan trọng</td></tr><tr><td>Đặc Điểm : Bút dạ quang Toyo thiết kế hình trụ, cầm nhẹ và chắc tay. Đầu bút bằng Polyethylene, dạng vát xéo, bề rộng nét viết 5mm giúp sử dụng linh hoạt mà không gây mỏi tay khi cầm lâu.<br><br>Thích hợp cho nhiều loại giấy, không gây lem giấy hay thấm màu sang trang sau</td></tr><tr><td>Đơn Vị Tính : Cây - 10 cây/hộp</td></tr><tr><td>Quy Cách : Đầu bút 5mm</td></tr><tr><td>Màu Sắc : Vàng / Cam / Hồng / Xanh / Lá</td></tr></tbody></table></figure><p><strong>Bảo quản</strong>:</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nhiệt độ: 10 ~ 55º C.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Độ ẩm: 55 ~ 95% RH.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tránh xa nguồn nhiệt, dầu mỡ.</p>', 86000, 14000, 2, 3000, '20250206090202.jpg', 1, 'available', '2025-02-06 02:02:20', '2025-02-06 02:02:20', 14.00, 7.00, 3.00, 150.00),
(7, 5, 'Decal in Nhiệt A6 Xấp - 100x150mm - 500 tem', '<p>Decal in nhiệt A6 (100x150mm) – 500 tem, chất lượng cao, bám mực tốt, phù hợp cho máy in nhiệt. Sử dụng rộng rãi trong vận chuyển, kho bãi, logistics, tem nhãn sản phẩm</p>', '<p>Decal in nhiệt A6 (100x150mm) gồm 500 tem cuộn, chuyên dụng cho các loại máy in nhiệt. Chất liệu giấy decal nhiệt bền, rõ nét, không cần mực in, tiết kiệm chi phí. Kích thước tiêu chuẩn phù hợp in tem vận chuyển, mã vạch, nhãn dán sản phẩm trong kho hàng, thương mại điện tử, logistics. Keo bám dính chắc chắn, chống lem, không bong tróc khi sử dụng. Thích hợp cho các đơn vị giao hàng, kho bãi và cửa hàng bán lẻ</p>', 69000, 10000, 3, 3000, '20250206090207.png', 1, 'available', '2025-02-06 02:07:05', '2025-02-06 02:07:05', 15.00, 10.00, 5.00, 800.00),
(8, 5, 'Giấy ghi chú UNC 3x5 - 7.5x12.5cm', '<p>Giấy ghi chú UNC 3x5 (7.5x12.5cm), tiện lợi cho ghi chép nhanh, giấy dày, bám mực tốt, phù hợp cho học tập, làm việc và văn phòng</p>', '<p>CHI TIẾT SẢN PHẨM</p><figure class=\"table\"><table><tbody><tr><td>Công dụng: Giúp người sử dụng liệt kê,ghi chú , lên kế hoạch , theo dõi công việc dễ dàng</td></tr><tr><td>Đặc Điểm: Có lớp keo dính sẵn . Keo dính chắc , có thể bóc ra dán lại.</td></tr><tr><td>Đơn Vị Tính: 100 tờ/xấp</td></tr><tr><td>Quy Cách: 6 xấp/lốc</td></tr><tr><td>Màu Sắc: màu vàng tươi sáng</td></tr><tr><td>Bảo Quản: Nhiệt độ: 10 ~ 55º C. Độ ẩm: 55 ~ 95% RH. Tránh xa nguồn nhiệt, dầu mỡ.</td></tr></tbody></table></figure><p><strong>Bảo quản</strong>:</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nhiệt độ: 10 ~ 55º C.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Độ ẩm: 55 ~ 95% RH.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tránh xa nguồn nhiệt, dầu mỡ.</p>', 15000, 0, 1, 3000, '20250206090209.jpg', 0, 'available', '2025-02-06 02:09:48', '2025-02-06 02:09:48', 13.00, 8.00, 1.00, 150.00),
(10, 4, 'Mực lông dầu Thiên Long 25ml đen', '<p>Bình mực bút lông dầu dùng để bơm mực cho các loại bút lông lông dầu, để sử dụng tiết kiệm hơn</p>', '<p><strong>CHI TIẾT SẢN PHẨM</strong></p><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td>Công dụng Bình mực bút lông dầu dùng để bơm mực cho các loại bút lông lông dầu, để sử dụng tiết kiệm hơn</td></tr><tr><td>Đặc Điểm Mực tươi sáng, bám dính tốt, không độc hại (theo tiêu chuẩn Châu Âu và Mỹ).<br>Thiết kế hộp khoa học giúp tránh bay hơi và chảy mực...<br><br>Van tiết lưu giúp mực luôn nhỏ thành dạng giọt khi bơm, giúp cho việc bơm mực dễ dàng và thuận tiện<br><br>Kiểu dáng lọ có đầu bơm nhỏ , dài thuận tiện cho việc châm thêm mực vào ruột bút .</td></tr><tr><td>Đơn Vị Tính : 1 Lọ</td></tr><tr><td>Quy Cách : 1 Lọ/ 1 Hộp</td></tr><tr><td>Màu Sắc : Xanh, Đỏ, Đen</td></tr></tbody></table></figure><p><strong>Bảo quản</strong>:</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nhiệt độ: 10 ~ 55º C.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Độ ẩm: 55 ~ 95% RH.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tránh xa nguồn nhiệt, dầu mỡ.</p>', 15000, 10000, 1, 2997, '20250223230207.jpg', 1, 'available', '2025-02-23 16:07:32', '2025-02-23 16:07:32', 4.00, 4.00, 8.00, 20.00),
(11, 5, 'Sổ xé A4 - 60 tờ', '<p>Sổ xé A4 - 60 tờ</p>', '<p><strong>CHI TIẾT SẢN PHẨM</strong></p><p>Sổ xé A4 - 60 tờ</p>', 30000, 20000, 0, 3000, '20250223230209.jpg', 1, 'available', '2025-02-23 16:09:46', '2025-02-23 16:09:46', 30.00, 21.00, 1.00, 400.00),
(12, 6, 'How Innovation Works', '<p><strong>How Innovation Works</strong></p>', '<h2><strong>Thông tin chi tiết</strong></h2><figure class=\"table\"><table><tbody><tr><th>Mã hàng</th><td>9780062916600</td></tr><tr><th>Tên Nhà Cung Cấp</th><td><a href=\"https://www.fahasa.com/harper-collins?fhs_campaign=ATTRIBUTE_PRODUCT\">HarperCollins Publishers</a></td></tr><tr><th>Tác giả</th><td>Matt Ridley</td></tr><tr><th>NXB</th><td>Harper Perennial</td></tr><tr><th>Năm XB</th><td>2021</td></tr><tr><th>Ngôn Ngữ</th><td>Tiếng Anh</td></tr><tr><th>Trọng lượng (gr)</th><td>330</td></tr><tr><th>Kích Thước Bao Bì</th><td>20.3 x 13.5 x 2.5 cm</td></tr><tr><th>Số trang</th><td>432</td></tr><tr><th>Hình thức</th><td>Bìa Mềm</td></tr></tbody></table></figure>', 329000, 296100, 1, 300, '20250224160207.webp', 1, 'available', '2025-02-24 09:07:50', '2025-02-24 09:07:50', 23.00, 15.00, 3.00, 600.00),
(13, 6, 'The Fine Print', '<p>Nhà cung cấp:<strong>Hachette UK Distribution</strong></p><p>Tác giả:<strong>Lauren Asher</strong></p><p>Nhà xuất bản:<strong>Piatkus</strong></p><p>Hình thức bìa:<strong>Bìa Mềm</strong></p>', '<h2><strong>Thông tin chi tiết</strong></h2><figure class=\"table\"><table><tbody><tr><th>Mã hàng</th><td>9780349433448</td></tr><tr><th>Tên Nhà Cung Cấp</th><td>Hachette UK Distribution</td></tr><tr><th>Tác giả</th><td>Lauren Asher</td></tr><tr><th>NXB</th><td>Piatkus</td></tr><tr><th>Năm XB</th><td>2022</td></tr><tr><th>Ngôn Ngữ</th><td>Tiếng Anh</td></tr><tr><th>Trọng lượng (gr)</th><td>310</td></tr><tr><th>Kích Thước Bao Bì</th><td>19.8 x 12.8 x 4.4 cm</td></tr><tr><th>Số trang</th><td>448</td></tr><tr><th>Hình thức</th><td>Bìa Mềm</td></tr></tbody></table></figure>', 337000, 303000, 0, 3000, '20250224160210.png', 1, 'available', '2025-02-24 09:10:12', '2025-02-24 09:10:12', 21.00, 14.00, 2.00, 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(320) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone_number` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'active',
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'customer',
  `reset_token` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `reset_token_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`, `phone_number`, `address`, `date_of_birth`, `created_at`, `updated_at`, `avatar`, `status`, `role`, `reset_token`, `reset_token_expiry`) VALUES
(2, 'nhan123', 'Huynh Nhu', '$2y$10$8c8B4ihpXTidmgRh9HlBQ.jWa9zYAZ.yUiUPoXmF80ieywrLYGG3G', 'camlypham61@gmail.com', '0364402449', 'Tra vinh', '2025-02-20', '2025-02-02 11:30:56', '2025-02-02 11:30:56', NULL, 'active', 'customer', NULL, NULL),
(4, 'nhu10', 'Huynh Nhu', '$2y$10$.x/EFfAflxhp2ukLEk1aJ.qZ4jxYxXsOeKwiznwVYWAaGU9njchqu', 'Huynhnhule223@gmail.com', '0364402449', 'Tra vinh', '2025-01-30', '2025-02-02 11:39:31', '2025-02-02 11:39:31', '20250204180258.jpg', 'active', 'admin', '180dacb8894b26834792b90fc07410f323c047e66d7fafb76c2cf3db66261b32c231864efe9b4948ecea3288cee31f5015da', '2025-03-02 20:45:16'),
(9, 'nhulth', 'Huynh Nhu', '$2y$10$yUH86B9KxQoSg7FVr4ZMgOqm9YqGJdxdvGhYm2WjUumxIdsnHahPq', 'lethina1@gmail.com', '0364402432', 'Tra vinh', '2025-01-30', '2025-02-04 15:51:57', '2025-02-04 15:51:57', NULL, 'active', 'customer', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_user` (`user_id`),
  ADD KEY `fk_blog_category` (`category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_category` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_blog_category` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`) ON DELETE SET;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
