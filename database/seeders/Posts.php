<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                "name"=>"Lễ ký kết hợp tác chiến lược phân phối Happy One - Central giai đoạn 2",
                "description"=>"TSáng ngày 08/05, đã diễn ra lễ ký kết hợp tác chiến lược phân phối khu phức hợp căn hộ thông minh trung tâm thành phố Thủ Dầu Một Happy One - Central giữa Công ty cổ phần Tập đoàn Địa ốc Vạn Xuân (Vạn Xuân Group) và hai đơn vị phát triển dự án là CEN Sài Gòn, Viva Homes cùng các đơn vị phân phối chiến lược STDA, An Tường Real, Song Khánh, Vũ Gia, Bình Dương Center Real, Happy Homes.",
                "content"=>"Phát biểu khai mạc chương trình, ông Đoàn Văn Hoạt  - Tổng giám đốc Vạn Xuân Group chia sẻ Khu phức hợp căn hộ thông minh trung tâm Thành phố Thủ Dầu Một Happy One - Central là tâm huyết và cải tiến sáng tạo không ngừng của Vạn Xuân Group về một không gian sống lý tưởng dành cho những chủ nhân tương lai. Happy One - Central đã nhận được sự ủng hộ tích cực của khách hàng ngay từ khi mới ra mắt thị trường. Điều này được minh chứng qua Lễ công bố GĐ 1 với hơn 500 căn hộ đã có chủ chỉ trong một buổi sáng sự kiện. “Chúng tôi tự tin Happy One - Central sẽ tiếp tục được đông đảo khách hàng đón nhận bởi ở đây hoàn toàn đáp ứng được trọn vẹn mọi tiêu chuẩn sống khắt khe nhất của những chủ nhân tương lai”, ông Hoạt nhấn mạnh.",
                "image"=>"abc.jpg",
                "url_key"=>"le-ky-ket",
                "uid"=>"asv123567",
                "numview"=>"12",
                "id_cat"=>"1",
                "id_user"=>"1",
                "status"=>"1"
            ]);

            DB::table('posts')->insert([
                    "name"=>"CEO Becosmetic Trần Hà Quang: Nếu không hành động, thành công sẽ không bao giờ đến",
                    "description"=>"Nghỉ học ĐH Ngoại thương khi học đến năm 3, Trần Hà Quang chọn cho mình con đường lập nghiệp bằng chính những trải nghiệm kinh doanh thực tế.",
                    "content"=>"Học xong năm thứ 3 đại học Ngoại Thương, Trần Hà Quang có một quyết định táo bạo: Bảo lưu kết quả học và ra đời kiếm tiền. Khỏi phải nói mọi người xung quanh anh đã sốc như thế nào vì anh đi ngược lại số đông, rời bỏ ngôi trường nhiều người ao ước lúc bấy giờ. Bỏ ngoài tai tất cả, Hà Quang chỉ tự nhủ: “Tôi muốn học thêm ở trường đời”.",
                    "image"=>"abc.jpg",
                    "url_key"=>"tran-ha-quang",
                    "uid"=>"asv1231231",
                    "numview"=>"12",
                    "id_cat"=>"1",
                    "id_user"=>"1",
                    "status"=>"1"
                ]);
    }
}
