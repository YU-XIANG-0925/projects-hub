@extends('layouts.app')

@section('title', 'js - 程式練習')

@section('content')

@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>

    <script>
        const targets = [{
                ID: "01_001",
                Name: "  青青草原農場  ",
                Address: "中山路100號",
                Tel: " 0912-345-678 ",
                Email: "  greenfarm@gmail.com ",
                PicURL: " https://example.com/images/farm01.jpg ",
                City: "臺中市",
                Town: "北屯區",
                Url: "https://greenfarm.com.tw"
            },
            {
                ID: "01_002",
                Name: "山腳故事屋",
                Address: "民生街88號",
                Tel: null,
                Email: "storyhouse@gmail.com",
                PicURL: null,
                City: "臺南市",
                Town: "中西區",
                Url: ""
            },
            {
                ID: "01_003",
                Name: "海風咖啡莊園",
                Address: "   ",
                Tel: undefined,
                Email: "  ",
                PicURL: "   ",
                City: "屏東縣",
                Town: "恆春鎮",
                Url: "https://seafarm.com"
            },
            {
                ID: "01_004",
                Name: null,
                Address: "和平路12號",
                Tel: "02-1234-5678",
                Email: null,
                PicURL: "https://example.com/images/farm04.jpg",
                City: "臺北市",
                Town: "大安區",
                Url: " https://farm04.tw "
            },
            {
                ID: "01_005",
                Name: undefined,
                Address: undefined,
                Tel: "",
                Email: "",
                PicURL: "",
                City: "高雄市",
                Town: "左營區",
                Url: undefined
            },
            {
                ID: "01_006",
                Name: "晨光果園",
                Address: "復興路250號",
                Tel: "0935 888 777",
                Email: "sunfarm@yahoo.com.tw ",
                PicURL: "https://example.com/images/farm06.jpg",
                City: "桃園市",
                Town: "中壢區",
                Url: "www.sunfarm.com.tw"
            },
            {
                ID: "01_007",
                Name: "  ",
                Address: "光明街5號",
                Tel: "   ",
                Email: "abc@gmail.com",
                PicURL: undefined,
                City: "新北市",
                Town: "板橋區",
                Url: "   "
            },
            {
                ID: "01_008",
                Name: "稻香休閒農場",
                Address: null,
                Tel: "04-2222-3333",
                Email: " ricefarm@gmail.com",
                PicURL: " https://example.com/images/farm08.jpg ",
                City: "彰化縣",
                Town: null,
                Url: "https://ricefarm.tw"
            },
            {
                ID: "01_009",
                Name: "森林小屋",
                Address: "林森路77號",
                Tel: 912345678,
                Email: "forest@mail.com",
                PicURL: "https://example.com/images/farm09.jpg",
                City: "宜蘭縣",
                Town: "羅東鎮",
                Url: "https://foresthouse.com.tw"
            },
            {
                ID: "01_010",
                Name: "月光花園",
                Address: "花園街66號",
                Tel: "0911-222-333",
                Email: "moon garden@gmail.com",
                PicURL: "https://example.com/images/farm10.jpg",
                City: "南投縣",
                Town: "埔里鎮",
                Url: null
            },
            {
                ID: "01_011",
                Name: "野趣農莊",
                Address: "成功路一段9號",
                Tel: "TEL:0910-000-111",
                Email: "wildfarm@gmail.com",
                PicURL: null,
                City: "花蓮縣",
                Town: "吉安鄉",
                Url: "https://wildfarm.tw"
            },
            {
                ID: "01_012",
                Name: "幸福田田",
                Address: "  中正路300號 ",
                Tel: "08-1234567",
                Email: undefined,
                PicURL: "    https://example.com/images/farm12.jpg    ",
                City: "臺東縣",
                Town: "臺東市",
                Url: "http://happyfarm.tw"
            },
            {
                ID: "01_013",
                Name: "老樹餐坊",
                Address: "",
                Tel: null,
                Email: "oldtree@@gmail.com",
                PicURL: "",
                City: "",
                Town: "",
                Url: ""
            },
            {
                ID: "01_014",
                Name: " 青青草園 ",
                Address: "中華路101號",
                Tel: "0912-000-000#123",
                Email: " green@farm.com ",
                PicURL: "farm14.jpg",
                City: "嘉義縣",
                Town: "民雄鄉",
                Url: "greenfarm.tw"
            },
            {
                ID: "01_015",
                Name: "天空步道農場",
                Address: "文山路1號",
                Tel: "N/A",
                Email: "skyfarm@gmail.com",
                PicURL: null,
                City: "新竹縣",
                Town: "竹北市",
                Url: "https://skyfarm.com.tw"
            }


        ];

        const clearData = targets.map(function(item) { // 預防資料型態不同，例如電話號碼"0987654321", 0987654321
            let rawTel = item['Tel'];
            if (typeof rawTel === 'number') {
                rawTel = '0' + rawTel;
            }

            return {
                ID: normalize(item['ID']),
                Name: normalize(item['Name']),
                Address: normalize(item['Address']),
                Tel: normalize(rawTel), // 預防資料型態不同，例如電話號碼"0987654321", 0987654321
                Email: normalize(item['Email']),
                PicURL: normalize(item['PicURL']),
                City: normalize(item['City']),
                Town: normalize(item['Town']),
                Url: normalize(item['Url'])
            }
        });
        console.log(clearData);

        function normalize(data) {
            const trimmedData = (data ?? '').trim();
            return (trimmedData === '' || trimmedData === 'N/A') ? "未提供資料" : trimmedData; // 特別處理N/A
        };
    </script>
@endpush
