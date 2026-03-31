const hotelListUrl = document.getElementById("hotelList").dataset.jsonUrl;
const cityCountyDataUrl =
    document.getElementById("cityCountyData").dataset.jsonUrl;
const imageDataUrl = document.getElementById("imageData").dataset.jsonUrl;

let cityTownArray = [];
let clearData = [];

let currentPage = 1;
const itemsPerPage = 8;
let currentFilteredData = [];
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
                Description:
                    normalize(item.Description).substring(0, 50) + "...",
                ImageUrl: normalize(item.Images[0]?.URL),
            };
            return processedItem;
        }).filter((item) => item.ImageUrl !== "沒有資料");
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

    if (selectedTown === "全區") {
        currentFilteredData = clearData.filter(
            (item) => item.City === selectedCity,
        );
    } else {
        currentFilteredData = clearData.filter(
            (item) => item.City === selectedCity && item.Town === selectedTown,
        );
    }
    $("#hotelCardContainer").empty();
    renderPage(currentFilteredData, 1);
});

$(document).on('click', '.page-link', function (e) {
    e.preventDefault();
    const page = parseInt($(this).data('page'));
    if (!isNaN(page) && page > 0) {
        renderPage(currentFilteredData, page);
    }
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

function renderCard(hotels) {
    let strHtml = `
                <div class="col mb-2">
                    <div class="card h-100">
                        <img src="${hotels.ImageUrl}" alt="" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <div class="h4 mt-1 mb-1">
                                ${hotels.HotelName}
                            </div>
                            <div class="mb-2">
                                <div class="text-muted small">地址</div>
                                <div class="fw-semibold">${hotels.City} ${hotels.Town} ${hotels.StreetAddress}</div>
                            </div>
                            <div class="mb-2">
                                <div class="text-muted small">電話</div>
                                <div class="fw-semibold">${hotels.Tel}</div>
                            </div>
                            <div class="mb-2">
                                <div class="text-muted small">簡介</div>
                                <div class="fw-semibold">${hotels.Description}</div>
                            </div>
                        </div>
                    </div>
                </div>`;
    $("#hotelCardContainer").append(strHtml);
}

function renderPage(data, page) {
    // print data type
    console.log(typeof data);
    
    
    currentPage = page;
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pageData = data.slice(start, end);

    $("#hotelCardContainer").empty();
    pageData.forEach((item) => renderCard(item));
    renderPagination(data.length, page);
}

function renderPagination(totalItems, currentPage) {
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    const $pagination = $("#pagination").empty();

    if (totalPages <= 1) return;

    // Previous button
    $pagination.append(`
        <li class="page-item ${currentPage === 1 ? "disabled" : ""}">
            <a href="#" class="page-link" data-page="${currentPage - 1}">Previous</a>
        </li>
    `);

    // Page numbers
    const pages = getPageNumbers(currentPage, totalPages);

    pages.forEach((page) => {
        if (pages === "...") {
            $pagination.append(
                `<li class="page-item disabled"><span class="page-link">...</span></li>`,
            );
        } else {
            $pagination.append(`
                <li class="page-item ${page === currentPage ? 'active' : ''}">
                    <a class="page-link" href="#" data-page="${page}">${page}</a>
                </li>
            `);
        }
    });

    // Next button
    $pagination.append(`
        <li class="page-item ${currentPage === totalPages ? "disabled" : ""}">
            <a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>
        </li>
    `);
}

function getPageNumbers(current, total) {
    if (total <= 7) {
        // 總頁數少，全部顯示
        return Array.from({ length: total }, (_, i) => i + 1);
    }

    const pages = [];

    if (current <= 4) {
        // 靠近開頭：1 2 3 4 5 ... 10
        for (let i = 1; i <= 5; i++) pages.push(i);
        pages.push('...');
        pages.push(total);
    } else if (current >= total - 3) {
        // 靠近結尾：1 ... 6 7 8 9 10
        pages.push(1);
        pages.push('...');
        for (let i = total - 4; i <= total; i++) pages.push(i);
    } else {
        // 中間：1 ... 4 5 6 ... 10
        pages.push(1);
        pages.push('...');
        for (let i = current - 1; i <= current + 1; i++) pages.push(i);
        pages.push('...');
        pages.push(total);
    }

    return pages;
}

