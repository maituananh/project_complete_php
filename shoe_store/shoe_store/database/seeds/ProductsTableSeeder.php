<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('products')->insert([
            [
                'idProducts' => 'code1',
                'name' => 'adidas 1',
                'price' => '560.000',
                'image' => 'pic2.jpg',
                'category' => 'sản phẩm tốt',
                'like' => 10,
                'describe' => 'Giày adidas tubular shadow màu xám mang đến cho bạn phong cách trẻ trung năng động.',
                'content_details' => 'Nếu đã là một fan của giày adidas chắc hẳn các bạn đã biết đến những công nghê hàng đầu của Adidas mang đến cho bạn những đôi giày như thế nào rồi phải không?',
                'reviews' => 'đôi giày adidas mà mình review ngày hôm nay chắc chắn sẽ làm cho bạn không khỏi ngạc nhiên với những điều mà đôi giày này mang lại _ giày adidas mang tên Swift Run. Cùng khám phá đôi giày mới nhìn mà mình đã bị hạ gục này nhé !',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
            [
                'idProducts' => 'code2',
                'name' => 'adidas 2',
                'price' => '540.000',
                'image' => 'pic11.jpg',
                'category' => 'sản phẩm tốt',
                'like' => 20,
                'describe' => 'Giày Adidas NMD màu đỏ mận mang đến cho bạn phong cách trẻ trung năng động. Dễ dàng phối đồ với giày Adidas NMD là điều bạn dễ dàng nhận thấy, thật tuyệt vời phải không ạ! ',
                'content_details' => 'Thứ nhất, với tên gọi của đôi giày adidas này',
                'reviews' => ' cũng đã thể hiện lên sự mong muốn cũng như những gì mà đôi giày này mong muốn mang đến cho những khách hàng của mình: Swift Run được dịch đơn giản sang tiếng việt là chạy nhanh. Với những điều đó Adidas cũng áp dụng những công nghệ hàng đầu của họ để hình thành nên một đôi giày adidas như mong muốn.',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
            [
                'idProducts' => 'code3',
                'name' => 'adidas 3',
                'price' => '570.000',
                'image' => 'pic3.jpg',
                'category' => 'sản phẩm tốt',
                'like' => 10,
                'describe' => 'Giày Adidas NEO màu đen với thiết kế nhẹ nhàng thanh thoát, màu sắc cá tính và đặc biệt dễ dàng phối đồ.',
                'content_details' => 'Phần upper với công nghệ Primeknit không bàn cãi với độ đàn hồi đỉnh cao  đem lại độ thoải mái và thoát mồ hôi nhanh chóng cho người sử dụng',
                'reviews' => 'Chính đặc điểm này đã mang đến sự thoải mái cho ngay cả nhữung người có đôi chân to – lượng khách hàng có độ khó khăn nhất định trong tìm những đôi giày phù hợp với mình.',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
            [
                'idProducts' => 'code4',
                'name' => 'adidas 4',
                'price' => '570.000',
                'image' => 'pic4.jpg',
                'category' => 'sản phẩm tốt',
                'like' => 60,
                'describe' => 'Giày Adidas NMD XR1 màu đen mang đến cho bạn phong cách trẻ trung năng động.',
                'content_details' => 'Thứ hai, khi nghĩ đến công nghệ upper bằng Primeknit của đôi giày này chắn hẳn phần lớn người dùng sẽ nghĩ rằng đôi giày sẽ được kết hợp với đế Boost đình đám của Adidas. ',
                'reviews' => 'Nhưng không, đôi giày này được kết hợp với đế EVA – một trong những công nghệ nổi tiếng đầu tiên của giày adidas',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
            [
                'idProducts' => 'code4',
                'name' => 'adidas 5',
                'price' => '570.000',
                'image' => 'pic5.jpg',
                'category' => 'sản phẩm tốt',
                'like' => 60,
                'describe' => 'Giày Adidas NMD XR1 màu đen mang đến cho bạn phong cách trẻ trung năng động.',
                'content_details' => 'Thứ hai, khi nghĩ đến công nghệ upper bằng Primeknit của đôi giày này chắn hẳn phần lớn người dùng sẽ nghĩ rằng đôi giày sẽ được kết hợp với đế Boost đình đám của Adidas. ',
                'reviews' => 'Nhưng không, đôi giày này được kết hợp với đế EVA – một trong những công nghệ nổi tiếng đầu tiên của giày adidas',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
            [
                'idProducts' => 'code6',
                'name' => 'converse 1',
                'price' => '550.000',
                'image' => 'pic6.jpg',
                'category' => 'sản phẩm tốt',
                'like' => 60,
                'describe' => 'Giày Converse Classic chắc chắn là một sản phẩm nằm trong bộ sưu tập giày của bạn.Trước khi làm quen với Giày thì Giày Converse classic như một bước đệm hoàn hảo cho những bước chân đầu đời của bạn. ',
                'content_details' => 'Đây chính là một sự kết hợp mới mẻ mà đôi giày này mang lại khách hàng ',
                'reviews' => ' Mình thực sự không nghĩ rằng đôi giày này lại nhẹ đến vậy cho đến khi mang lên chân. Đôi giày rất êm và thoải mái đến mình khó tin vào sự kết hợp này.',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
            [
                'idProducts' => 'code7',
                'name' => 'converse 2',
                'price' => '555.000',
                'image' => 'pic7.jpg',
                'category' => 'sản phẩm tốt',
                'like' => 60,
                'describe' => 'Giày converse da cao cấp chính hãng được nhiều tín đồ săn lùng, với chất liệu da tuyệt vời, thiết kế chi tiết, bền đẹp và sắc nét hơn rất nhiều sản phẩm trên thị trường.',
                'content_details' => 'Đây chính là một sự kết hợp mới mẻ mà đôi giày này mang lại khách hàng ',
                'reviews' => ' Mình thực sự không nghĩ rằng đôi giày này lại nhẹ đến vậy cho đến khi mang lên chân. Đôi giày rất êm và thoải mái đến mình khó tin vào sự kết hợp này.',
                'updated_at' => $dt->toDateString(),
                'created_at' => $dt->toDateString()
            ],
        ]);
    }
}
