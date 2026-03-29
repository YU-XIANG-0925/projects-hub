//公有變數
let flag_user_name = false;
let flag_product_name = false;

const iceData = [
    "多冰(滿杯)",
    "正常冰(約2/3杯)",
    "少冰(約1/2杯)",
    "微冰(少量碎冰)",
    "去冰(無冰塊，但可能留有些許碎冰)",
    "完全去冰(溫熱或室溫，無任何冰塊)",
];
// const foodData = [
//     {
//         name: "牛肉麵",
//         price: 150,
//         description: "經典紅燒湯頭搭配燉煮入味的牛肉與Q彈麵條。"
//     },
//     {
//         name: "小籠包",
//         price: 120,
//         description: "皮薄餡多，一口咬下湯汁四溢的經典手工麵點。",
//     },
//     {
//         name: "滷肉飯",
//         price: 50,
//         description:
//             "肥瘦相間的特製滷肉燥淋在晶瑩剔透的白飯上，香氣撲鼻。",
//     },
//     {
//         name: "宮保雞丁",
//         price: 180,
//         description:
//             "軟嫩雞肉塊與乾辣椒、脆生花生大火快炒，麻辣鮮香。",
//     },
//     {
//         name: "麻婆豆腐",
//         price: 160,
//         description:
//             "滑嫩豆腐裹滿花椒與辣椒交織的濃郁肉末醬汁，十分下飯。",
//     },
//     {
//         name: "蔥爆牛肉",
//         price: 200,
//         description: "青蔥的鮮甜與軟嫩牛肉片完美結合，鑊氣十足。",
//     },
//     {
//         name: "糖醋排骨",
//         price: 190,
//         description: "炸至金黃的豬排骨均勻裹上酸甜醬汁，外酥內嫩。",
//     },
//     {
//         name: "蝦仁炒飯",
//         price: 130,
//         description:
//             "粒粒分明的蛋炒飯搭配彈牙鮮甜的蝦仁，清爽不油膩。",
//     },
//     {
//         name: "酸辣湯",
//         price: 60,
//         description:
//             "豐富配料加上黑醋與白胡椒的酸辣風味，開胃解膩首選。",
//     },
//     {
//         name: "乾煸四季豆",
//         price: 150,
//         description:
//             "四季豆大火煸至邊緣微焦，拌炒肉末與蒜末，鹹香夠味。",
//     },
//     {
//         name: "魚香茄子",
//         price: 160,
//         description:
//             "軟糯的茄子吸附滿滿鹹甜微辣的特調醬汁，口感層次豐富。",
//     },
//     {
//         name: "蒜泥白肉",
//         price: 140,
//         description:
//             "川燙過的去骨五花肉片搭配特調蒜蓉醬油，清爽不膩口。",
//     },
//     {
//         name: "鐵板牛柳",
//         price: 250,
//         description:
//             "濃郁黑胡椒醬汁與鮮嫩牛柳在鐵板上滋滋作響，香氣四溢。",
//     },
//     {
//         name: "紅油抄手",
//         price: 80,
//         description:
//             "皮薄餡滿的鮮肉餛飩拌入特製花椒紅油，麻辣過癮。",
//     },
//     {
//         name: "皮蛋豆腐",
//         price: 40,
//         description:
//             "清涼滑嫩的冷豆腐搭配皮蛋與柴魚片，經典台式涼菜。",
//     },
//     {
//         name: "蛤蜊湯",
//         price: 70,
//         description: "新鮮吐沙蛤蜊加上薑絲提味，湯頭鮮甜清澈。",
//     },
//     {
//         name: "榨菜肉絲麵",
//         price: 90,
//         description: "爽脆的榨菜絲與軟嫩肉絲交織出清爽的湯麵風味。",
//     },
//     {
//         name: "三杯雞",
//         price: 220,
//         description:
//             "醬油、米酒、黑麻油與新鮮九層塔砂鍋燉煮的經典美味。",
//     },
//     {
//         name: "炒高麗菜",
//         price: 100,
//         description:
//             "蒜末爆香後大火快炒，完美保留高麗菜的清脆與清甜。",
//     },
//     {
//         name: "豆干肉絲",
//         price: 140,
//         description:
//             "軟嫩豆干絲與豬肉絲大火拌炒，簡單卻極具風味的家常菜。",
//     },
// ];

// 主程式
$(function () {
    // 1. 表單樣式(form)
    $("#myForm").submit(function (e) {
        if (flag_user_name == true && flag_product_name == true) {
            e.preventDefault();
            console.log("form觸發!");
            console.log($("#user_name").val());
            console.log($("#product_name").val());
            console.log($("#theIce").val());
        } else {
            e.preventDefault();
            alert("欄位有錯誤, 請修正!");
        }
    });

    $("#user_name").blur(function () {
        console.log($(this).val().length);
        if ($(this).val().length > 1 && $(this).val().length < 5) {
            //符合規定
            $(this).removeClass("is-invalid").addClass("is-valid");
            flag_user_name = true;
        } else {
            //不符合規定
            $(this).removeClass("is-valid").addClass("is-invalid");
            flag_user_name = false;
        }
    });

    $("#product_name").blur(function () {
        if ($(this).val().length > 1 && $(this).val().length < 6) {
            $(this).removeClass("is-invalid").addClass("is-valid");
            flag_product_name = true;
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
            flag_product_name = false;
        }
    });

    //數值與焦點同時改變才會觸發
    $("#product_name").change(function () {
        console.log($("#product_name").val());
    });

    $("#theIce").empty();
    $("#theIce").append(`<option
                            value=""
                            class="text-center"
                            disabled=""
                            selected=""
                        >
                            ***請選擇冰塊***
                        </option>`);

    iceData.forEach(function (item) {
        let strHtml = `<option value="${item}">${item}</option>`;
        $("#theIce").append(strHtml);
    });
    $("#theIce").change(function () {
        console.log($(this).val());
    });

    $("#num").on("input", function () {
        $("#num_text").text($(this).val());
    });
});
