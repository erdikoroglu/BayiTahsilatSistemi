@extends('layouts.app')
@section('title')

@endsection
@section('content')
    <div class="row g-5 g-xl-10 mb-xl-10">

        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 4-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $today_total }}</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->2.2%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Expected Earnings</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-2 pb-4 d-flex align-items-center">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center me-5 pt-2">
                        <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Labels-->
                    <div class="d-flex flex-column content-justify-center w-100">
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 4-->
            <!--begin::Card widget 5-->
            <div class="card card-flush h-md-50 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-danger fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->2.2%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Orders This Month</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end pt-0">
                    <!--begin::Progress-->
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-bolder fs-6 text-dark">1,048 to Goal</span>
                            <span class="fw-bold fs-6 text-gray-400">62%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-light-success rounded">
                            <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 5-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 6-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">2,420</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->2.6%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Average Daily Sales</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end px-0 pb-0">
                    <!--begin::Chart-->
                    <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px; min-height: 80px;"><div id="apexchartsdoltckl6" class="apexcharts-canvas apexchartsdoltckl6 apexcharts-theme-light" style="width: 291px; height: 80px;"><svg id="SvgjsSvg1533" width="291" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1535" class="apexcharts-inner apexcharts-graphical" transform="translate(35.56111111111112, 0)"><defs id="SvgjsDefs1534"><clipPath id="gridRectMaskdoltckl6"><rect id="SvgjsRect1538" width="284" height="89" x="-28.061111111111114" y="-4.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdoltckl6"></clipPath><clipPath id="nonForecastMaskdoltckl6"></clipPath><clipPath id="gridRectMarkerMaskdoltckl6"><rect id="SvgjsRect1539" width="231.87777777777777" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1558" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1559" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1567" class="apexcharts-grid"><g id="SvgjsG1568" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1570" x1="-21.561111111111114" y1="0" x2="249.43888888888887" y2="0" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1571" x1="-21.561111111111114" y1="20" x2="249.43888888888887" y2="20" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1572" x1="-21.561111111111114" y1="40" x2="249.43888888888887" y2="40" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1573" x1="-21.561111111111114" y1="60" x2="249.43888888888887" y2="60" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1574" x1="-21.561111111111114" y1="80" x2="249.43888888888887" y2="80" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1569" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1576" x1="0" y1="80" x2="227.87777777777777" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1575" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1540" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1541" class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0"><path id="SvgjsPath1545" d="M -10.444398148148148 80L -10.444398148148148 56Q -10.444398148148148 50 -4.444398148148148 50L -4.555601851851852 50Q 1.4443981481481476 50 1.4443981481481476 56L 1.4443981481481476 56L 1.4443981481481476 80L 1.4443981481481476 80z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdoltckl6)" pathTo="M -10.444398148148148 80L -10.444398148148148 56Q -10.444398148148148 50 -4.444398148148148 50L -4.555601851851852 50Q 1.4443981481481476 50 1.4443981481481476 56L 1.4443981481481476 56L 1.4443981481481476 80L 1.4443981481481476 80z" pathFrom="M -10.444398148148148 80L -10.444398148148148 80L 1.4443981481481476 80L 1.4443981481481476 80L 1.4443981481481476 80L 1.4443981481481476 80L 1.4443981481481476 80L -10.444398148148148 80" cy="50" cx="5.944398148148148" j="0" val="30" barHeight="30" barWidth="20.888796296296295"></path><path id="SvgjsPath1547" d="M 27.535231481481482 80L 27.535231481481482 26Q 27.535231481481482 20 33.53523148148148 20L 33.42402777777778 20Q 39.42402777777778 20 39.42402777777778 26L 39.42402777777778 26L 39.42402777777778 80L 39.42402777777778 80z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdoltckl6)" pathTo="M 27.535231481481482 80L 27.535231481481482 26Q 27.535231481481482 20 33.53523148148148 20L 33.42402777777778 20Q 39.42402777777778 20 39.42402777777778 26L 39.42402777777778 26L 39.42402777777778 80L 39.42402777777778 80z" pathFrom="M 27.535231481481482 80L 27.535231481481482 80L 39.42402777777778 80L 39.42402777777778 80L 39.42402777777778 80L 39.42402777777778 80L 39.42402777777778 80L 27.535231481481482 80" cy="20" cx="43.92402777777778" j="1" val="60" barHeight="60" barWidth="20.888796296296295"></path><path id="SvgjsPath1549" d="M 65.5148611111111 80L 65.5148611111111 33Q 65.5148611111111 27 71.5148611111111 27L 71.4036574074074 27Q 77.4036574074074 27 77.4036574074074 33L 77.4036574074074 33L 77.4036574074074 80L 77.4036574074074 80z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdoltckl6)" pathTo="M 65.5148611111111 80L 65.5148611111111 33Q 65.5148611111111 27 71.5148611111111 27L 71.4036574074074 27Q 77.4036574074074 27 77.4036574074074 33L 77.4036574074074 33L 77.4036574074074 80L 77.4036574074074 80z" pathFrom="M 65.5148611111111 80L 65.5148611111111 80L 77.4036574074074 80L 77.4036574074074 80L 77.4036574074074 80L 77.4036574074074 80L 77.4036574074074 80L 65.5148611111111 80" cy="27" cx="81.9036574074074" j="2" val="53" barHeight="53" barWidth="20.888796296296295"></path><path id="SvgjsPath1551" d="M 103.49449074074073 80L 103.49449074074073 41Q 103.49449074074073 35 109.49449074074073 35L 109.38328703703702 35Q 115.38328703703702 35 115.38328703703702 41L 115.38328703703702 41L 115.38328703703702 80L 115.38328703703702 80z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdoltckl6)" pathTo="M 103.49449074074073 80L 103.49449074074073 41Q 103.49449074074073 35 109.49449074074073 35L 109.38328703703702 35Q 115.38328703703702 35 115.38328703703702 41L 115.38328703703702 41L 115.38328703703702 80L 115.38328703703702 80z" pathFrom="M 103.49449074074073 80L 103.49449074074073 80L 115.38328703703702 80L 115.38328703703702 80L 115.38328703703702 80L 115.38328703703702 80L 115.38328703703702 80L 103.49449074074073 80" cy="35" cx="119.88328703703702" j="3" val="45" barHeight="45" barWidth="20.888796296296295"></path><path id="SvgjsPath1553" d="M 141.47412037037037 80L 141.47412037037037 26Q 141.47412037037037 20 147.47412037037037 20L 147.36291666666668 20Q 153.36291666666668 20 153.36291666666668 26L 153.36291666666668 26L 153.36291666666668 80L 153.36291666666668 80z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdoltckl6)" pathTo="M 141.47412037037037 80L 141.47412037037037 26Q 141.47412037037037 20 147.47412037037037 20L 147.36291666666668 20Q 153.36291666666668 20 153.36291666666668 26L 153.36291666666668 26L 153.36291666666668 80L 153.36291666666668 80z" pathFrom="M 141.47412037037037 80L 141.47412037037037 80L 153.36291666666668 80L 153.36291666666668 80L 153.36291666666668 80L 153.36291666666668 80L 153.36291666666668 80L 141.47412037037037 80" cy="20" cx="157.86291666666668" j="4" val="60" barHeight="60" barWidth="20.888796296296295"></path><path id="SvgjsPath1555" d="M 179.45375 80L 179.45375 11Q 179.45375 5 185.45375 5L 185.34254629629632 5Q 191.34254629629632 5 191.34254629629632 11L 191.34254629629632 11L 191.34254629629632 80L 191.34254629629632 80z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdoltckl6)" pathTo="M 179.45375 80L 179.45375 11Q 179.45375 5 185.45375 5L 185.34254629629632 5Q 191.34254629629632 5 191.34254629629632 11L 191.34254629629632 11L 191.34254629629632 80L 191.34254629629632 80z" pathFrom="M 179.45375 80L 179.45375 80L 191.34254629629632 80L 191.34254629629632 80L 191.34254629629632 80L 191.34254629629632 80L 191.34254629629632 80L 179.45375 80" cy="5" cx="195.84254629629632" j="5" val="75" barHeight="75" barWidth="20.888796296296295"></path><path id="SvgjsPath1557" d="M 217.43337962962963 80L 217.43337962962963 33Q 217.43337962962963 27 223.43337962962963 27L 223.32217592592593 27Q 229.32217592592593 27 229.32217592592593 33L 229.32217592592593 33L 229.32217592592593 80L 229.32217592592593 80z" fill="rgba(0,158,247,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="9" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdoltckl6)" pathTo="M 217.43337962962963 80L 217.43337962962963 33Q 217.43337962962963 27 223.43337962962963 27L 223.32217592592593 27Q 229.32217592592593 27 229.32217592592593 33L 229.32217592592593 33L 229.32217592592593 80L 229.32217592592593 80z" pathFrom="M 217.43337962962963 80L 217.43337962962963 80L 229.32217592592593 80L 229.32217592592593 80L 229.32217592592593 80L 229.32217592592593 80L 229.32217592592593 80L 217.43337962962963 80" cy="27" cx="233.82217592592593" j="6" val="53" barHeight="53" barWidth="20.888796296296295"></path><g id="SvgjsG1543" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1544" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1546" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1548" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1550" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1552" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1554" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1556" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1542" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1577" x1="-21.561111111111114" y1="0" x2="249.43888888888887" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1578" x1="-21.561111111111114" y1="0" x2="249.43888888888887" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1579" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1580" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1581" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1566" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1536" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 6-->
            <!--begin::Card widget 7-->
            <div class="card card-flush h-md-50 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">6.3k</span>
                        <!--end::Amount-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">New Customers This Month</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column justify-content-end pe-0">
                    <!--begin::Title-->
                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                    <!--end::Title-->
                    <!--begin::Users group-->
                    <div class="symbol-group symbol-hover flex-nowrap">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                            <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                            <img alt="Pic" src="assets/media/avatars/300-2.jpg">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-kt-initialized="1">
                            <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                        </div>
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                        </a>
                    </div>
                    <!--end::Users group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 7-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
            <!--begin::Chart widget 3-->
            <div class="card card-flush overflow-hidden h-md-100">
                <!--begin::Header-->
                <div class="card-header py-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Sales This Months</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                    <!--begin::Statistics-->
                    <div class="px-9 mb-5">
                        <!--begin::Statistics-->
                        <div class="d-flex mb-2">
                            <span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-400">Another $48,346 to Goal</span>
                        <!--end::Description-->
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px; min-height: 315px;"><div id="apexchartsbu4g2029" class="apexcharts-canvas apexchartsbu4g2029 apexcharts-theme-light" style="width: 581.5px; height: 300px;"><svg id="SvgjsSvg1294" width="581.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1296" class="apexcharts-inner apexcharts-graphical" transform="translate(57.4317626953125, 30)"><defs id="SvgjsDefs1295"><clipPath id="gridRectMaskbu4g2029"><rect id="SvgjsRect1301" width="521.0682373046875" height="224.82" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbu4g2029"></clipPath><clipPath id="nonForecastMaskbu4g2029"></clipPath><clipPath id="gridRectMarkerMaskbu4g2029"><rect id="SvgjsRect1302" width="518.0682373046875" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1307" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1308" stop-opacity="0.4" stop-color="rgba(80,205,137,0.4)" offset="0"></stop><stop id="SvgjsStop1309" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop><stop id="SvgjsStop1310" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1313" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1314" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1316" font-family="inherit" x="0" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1317"></tspan><title></title></text><text id="SvgjsText1319" font-family="inherit" x="28.559346516927086" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1320"></tspan><title></title></text><text id="SvgjsText1322" font-family="inherit" x="57.118693033854164" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1323"></tspan><title></title></text><text id="SvgjsText1325" font-family="inherit" x="85.67803955078124" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 86.81936645507812 239.32000732421875)"><tspan id="SvgjsTspan1326">Apr 04</tspan><title>Apr 04</title></text><text id="SvgjsText1328" font-family="inherit" x="114.23738606770833" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1329"></tspan><title></title></text><text id="SvgjsText1331" font-family="inherit" x="142.79673258463544" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1332"></tspan><title></title></text><text id="SvgjsText1334" font-family="inherit" x="171.35607910156253" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 172.42496490478516 239.32000732421875)"><tspan id="SvgjsTspan1335">Apr 07</tspan><title>Apr 07</title></text><text id="SvgjsText1337" font-family="inherit" x="199.91542561848962" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1338"></tspan><title></title></text><text id="SvgjsText1340" font-family="inherit" x="228.4747721354167" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1341"></tspan><title></title></text><text id="SvgjsText1343" font-family="inherit" x="257.03411865234375" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 258.2826843261719 239.32000732421875)"><tspan id="SvgjsTspan1344">Apr 10</tspan><title>Apr 10</title></text><text id="SvgjsText1346" font-family="inherit" x="285.5934651692708" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1347"></tspan><title></title></text><text id="SvgjsText1349" font-family="inherit" x="314.1528116861979" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1350"></tspan><title></title></text><text id="SvgjsText1352" font-family="inherit" x="342.71215820312494" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 343.8904113769531 239.32000732421875)"><tspan id="SvgjsTspan1353">Apr 13</tspan><title>Apr 13</title></text><text id="SvgjsText1355" font-family="inherit" x="371.271504720052" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1356"></tspan><title></title></text><text id="SvgjsText1358" font-family="inherit" x="399.8308512369791" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1359"></tspan><title></title></text><text id="SvgjsText1361" font-family="inherit" x="428.39019775390614" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 429.39019775390625 239.32000732421875)"><tspan id="SvgjsTspan1362">Apr 16</tspan><title>Apr 16</title></text><text id="SvgjsText1364" font-family="inherit" x="456.9495442708332" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1365"></tspan><title></title></text><text id="SvgjsText1367" font-family="inherit" x="485.50889078776027" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1368"></tspan><title></title></text><text id="SvgjsText1370" font-family="inherit" x="514.0682373046874" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1371"></tspan><title></title></text></g></g><g id="SvgjsG1389" class="apexcharts-grid"><g id="SvgjsG1390" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1392" x1="0" y1="0" x2="514.0682373046875" y2="0" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1393" x1="0" y1="55.455" x2="514.0682373046875" y2="55.455" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1394" x1="0" y1="110.91" x2="514.0682373046875" y2="110.91" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1395" x1="0" y1="166.365" x2="514.0682373046875" y2="166.365" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1396" x1="0" y1="221.82" x2="514.0682373046875" y2="221.82" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1391" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1398" x1="0" y1="221.82" x2="514.0682373046875" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1397" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1303" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1304" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1311" d="M 0 221.82L 0 95.06571428571425C 9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C 38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C 67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C 95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C 124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C 152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C 181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C 209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C 238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C 267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C 295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C 324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C 352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C 381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C 409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C 438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C 466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C 495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138C 514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 514.0682373046875 221.82M 514.0682373046875 31.68857142857138z" fill="url(#SvgjsLinearGradient1307)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbu4g2029)" pathTo="M 0 221.82L 0 95.06571428571425C 9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C 38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C 67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C 95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C 124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C 152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C 181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C 209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C 238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C 267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C 295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C 324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C 352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C 381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C 409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C 438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C 466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C 495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138C 514.0682373046875 31.68857142857138 514.0682373046875 31.68857142857138 514.0682373046875 221.82M 514.0682373046875 31.68857142857138z" pathFrom="M -1 380.2628571428571L -1 380.2628571428571L 28.559346516927082 380.2628571428571L 57.118693033854164 380.2628571428571L 85.67803955078125 380.2628571428571L 114.23738606770833 380.2628571428571L 142.7967325846354 380.2628571428571L 171.3560791015625 380.2628571428571L 199.9154256184896 380.2628571428571L 228.47477213541666 380.2628571428571L 257.03411865234375 380.2628571428571L 285.5934651692708 380.2628571428571L 314.15281168619794 380.2628571428571L 342.712158203125 380.2628571428571L 371.27150472005206 380.2628571428571L 399.8308512369792 380.2628571428571L 428.39019775390625 380.2628571428571L 456.9495442708333 380.2628571428571L 485.50889078776044 380.2628571428571L 514.0682373046875 380.2628571428571"></path><path id="SvgjsPath1312" d="M 0 95.06571428571425C 9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C 38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C 67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C 95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C 124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C 152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C 181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C 209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C 238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C 267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C 295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C 324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C 352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C 381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C 409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C 438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C 466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C 495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbu4g2029)" pathTo="M 0 95.06571428571425C 9.995771280924478 95.06571428571425 18.563575236002606 95.06571428571425 28.559346516927082 95.06571428571425C 38.55511779785156 95.06571428571425 47.122921752929685 63.377142857142815 57.118693033854164 63.377142857142815C 67.11446431477864 63.377142857142815 75.68226826985676 63.377142857142815 85.67803955078125 63.377142857142815C 95.67381083170572 63.377142857142815 104.24161478678386 95.06571428571425 114.23738606770833 95.06571428571425C 124.2331573486328 95.06571428571425 132.80096130371092 95.06571428571425 142.7967325846354 95.06571428571425C 152.7925038655599 95.06571428571425 161.360307820638 31.68857142857138 171.3560791015625 31.68857142857138C 181.351850382487 31.68857142857138 189.9196543375651 31.68857142857138 199.9154256184896 31.68857142857138C 209.91119689941405 31.68857142857138 218.4790008544922 63.377142857142815 228.47477213541666 63.377142857142815C 238.47054341634114 63.377142857142815 247.03834737141926 63.377142857142815 257.03411865234375 63.377142857142815C 267.02988993326824 63.377142857142815 275.5976938883463 95.06571428571425 285.5934651692708 95.06571428571425C 295.5892364501953 95.06571428571425 304.15704040527345 95.06571428571425 314.15281168619794 95.06571428571425C 324.1485829671224 95.06571428571425 332.7163869222005 63.377142857142815 342.712158203125 63.377142857142815C 352.7079294840495 63.377142857142815 361.2757334391276 63.377142857142815 371.27150472005206 63.377142857142815C 381.26727600097655 63.377142857142815 389.8350799560547 95.06571428571425 399.8308512369792 95.06571428571425C 409.8266225179037 95.06571428571425 418.39442647298176 95.06571428571425 428.39019775390625 95.06571428571425C 438.38596903483074 95.06571428571425 446.9537729899088 63.377142857142815 456.9495442708333 63.377142857142815C 466.9453155517578 63.377142857142815 475.51311950683595 63.377142857142815 485.50889078776044 63.377142857142815C 495.5046620686849 63.377142857142815 504.072466023763 31.68857142857138 514.0682373046875 31.68857142857138" pathFrom="M -1 380.2628571428571L -1 380.2628571428571L 28.559346516927082 380.2628571428571L 57.118693033854164 380.2628571428571L 85.67803955078125 380.2628571428571L 114.23738606770833 380.2628571428571L 142.7967325846354 380.2628571428571L 171.3560791015625 380.2628571428571L 199.9154256184896 380.2628571428571L 228.47477213541666 380.2628571428571L 257.03411865234375 380.2628571428571L 285.5934651692708 380.2628571428571L 314.15281168619794 380.2628571428571L 342.712158203125 380.2628571428571L 371.27150472005206 380.2628571428571L 399.8308512369792 380.2628571428571L 428.39019775390625 380.2628571428571L 456.9495442708333 380.2628571428571L 485.50889078776044 380.2628571428571L 514.0682373046875 380.2628571428571"></path><g id="SvgjsG1305" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1406" r="0" cx="0" cy="0" class="apexcharts-marker wp6kz1red no-pointer-events" stroke="#50cd89" fill="#50cd89" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1306" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1400" x1="0" y1="0" x2="0" y2="221.82" stroke="#50cd89" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1401" x1="0" y1="0" x2="514.0682373046875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1402" x1="0" y1="0" x2="514.0682373046875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1403" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1404" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1405" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1407" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1408" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1372" class="apexcharts-yaxis" rel="0" transform="translate(27.4317626953125, 0)"><g id="SvgjsG1373" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1375" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1376">$24K</tspan><title>$24K</title></text><text id="SvgjsText1378" font-family="inherit" x="20" y="86.855" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1379">$20.5K</tspan><title>$20.5K</title></text><text id="SvgjsText1381" font-family="inherit" x="20" y="142.31" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1382">$17K</tspan><title>$17K</title></text><text id="SvgjsText1384" font-family="inherit" x="20" y="197.76500000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1385">$13.5K</tspan><title>$13.5K</title></text><text id="SvgjsText1387" font-family="inherit" x="20" y="253.22" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1388">$10K</tspan><title>$10K</title></text></g></g><rect id="SvgjsRect1399" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1297" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 150px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Chart widget 3-->
        </div>
        <!--end::Col-->
    </div>
@endsection
@section('styles')

@endsection
@section('scripts')

@endsection