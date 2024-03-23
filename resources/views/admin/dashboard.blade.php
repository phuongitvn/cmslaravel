<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                            <p class="mb-4">You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in your profile.</p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="/themes/admin/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/themes/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Profit</span>
                            <h3 class="card-title mb-2">$12,628</h3>
                            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/themes/admin/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Sales</span>
                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexchartslu9il6aqi" class="apexcharts-canvas apexchartslu9il6aqi apexcharts-theme-light" style="width: 480px; height: 300px;"><svg id="SvgjsSvg1854" width="480" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="480" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span></div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span></div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1856" class="apexcharts-inner apexcharts-graphical" transform="translate(53.7890625, 52)">
                                        <defs id="SvgjsDefs1855">
                                            <linearGradient id="SvgjsLinearGradient1860" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1861" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1862" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1863" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMasklu9il6aqi">
                                                <rect id="SvgjsRect1865" width="416.2109375" height="222.73" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMasklu9il6aqi"></clipPath>
                                            <clipPath id="nonForecastMasklu9il6aqi"></clipPath>
                                            <clipPath id="gridRectMarkerMasklu9il6aqi">
                                                <rect id="SvgjsRect1866" width="410.2109375" height="220.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1864" width="20.310546875" height="216.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1860)" class="apexcharts-xcrosshairs" y2="216.73" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1886" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1887" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1889" font-family="Helvetica, Arial, sans-serif" x="29.015066964285715" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1890">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1892" font-family="Helvetica, Arial, sans-serif" x="87.04520089285714" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1893">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1895" font-family="Helvetica, Arial, sans-serif" x="145.07533482142856" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1896">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1898" font-family="Helvetica, Arial, sans-serif" x="203.10546875" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1899">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1901" font-family="Helvetica, Arial, sans-serif" x="261.13560267857144" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1902">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1904" font-family="Helvetica, Arial, sans-serif" x="319.1657366071429" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1905">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1907" font-family="Helvetica, Arial, sans-serif" x="377.19587053571433" y="245.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1908">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1923" class="apexcharts-grid">
                                            <g id="SvgjsG1924" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1926" x1="0" y1="0" x2="406.2109375" y2="0" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1927" x1="0" y1="43.346" x2="406.2109375" y2="43.346" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1928" x1="0" y1="86.692" x2="406.2109375" y2="86.692" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1929" x1="0" y1="130.03799999999998" x2="406.2109375" y2="130.03799999999998" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1930" x1="0" y1="173.384" x2="406.2109375" y2="173.384" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1931" x1="0" y1="216.73" x2="406.2109375" y2="216.73" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1925" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1933" x1="0" y1="216.73" x2="406.2109375" y2="216.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1932" x1="0" y1="1" x2="0" y2="216.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1867" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1868" class="apexcharts-series" seriesName="2021" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1870" d="M 18.859793526785715 120.03800000000001L 18.859793526785715 62.01520000000002Q 18.859793526785715 52.01520000000002 28.859793526785715 52.01520000000002L 23.170340401785715 52.01520000000002Q 33.170340401785715 52.01520000000002 33.170340401785715 62.01520000000002L 33.170340401785715 62.01520000000002L 33.170340401785715 120.03800000000001Q 33.170340401785715 130.038 23.170340401785715 130.038L 28.859793526785715 130.038Q 18.859793526785715 130.038 18.859793526785715 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 18.859793526785715 120.03800000000001L 18.859793526785715 62.01520000000002Q 18.859793526785715 52.01520000000002 28.859793526785715 52.01520000000002L 23.170340401785715 52.01520000000002Q 33.170340401785715 52.01520000000002 33.170340401785715 62.01520000000002L 33.170340401785715 62.01520000000002L 33.170340401785715 120.03800000000001Q 33.170340401785715 130.038 23.170340401785715 130.038L 28.859793526785715 130.038Q 18.859793526785715 130.038 18.859793526785715 120.03800000000001z" pathFrom="M 18.859793526785715 120.03800000000001L 18.859793526785715 120.03800000000001L 33.170340401785715 120.03800000000001L 33.170340401785715 120.03800000000001L 33.170340401785715 120.03800000000001L 33.170340401785715 120.03800000000001L 33.170340401785715 120.03800000000001L 18.859793526785715 120.03800000000001" cy="52.01520000000002" cx="73.88992745535714" j="0" val="18" barHeight="78.02279999999999" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1871" d="M 76.88992745535714 120.03800000000001L 76.88992745535714 109.69580000000002Q 76.88992745535714 99.69580000000002 86.88992745535714 99.69580000000002L 81.20047433035714 99.69580000000002Q 91.20047433035714 99.69580000000002 91.20047433035714 109.69580000000002L 91.20047433035714 109.69580000000002L 91.20047433035714 120.03800000000001Q 91.20047433035714 130.038 81.20047433035714 130.038L 86.88992745535714 130.038Q 76.88992745535714 130.038 76.88992745535714 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 76.88992745535714 120.03800000000001L 76.88992745535714 109.69580000000002Q 76.88992745535714 99.69580000000002 86.88992745535714 99.69580000000002L 81.20047433035714 99.69580000000002Q 91.20047433035714 99.69580000000002 91.20047433035714 109.69580000000002L 91.20047433035714 109.69580000000002L 91.20047433035714 120.03800000000001Q 91.20047433035714 130.038 81.20047433035714 130.038L 86.88992745535714 130.038Q 76.88992745535714 130.038 76.88992745535714 120.03800000000001z" pathFrom="M 76.88992745535714 120.03800000000001L 76.88992745535714 120.03800000000001L 91.20047433035714 120.03800000000001L 91.20047433035714 120.03800000000001L 91.20047433035714 120.03800000000001L 91.20047433035714 120.03800000000001L 91.20047433035714 120.03800000000001L 76.88992745535714 120.03800000000001" cy="99.69580000000002" cx="131.92006138392856" j="1" val="7" barHeight="30.3422" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1872" d="M 134.92006138392856 120.03800000000001L 134.92006138392856 75.01900000000002Q 134.92006138392856 65.01900000000002 144.92006138392856 65.01900000000002L 139.23060825892856 65.01900000000002Q 149.23060825892856 65.01900000000002 149.23060825892856 75.01900000000002L 149.23060825892856 75.01900000000002L 149.23060825892856 120.03800000000001Q 149.23060825892856 130.038 139.23060825892856 130.038L 144.92006138392856 130.038Q 134.92006138392856 130.038 134.92006138392856 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 134.92006138392856 120.03800000000001L 134.92006138392856 75.01900000000002Q 134.92006138392856 65.01900000000002 144.92006138392856 65.01900000000002L 139.23060825892856 65.01900000000002Q 149.23060825892856 65.01900000000002 149.23060825892856 75.01900000000002L 149.23060825892856 75.01900000000002L 149.23060825892856 120.03800000000001Q 149.23060825892856 130.038 139.23060825892856 130.038L 144.92006138392856 130.038Q 134.92006138392856 130.038 134.92006138392856 120.03800000000001z" pathFrom="M 134.92006138392856 120.03800000000001L 134.92006138392856 120.03800000000001L 149.23060825892856 120.03800000000001L 149.23060825892856 120.03800000000001L 149.23060825892856 120.03800000000001L 149.23060825892856 120.03800000000001L 149.23060825892856 120.03800000000001L 134.92006138392856 120.03800000000001" cy="65.01900000000002" cx="189.9501953125" j="2" val="15" barHeight="65.01899999999999" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1873" d="M 192.9501953125 120.03800000000001L 192.9501953125 14.334600000000023Q 192.9501953125 4.334600000000023 202.9501953125 4.334600000000023L 197.2607421875 4.334600000000023Q 207.2607421875 4.334600000000023 207.2607421875 14.334600000000023L 207.2607421875 14.334600000000023L 207.2607421875 120.03800000000001Q 207.2607421875 130.038 197.2607421875 130.038L 202.9501953125 130.038Q 192.9501953125 130.038 192.9501953125 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 192.9501953125 120.03800000000001L 192.9501953125 14.334600000000023Q 192.9501953125 4.334600000000023 202.9501953125 4.334600000000023L 197.2607421875 4.334600000000023Q 207.2607421875 4.334600000000023 207.2607421875 14.334600000000023L 207.2607421875 14.334600000000023L 207.2607421875 120.03800000000001Q 207.2607421875 130.038 197.2607421875 130.038L 202.9501953125 130.038Q 192.9501953125 130.038 192.9501953125 120.03800000000001z" pathFrom="M 192.9501953125 120.03800000000001L 192.9501953125 120.03800000000001L 207.2607421875 120.03800000000001L 207.2607421875 120.03800000000001L 207.2607421875 120.03800000000001L 207.2607421875 120.03800000000001L 207.2607421875 120.03800000000001L 192.9501953125 120.03800000000001" cy="4.334600000000023" cx="247.98032924107144" j="3" val="29" barHeight="125.70339999999999" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1874" d="M 250.98032924107144 120.03800000000001L 250.98032924107144 62.01520000000002Q 250.98032924107144 52.01520000000002 260.98032924107144 52.01520000000002L 255.29087611607144 52.01520000000002Q 265.29087611607144 52.01520000000002 265.29087611607144 62.01520000000002L 265.29087611607144 62.01520000000002L 265.29087611607144 120.03800000000001Q 265.29087611607144 130.038 255.29087611607144 130.038L 260.98032924107144 130.038Q 250.98032924107144 130.038 250.98032924107144 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 250.98032924107144 120.03800000000001L 250.98032924107144 62.01520000000002Q 250.98032924107144 52.01520000000002 260.98032924107144 52.01520000000002L 255.29087611607144 52.01520000000002Q 265.29087611607144 52.01520000000002 265.29087611607144 62.01520000000002L 265.29087611607144 62.01520000000002L 265.29087611607144 120.03800000000001Q 265.29087611607144 130.038 255.29087611607144 130.038L 260.98032924107144 130.038Q 250.98032924107144 130.038 250.98032924107144 120.03800000000001z" pathFrom="M 250.98032924107144 120.03800000000001L 250.98032924107144 120.03800000000001L 265.29087611607144 120.03800000000001L 265.29087611607144 120.03800000000001L 265.29087611607144 120.03800000000001L 265.29087611607144 120.03800000000001L 265.29087611607144 120.03800000000001L 250.98032924107144 120.03800000000001" cy="52.01520000000002" cx="306.0104631696429" j="4" val="18" barHeight="78.02279999999999" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1875" d="M 309.0104631696429 120.03800000000001L 309.0104631696429 88.02280000000002Q 309.0104631696429 78.02280000000002 319.0104631696429 78.02280000000002L 313.3210100446429 78.02280000000002Q 323.3210100446429 78.02280000000002 323.3210100446429 88.02280000000002L 323.3210100446429 88.02280000000002L 323.3210100446429 120.03800000000001Q 323.3210100446429 130.038 313.3210100446429 130.038L 319.0104631696429 130.038Q 309.0104631696429 130.038 309.0104631696429 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 309.0104631696429 120.03800000000001L 309.0104631696429 88.02280000000002Q 309.0104631696429 78.02280000000002 319.0104631696429 78.02280000000002L 313.3210100446429 78.02280000000002Q 323.3210100446429 78.02280000000002 323.3210100446429 88.02280000000002L 323.3210100446429 88.02280000000002L 323.3210100446429 120.03800000000001Q 323.3210100446429 130.038 313.3210100446429 130.038L 319.0104631696429 130.038Q 309.0104631696429 130.038 309.0104631696429 120.03800000000001z" pathFrom="M 309.0104631696429 120.03800000000001L 309.0104631696429 120.03800000000001L 323.3210100446429 120.03800000000001L 323.3210100446429 120.03800000000001L 323.3210100446429 120.03800000000001L 323.3210100446429 120.03800000000001L 323.3210100446429 120.03800000000001L 309.0104631696429 120.03800000000001" cy="78.02280000000002" cx="364.04059709821433" j="5" val="12" barHeight="52.01519999999999" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1876" d="M 367.04059709821433 120.03800000000001L 367.04059709821433 101.02660000000002Q 367.04059709821433 91.02660000000002 377.04059709821433 91.02660000000002L 371.35114397321433 91.02660000000002Q 381.35114397321433 91.02660000000002 381.35114397321433 101.02660000000002L 381.35114397321433 101.02660000000002L 381.35114397321433 120.03800000000001Q 381.35114397321433 130.038 371.35114397321433 130.038L 377.04059709821433 130.038Q 367.04059709821433 130.038 367.04059709821433 120.03800000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 367.04059709821433 120.03800000000001L 367.04059709821433 101.02660000000002Q 367.04059709821433 91.02660000000002 377.04059709821433 91.02660000000002L 371.35114397321433 91.02660000000002Q 381.35114397321433 91.02660000000002 381.35114397321433 101.02660000000002L 381.35114397321433 101.02660000000002L 381.35114397321433 120.03800000000001Q 381.35114397321433 130.038 371.35114397321433 130.038L 377.04059709821433 130.038Q 367.04059709821433 130.038 367.04059709821433 120.03800000000001z" pathFrom="M 367.04059709821433 120.03800000000001L 367.04059709821433 120.03800000000001L 381.35114397321433 120.03800000000001L 381.35114397321433 120.03800000000001L 381.35114397321433 120.03800000000001L 381.35114397321433 120.03800000000001L 381.35114397321433 120.03800000000001L 367.04059709821433 120.03800000000001" cy="91.02660000000002" cx="422.0707310267858" j="6" val="9" barHeight="39.011399999999995" barWidth="20.310546875"></path>
                                            </g>
                                            <g id="SvgjsG1877" class="apexcharts-series" seriesName="2020" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1879" d="M 18.859793526785715 150.038L 18.859793526785715 186.3878Q 18.859793526785715 196.3878 28.859793526785715 196.3878L 23.170340401785715 196.3878Q 33.170340401785715 196.3878 33.170340401785715 186.3878L 33.170340401785715 186.3878L 33.170340401785715 150.038Q 33.170340401785715 140.038 23.170340401785715 140.038L 28.859793526785715 140.038Q 18.859793526785715 140.038 18.859793526785715 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 18.859793526785715 150.038L 18.859793526785715 186.3878Q 18.859793526785715 196.3878 28.859793526785715 196.3878L 23.170340401785715 196.3878Q 33.170340401785715 196.3878 33.170340401785715 186.3878L 33.170340401785715 186.3878L 33.170340401785715 150.038Q 33.170340401785715 140.038 23.170340401785715 140.038L 28.859793526785715 140.038Q 18.859793526785715 140.038 18.859793526785715 150.038z" pathFrom="M 18.859793526785715 150.038L 18.859793526785715 150.038L 33.170340401785715 150.038L 33.170340401785715 150.038L 33.170340401785715 150.038L 33.170340401785715 150.038L 33.170340401785715 150.038L 18.859793526785715 150.038" cy="176.3878" cx="73.88992745535714" j="0" val="-13" barHeight="-56.349799999999995" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1880" d="M 76.88992745535714 150.038L 76.88992745535714 208.0608Q 76.88992745535714 218.0608 86.88992745535714 218.0608L 81.20047433035714 218.0608Q 91.20047433035714 218.0608 91.20047433035714 208.0608L 91.20047433035714 208.0608L 91.20047433035714 150.038Q 91.20047433035714 140.038 81.20047433035714 140.038L 86.88992745535714 140.038Q 76.88992745535714 140.038 76.88992745535714 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 76.88992745535714 150.038L 76.88992745535714 208.0608Q 76.88992745535714 218.0608 86.88992745535714 218.0608L 81.20047433035714 218.0608Q 91.20047433035714 218.0608 91.20047433035714 208.0608L 91.20047433035714 208.0608L 91.20047433035714 150.038Q 91.20047433035714 140.038 81.20047433035714 140.038L 86.88992745535714 140.038Q 76.88992745535714 140.038 76.88992745535714 150.038z" pathFrom="M 76.88992745535714 150.038L 76.88992745535714 150.038L 91.20047433035714 150.038L 91.20047433035714 150.038L 91.20047433035714 150.038L 91.20047433035714 150.038L 91.20047433035714 150.038L 76.88992745535714 150.038" cy="198.0608" cx="131.92006138392856" j="1" val="-18" barHeight="-78.02279999999999" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1881" d="M 134.92006138392856 150.038L 134.92006138392856 169.0494Q 134.92006138392856 179.0494 144.92006138392856 179.0494L 139.23060825892856 179.0494Q 149.23060825892856 179.0494 149.23060825892856 169.0494L 149.23060825892856 169.0494L 149.23060825892856 150.038Q 149.23060825892856 140.038 139.23060825892856 140.038L 144.92006138392856 140.038Q 134.92006138392856 140.038 134.92006138392856 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 134.92006138392856 150.038L 134.92006138392856 169.0494Q 134.92006138392856 179.0494 144.92006138392856 179.0494L 139.23060825892856 179.0494Q 149.23060825892856 179.0494 149.23060825892856 169.0494L 149.23060825892856 169.0494L 149.23060825892856 150.038Q 149.23060825892856 140.038 139.23060825892856 140.038L 144.92006138392856 140.038Q 134.92006138392856 140.038 134.92006138392856 150.038z" pathFrom="M 134.92006138392856 150.038L 134.92006138392856 150.038L 149.23060825892856 150.038L 149.23060825892856 150.038L 149.23060825892856 150.038L 149.23060825892856 150.038L 149.23060825892856 150.038L 134.92006138392856 150.038" cy="159.0494" cx="189.9501953125" j="2" val="-9" barHeight="-39.011399999999995" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1882" d="M 192.9501953125 150.038L 192.9501953125 190.7224Q 192.9501953125 200.7224 202.9501953125 200.7224L 197.2607421875 200.7224Q 207.2607421875 200.7224 207.2607421875 190.7224L 207.2607421875 190.7224L 207.2607421875 150.038Q 207.2607421875 140.038 197.2607421875 140.038L 202.9501953125 140.038Q 192.9501953125 140.038 192.9501953125 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 192.9501953125 150.038L 192.9501953125 190.7224Q 192.9501953125 200.7224 202.9501953125 200.7224L 197.2607421875 200.7224Q 207.2607421875 200.7224 207.2607421875 190.7224L 207.2607421875 190.7224L 207.2607421875 150.038Q 207.2607421875 140.038 197.2607421875 140.038L 202.9501953125 140.038Q 192.9501953125 140.038 192.9501953125 150.038z" pathFrom="M 192.9501953125 150.038L 192.9501953125 150.038L 207.2607421875 150.038L 207.2607421875 150.038L 207.2607421875 150.038L 207.2607421875 150.038L 207.2607421875 150.038L 192.9501953125 150.038" cy="180.7224" cx="247.98032924107144" j="3" val="-14" barHeight="-60.6844" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1883" d="M 250.98032924107144 150.038L 250.98032924107144 151.711Q 250.98032924107144 161.711 260.98032924107144 161.711L 255.29087611607144 161.711Q 265.29087611607144 161.711 265.29087611607144 151.711L 265.29087611607144 151.711L 265.29087611607144 150.038Q 265.29087611607144 140.038 255.29087611607144 140.038L 260.98032924107144 140.038Q 250.98032924107144 140.038 250.98032924107144 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 250.98032924107144 150.038L 250.98032924107144 151.711Q 250.98032924107144 161.711 260.98032924107144 161.711L 255.29087611607144 161.711Q 265.29087611607144 161.711 265.29087611607144 151.711L 265.29087611607144 151.711L 265.29087611607144 150.038Q 265.29087611607144 140.038 255.29087611607144 140.038L 260.98032924107144 140.038Q 250.98032924107144 140.038 250.98032924107144 150.038z" pathFrom="M 250.98032924107144 150.038L 250.98032924107144 150.038L 265.29087611607144 150.038L 265.29087611607144 150.038L 265.29087611607144 150.038L 265.29087611607144 150.038L 265.29087611607144 150.038L 250.98032924107144 150.038" cy="141.711" cx="306.0104631696429" j="4" val="-5" barHeight="-21.673" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1884" d="M 309.0104631696429 150.038L 309.0104631696429 203.7262Q 309.0104631696429 213.7262 319.0104631696429 213.7262L 313.3210100446429 213.7262Q 323.3210100446429 213.7262 323.3210100446429 203.7262L 323.3210100446429 203.7262L 323.3210100446429 150.038Q 323.3210100446429 140.038 313.3210100446429 140.038L 319.0104631696429 140.038Q 309.0104631696429 140.038 309.0104631696429 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 309.0104631696429 150.038L 309.0104631696429 203.7262Q 309.0104631696429 213.7262 319.0104631696429 213.7262L 313.3210100446429 213.7262Q 323.3210100446429 213.7262 323.3210100446429 203.7262L 323.3210100446429 203.7262L 323.3210100446429 150.038Q 323.3210100446429 140.038 313.3210100446429 140.038L 319.0104631696429 140.038Q 309.0104631696429 140.038 309.0104631696429 150.038z" pathFrom="M 309.0104631696429 150.038L 309.0104631696429 150.038L 323.3210100446429 150.038L 323.3210100446429 150.038L 323.3210100446429 150.038L 323.3210100446429 150.038L 323.3210100446429 150.038L 309.0104631696429 150.038" cy="193.7262" cx="364.04059709821433" j="5" val="-17" barHeight="-73.6882" barWidth="20.310546875"></path>
                                                <path id="SvgjsPath1885" d="M 367.04059709821433 150.038L 367.04059709821433 195.05700000000002Q 367.04059709821433 205.05700000000002 377.04059709821433 205.05700000000002L 371.35114397321433 205.05700000000002Q 381.35114397321433 205.05700000000002 381.35114397321433 195.05700000000002L 381.35114397321433 195.05700000000002L 381.35114397321433 150.038Q 381.35114397321433 140.038 371.35114397321433 140.038L 377.04059709821433 140.038Q 367.04059709821433 140.038 367.04059709821433 150.038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklu9il6aqi)" pathTo="M 367.04059709821433 150.038L 367.04059709821433 195.05700000000002Q 367.04059709821433 205.05700000000002 377.04059709821433 205.05700000000002L 371.35114397321433 205.05700000000002Q 381.35114397321433 205.05700000000002 381.35114397321433 195.05700000000002L 381.35114397321433 195.05700000000002L 381.35114397321433 150.038Q 381.35114397321433 140.038 371.35114397321433 140.038L 377.04059709821433 140.038Q 367.04059709821433 140.038 367.04059709821433 150.038z" pathFrom="M 367.04059709821433 150.038L 367.04059709821433 150.038L 381.35114397321433 150.038L 381.35114397321433 150.038L 381.35114397321433 150.038L 381.35114397321433 150.038L 381.35114397321433 150.038L 367.04059709821433 150.038" cy="185.05700000000002" cx="422.0707310267858" j="6" val="-15" barHeight="-65.01899999999999" barWidth="20.310546875"></path>
                                            </g>
                                            <g id="SvgjsG1869" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1878" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1934" x1="0" y1="0" x2="406.2109375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1935" x1="0" y1="0" x2="406.2109375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1936" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1937" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1938" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1909" class="apexcharts-yaxis" rel="0" transform="translate(15.7890625, 0)">
                                        <g id="SvgjsG1910" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1911" font-family="Helvetica, Arial, sans-serif" x="20" y="53.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1912">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText1913" font-family="Helvetica, Arial, sans-serif" x="20" y="96.846" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1914">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText1915" font-family="Helvetica, Arial, sans-serif" x="20" y="140.192" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1916">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText1917" font-family="Helvetica, Arial, sans-serif" x="20" y="183.538" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1918">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText1919" font-family="Helvetica, Arial, sans-serif" x="20" y="226.88400000000001" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1920">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText1921" font-family="Helvetica, Arial, sans-serif" x="20" y="270.23" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1922">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1857" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 497px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId" style="">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 154.875px;">
                            <div id="apexchartsgel17i0q" class="apexcharts-canvas apexchartsgel17i0q apexcharts-theme-light" style="width: 248px; height: 154.875px;"><svg id="SvgjsSvg1939" width="248" height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG1941" class="apexcharts-inner apexcharts-graphical" transform="translate(17, -25)">
                                        <defs id="SvgjsDefs1940">
                                            <clipPath id="gridRectMaskgel17i0q">
                                                <rect id="SvgjsRect1943" width="222" height="285" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskgel17i0q"></clipPath>
                                            <clipPath id="nonForecastMaskgel17i0q"></clipPath>
                                            <clipPath id="gridRectMarkerMaskgel17i0q">
                                                <rect id="SvgjsRect1944" width="220" height="287" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1949" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1950" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1951" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1952" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1960" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1961" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1962" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1963" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG1945" class="apexcharts-radialbar">
                                            <g id="SvgjsG1946">
                                                <g id="SvgjsG1947" class="apexcharts-tracks">
                                                    <g id="SvgjsG1948" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                        <path id="apexcharts-radialbarTrack-0" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1954">
                                                    <g id="SvgjsG1959" class="apexcharts-series apexcharts-radial-series" seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1964" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1960)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="5" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="78" index="0" j="0" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path>
                                                    </g>
                                                    <circle id="SvgjsCircle1955" r="54.65121951219512" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                    <g id="SvgjsG1956" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1957" font-family="Public Sans" x="108" y="123" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Growth</text><text id="SvgjsText1958" font-family="Public Sans" x="108" y="99" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1965" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1966" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1942" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 249px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/themes/admin/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block mb-1">Payments</span>
                            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                            <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/themes/admin/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-medium d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">$14,857</h3>
                            <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
    <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3" style="position: relative;">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-medium"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                        <h3 class="mb-0">$84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart" style="min-height: 80px;">
                                    <div id="apexcharts15yk33du" class="apexcharts-canvas apexcharts15yk33du apexcharts-theme-light" style="width: 173px; height: 80px;"><svg id="SvgjsSvg1968" width="173" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1970" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1969">
                                                    <clipPath id="gridRectMask15yk33du">
                                                        <rect id="SvgjsRect1975" width="174" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask15yk33du"></clipPath>
                                                    <clipPath id="nonForecastMask15yk33du"></clipPath>
                                                    <clipPath id="gridRectMarkerMask15yk33du">
                                                        <rect id="SvgjsRect1976" width="169" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1982" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1983" flood-color="#ffab00" flood-opacity="0.15" result="SvgjsFeFlood1983Out" in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1984" in="SvgjsFeFlood1983Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1984Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1985" dx="5" dy="10" result="SvgjsFeOffset1985Out" in="SvgjsFeComposite1984Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1986" stdDeviation="3 " result="SvgjsFeGaussianBlur1986Out" in="SvgjsFeOffset1985Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1987" result="SvgjsFeMerge1987Out" in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1988" in="SvgjsFeGaussianBlur1986Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1989" in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1990" in="SourceGraphic" in2="SvgjsFeMerge1987Out" mode="normal" result="SvgjsFeBlend1990Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1974" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1991" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1992" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG2000" class="apexcharts-grid">
                                                    <g id="SvgjsG2001" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                        <line id="SvgjsLine2003" x1="0" y1="0" x2="165" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2004" x1="0" y1="20" x2="165" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2005" x1="0" y1="40" x2="165" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2006" x1="0" y1="60" x2="165" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2007" x1="0" y1="80" x2="165" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2002" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                    <line id="SvgjsLine2009" x1="0" y1="80" x2="165" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2008" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1977" class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1978" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1981" d="M 0 76C 11.549999999999999 76 21.450000000000003 12 33 12C 44.55 12 54.45 62 66 62C 77.55 62 87.45 22 99 22C 110.55 22 120.45 38 132 38C 143.55 38 153.45 6 165 6" fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask15yk33du)" filter="url(#SvgjsFilter1982)" pathTo="M 0 76C 11.549999999999999 76 21.450000000000003 12 33 12C 44.55 12 54.45 62 66 62C 77.55 62 87.45 22 99 22C 110.55 22 120.45 38 132 38C 143.55 38 153.45 6 165 6" pathFrom="M -1 120L -1 120L 33 120L 66 120L 99 120L 132 120L 165 120"></path>
                                                        <g id="SvgjsG1979" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2015" r="0" cx="0" cy="0" class="apexcharts-marker who44jxvh no-pointer-events" stroke="#ffffff" fill="#ffab00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1980" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2010" x1="0" y1="0" x2="165" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2011" x1="0" y1="0" x2="165" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2012" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2013" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2014" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1973" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1999" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1971" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span>
                                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 312px; height: 117px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">42.82k Total Sales</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">8,258</h2>
                            <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart" style="min-height: 137.55px;">
                            <div id="apexcharts864wi7el" class="apexcharts-canvas apexcharts864wi7el apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2016" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG2018" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)">
                                        <defs id="SvgjsDefs2017">
                                            <clipPath id="gridRectMask864wi7el">
                                                <rect id="SvgjsRect2020" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask864wi7el"></clipPath>
                                            <clipPath id="nonForecastMask864wi7el"></clipPath>
                                            <clipPath id="gridRectMarkerMask864wi7el">
                                                <rect id="SvgjsRect2021" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG2022" class="apexcharts-pie">
                                            <g id="SvgjsG2023" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle2024" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle>
                                                <g id="SvgjsG2025" class="apexcharts-slices">
                                                    <g id="SvgjsG2026" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2027" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG2028" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath2029" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG2030" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath2031" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG2032" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath2033" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2034" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2035" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text id="SvgjsText2036" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                        </g>
                                        <line id="SvgjsLine2037" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2038" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG2019" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 312px; height: 139px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Electronic</h6>
                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">82.5k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Fashion</h6>
                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">23.8k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Decor</h6>
                                    <small class="text-muted">Fine Art, Dining</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">849k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Sports</h6>
                                    <small class="text-muted">Football, Cricket Kit</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">99</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link" role="tab" aria-selected="false" tabindex="-1">Expenses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link" role="tab" aria-selected="false" tabindex="-1">Profit</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel" style="position: relative;">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="/themes/admin/assets/img/icons/unicons/wallet.png" alt="User">
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Balance</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$459.10</h6>
                                        <small class="text-success fw-medium">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart" style="min-height: 215px;">
                                <div id="apexcharts0hanvuty" class="apexcharts-canvas apexcharts0hanvuty apexcharts-theme-light" style="width: 359px; height: 215px;"><svg id="SvgjsSvg2039" width="359" height="215" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2041" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)">
                                            <defs id="SvgjsDefs2040">
                                                <clipPath id="gridRectMask0hanvuty">
                                                    <rect id="SvgjsRect2046" width="347.6875" height="175.73" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask0hanvuty"></clipPath>
                                                <clipPath id="nonForecastMask0hanvuty"></clipPath>
                                                <clipPath id="gridRectMarkerMask0hanvuty">
                                                    <rect id="SvgjsRect2047" width="369.6875" height="201.73" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2067" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop2068" stop-opacity="0.5" stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                    <stop id="SvgjsStop2069" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                    <stop id="SvgjsStop2070" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine2045" x1="0" y1="0" x2="0" y2="173.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="173.73" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2073" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2074" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2076" font-family="Helvetica, Arial, sans-serif" x="0" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2077"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText2079" font-family="Helvetica, Arial, sans-serif" x="48.8125" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2080">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText2082" font-family="Helvetica, Arial, sans-serif" x="97.625" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2083">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText2085" font-family="Helvetica, Arial, sans-serif" x="146.4375" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2086">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText2088" font-family="Helvetica, Arial, sans-serif" x="195.25" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2089">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText2091" font-family="Helvetica, Arial, sans-serif" x="244.0625" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2092">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText2094" font-family="Helvetica, Arial, sans-serif" x="292.875" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2095">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText2097" font-family="Helvetica, Arial, sans-serif" x="341.6875" y="202.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan2098">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG2101" class="apexcharts-grid">
                                                <g id="SvgjsG2102" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine2104" x1="0" y1="0" x2="341.6875" y2="0" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2105" x1="0" y1="43.4325" x2="341.6875" y2="43.4325" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2106" x1="0" y1="86.865" x2="341.6875" y2="86.865" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2107" x1="0" y1="130.29749999999999" x2="341.6875" y2="130.29749999999999" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2108" x1="0" y1="173.73" x2="341.6875" y2="173.73" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2103" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine2110" x1="0" y1="173.73" x2="341.6875" y2="173.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2109" x1="0" y1="1" x2="0" y2="173.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2048" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2049" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2071" d="M 0 173.73L 0 112.92450000000001C 17.084374999999998 112.92450000000001 31.728125000000002 125.95425 48.8125 125.95425C 65.896875 125.95425 80.540625 86.86500000000001 97.625 86.86500000000001C 114.709375 86.86500000000001 129.353125 121.611 146.4375 121.611C 163.521875 121.611 178.165625 34.74600000000001 195.25 34.74600000000001C 212.334375 34.74600000000001 226.978125 104.238 244.0625 104.238C 261.146875 104.238 275.790625 65.14875 292.875 65.14875C 309.959375 65.14875 324.603125 91.20825 341.6875 91.20825C 341.6875 91.20825 341.6875 91.20825 341.6875 173.73M 341.6875 91.20825z" fill="url(#SvgjsLinearGradient2067)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0hanvuty)" pathTo="M 0 173.73L 0 112.92450000000001C 17.084374999999998 112.92450000000001 31.728125000000002 125.95425 48.8125 125.95425C 65.896875 125.95425 80.540625 86.86500000000001 97.625 86.86500000000001C 114.709375 86.86500000000001 129.353125 121.611 146.4375 121.611C 163.521875 121.611 178.165625 34.74600000000001 195.25 34.74600000000001C 212.334375 34.74600000000001 226.978125 104.238 244.0625 104.238C 261.146875 104.238 275.790625 65.14875 292.875 65.14875C 309.959375 65.14875 324.603125 91.20825 341.6875 91.20825C 341.6875 91.20825 341.6875 91.20825 341.6875 173.73M 341.6875 91.20825z" pathFrom="M -1 217.1625L -1 217.1625L 48.8125 217.1625L 97.625 217.1625L 146.4375 217.1625L 195.25 217.1625L 244.0625 217.1625L 292.875 217.1625L 341.6875 217.1625"></path>
                                                    <path id="SvgjsPath2072" d="M 0 112.92450000000001C 17.084374999999998 112.92450000000001 31.728125000000002 125.95425 48.8125 125.95425C 65.896875 125.95425 80.540625 86.86500000000001 97.625 86.86500000000001C 114.709375 86.86500000000001 129.353125 121.611 146.4375 121.611C 163.521875 121.611 178.165625 34.74600000000001 195.25 34.74600000000001C 212.334375 34.74600000000001 226.978125 104.238 244.0625 104.238C 261.146875 104.238 275.790625 65.14875 292.875 65.14875C 309.959375 65.14875 324.603125 91.20825 341.6875 91.20825" fill="none" fill-opacity="1" stroke="#696cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0hanvuty)" pathTo="M 0 112.92450000000001C 17.084374999999998 112.92450000000001 31.728125000000002 125.95425 48.8125 125.95425C 65.896875 125.95425 80.540625 86.86500000000001 97.625 86.86500000000001C 114.709375 86.86500000000001 129.353125 121.611 146.4375 121.611C 163.521875 121.611 178.165625 34.74600000000001 195.25 34.74600000000001C 212.334375 34.74600000000001 226.978125 104.238 244.0625 104.238C 261.146875 104.238 275.790625 65.14875 292.875 65.14875C 309.959375 65.14875 324.603125 91.20825 341.6875 91.20825" pathFrom="M -1 217.1625L -1 217.1625L 48.8125 217.1625L 97.625 217.1625L 146.4375 217.1625L 195.25 217.1625L 244.0625 217.1625L 292.875 217.1625L 341.6875 217.1625"></path>
                                                    <g id="SvgjsG2050" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                        <g id="SvgjsG2052" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask0hanvuty)">
                                                            <circle id="SvgjsCircle2053" r="6" cx="0" cy="112.92450000000001" class="apexcharts-marker no-pointer-events wxtxov7e8i" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle>
                                                            <circle id="SvgjsCircle2054" r="6" cx="48.8125" cy="125.95425" class="apexcharts-marker no-pointer-events wkgic5vye" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2055" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask0hanvuty)">
                                                            <circle id="SvgjsCircle2056" r="6" cx="97.625" cy="86.86500000000001" class="apexcharts-marker no-pointer-events wrt97f9td" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2057" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask0hanvuty)">
                                                            <circle id="SvgjsCircle2058" r="6" cx="146.4375" cy="121.611" class="apexcharts-marker no-pointer-events w8zt34irl" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2059" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask0hanvuty)">
                                                            <circle id="SvgjsCircle2060" r="6" cx="195.25" cy="34.74600000000001" class="apexcharts-marker no-pointer-events wgo39jyub" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2061" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask0hanvuty)">
                                                            <circle id="SvgjsCircle2062" r="6" cx="244.0625" cy="104.238" class="apexcharts-marker no-pointer-events w01cbeedb" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2063" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask0hanvuty)">
                                                            <circle id="SvgjsCircle2064" r="6" cx="292.875" cy="65.14875" class="apexcharts-marker no-pointer-events wmrqs56z9" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2065" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask0hanvuty)">
                                                            <circle id="SvgjsCircle2066" r="6" cx="341.6875" cy="91.20825" class="apexcharts-marker no-pointer-events wd1cchonz" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2051" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2111" x1="0" y1="0" x2="341.6875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2112" x1="0" y1="0" x2="341.6875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2113" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2114" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2115" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect2116" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect2117" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect2044" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG2099" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                            <g id="SvgjsG2100" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG2042" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0" style="position: relative;">
                                    <div id="expensesOfWeek" style="min-height: 57.7px;">
                                        <div id="apexchartsu065pwak" class="apexcharts-canvas apexchartsu065pwak apexcharts-theme-light" style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg2118" width="60" height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG2120" class="apexcharts-inner apexcharts-graphical" transform="translate(-10, -10)">
                                                    <defs id="SvgjsDefs2119">
                                                        <clipPath id="gridRectMasku065pwak">
                                                            <rect id="SvgjsRect2122" width="86" height="87" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMasku065pwak"></clipPath>
                                                        <clipPath id="nonForecastMasku065pwak"></clipPath>
                                                        <clipPath id="gridRectMarkerMasku065pwak">
                                                            <rect id="SvgjsRect2123" width="84" height="89" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG2124" class="apexcharts-radialbar">
                                                        <g id="SvgjsG2125">
                                                            <g id="SvgjsG2126" class="apexcharts-tracks">
                                                                <g id="SvgjsG2127" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247" fill="none" fill-opacity="1" stroke="rgba(236,238,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.0408536585365864" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2129">
                                                                <g id="SvgjsG2133" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath2134" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095" fill="none" fill-opacity="0.85" stroke="rgba(105,108,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.081707317073173" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="65" index="0" j="0" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle2130" r="18.881402439024395" cx="40" cy="40" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                                <g id="SvgjsG2131" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2132" font-family="Helvetica, Arial, sans-serif" x="40" y="45" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">$65</text></g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2135" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2136" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG2121" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 61px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Expenses This Week</p>
                                    <small class="text-muted">$39 less than last week</small>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 360px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/themes/admin/assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Paypal</small>
                                    <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/themes/admin/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/themes/admin/assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Transfer</small>
                                    <h6 class="mb-0">Refund</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/themes/admin/assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Credit Card</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/themes/admin/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="/themes/admin/assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Mastercard</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>
</x-admin.wrapper>