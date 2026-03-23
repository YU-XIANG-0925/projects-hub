const hotelListUrl = document.getElementById("hotelList").dataset.jsonUrl;
const cityCountyDataUrl = document.getElementById("cityCountyData").dataset.jsonUrl;
let cityTownArray = [];
let clearData = [];
// get hotellist
$.ajax({
    url: hotelListUrl,
    method: "GET",
    dataType: "json",
    error: (err) => {
        console.error("無法載入JSON資料:");
        Swal.fire({
            icon: "error",
            title: "載入資料失敗",
            text: "無法載入飯店資料，請稍後再試。",
        });
    },
    success: (data) => {
        clearData = data.Hotels.map((item) => {
            const processedItem = {
                HotelID: normalize(item.HotelID),
                HotelName: normalize(item.HotelName),
                City: normalize(item.PostalAddress?.City),
                Town: normalize(item.PostalAddress?.Town),
                StreetAddress: normalize(item.PostalAddress?.StreetAddress),
                Tel: normalize(item.Telephones[0].Tel),
                Description: normalize(item.Description),
            };
            return processedItem;
        });
        // console.log("處理後的資料:", clearData);
    },
});

//get city country list
$.ajax({
    url: cityCountyDataUrl,
    method: "GET",
    dataType: "json",
    error: (err) => {
        console.error("無法載入JSON資料:");
        Swal.fire({
            icon: "error",
            title: "載入資料失敗",
            text: "無法載入城市資料，請稍後再試。",
        });
    },
    success: (data) => {
        getCityCountryList(data);
    },
});
$("#citySelect").change(() => {
    // #townSelect 的disable => false
    $("#townSelect").prop("disabled", false);
    // 根據選擇的城市，更新鄉鎮區選項
    const selectedCity = $("#citySelect").val();
    const selectedCityData = cityTownArray.find(
        (item) => item.cityName === selectedCity,
    );
    $("#townSelect").empty();
    $("#townSelect").append('<option value="">請選擇鄉鎮區</option>');
    $("#townSelect").append('<option value="全區" selected>全區</option>');
    selectedCityData.areas.forEach((area) => {
        let strHtml = `<option value="${area}">${area}</option>`;
        $("#townSelect").append(strHtml);
    });
    $("#townSelect").trigger("change"); // 觸發鄉鎮區的change事件，更新飯店列表
});
$("#townSelect").change(() => {
    const selectedCity = $("#citySelect").val();
    const selectedTown = $("#townSelect").val();
    let filteredHotels = [];
    if (selectedTown === "全區") {
        filteredHotels = clearData.filter((item) => item.City === selectedCity);
    } else {
        filteredHotels = clearData.filter(
            (item) => item.City === selectedCity && item.Town === selectedTown,
        );
    }
    $("#hotelTableBody").empty();
    filteredHotels.forEach((item) => {
        let strHtml = `
                    <tr>
                        <td>${item.HotelName}</td>
                        <td>${item.City} ${item.Town} ${item.StreetAddress}</td>
                        <td>${item.Tel}</td>
                        <td>${item.Description}</td>
                    </tr>`;
        $("#hotelTableBody").append(strHtml);
    });
});

function normalize(data) {
    const trimmedData = (data ?? "").trim();
    return trimmedData === "" ? "沒有資料" : trimmedData;
}

function getCityCountryList(data) {
    // Implementation for getting city and country list
    // cities: [city1:[town1, town2], city2:[town3, town4]]
    data.forEach((city) => {
        const currentCity = city.CityName;
        const areaList = city.AreaList.map((area) => area.AreaName);

        cityTownArray.push({
            cityName: currentCity,
            areas: areaList,
        });
        let strHtml = `<option value="${currentCity}">${currentCity}</option>`;
        $("#citySelect").append(strHtml);
    });
}

function renderTable(hotels) {}
