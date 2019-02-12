@extends('layouts.app')
@section('title', 'ZingFront智线|C 题二')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                @include('zingfront.zingfront')
                <div class="card-header">
                    <h2 class="text-center">
                        旅行日志
                    </h2>
                    <p>使用地图
                        API，把你旅行到过的身份使用某种交互标注出来；鼠标标放到相关省份后可以看到相关的时间和备注；对于没有去过的地方，可以在地图上直接“做计划”，比如，你之前没有去过浙江旅行，那直接可以在地图上给浙江省做一个旅行计划，比如，写上“计划2018五一期间旅行”。
                        对于已经去过的省份，不可以再做计划；</p>
                </div>
                <div class="card-body">
                    <div id="container"></div>
                    <div id="EChartsContainer"></div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styleCss')
    <script src="{{ asset('js/echarts.min.js') }}"></script>
    <script src="{{ asset('js/china.js') }}"></script>
    <style>
        #EChartsContainer {
            width: 100%;
            height: 600px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('scriptsAfterJs')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        //初始化echarts实例
        var myChart = echarts.init(document.getElementById('EChartsContainer'));

        var provinces = [];
        axios.post('{{ route('map-travel-province') }}').then(function (response) {
            // console.log(response.data);
            provinces = response.data;
            for (i in provinces) {
                if (provinces[i]['is_travel']) {
                    provinces[i]['selected'] = true;
                }
                // console.log(provinces[i]);
            }

            // 绘制图表，准备数据
            var option = {
                tooltip: {
                    formatter: function (params) {
                        // console.log(params);
                        var info = '<p style="font-size:18px">' + params.name + '</p>' + (params.data.remarks ? ('<p style="font-size:14px">' + params.data.remarks + '</p>') : "");
                        return info;
                    },
                    backgroundColor: "#ff7f50",//提示标签背景颜色
                    textStyle: {color: "#fff"} //提示标签字体颜色
                },
                series: [
                    {
                        name: '中国',
                        type: 'map',
                        mapType: 'china',
                        selectedMode: 'multiple',
                        label: {
                            normal: {
                                show: true,//显示省份标签
                                // textStyle:{color:"#c71585"}//省份标签字体颜色
                            },
                            emphasis: {
                                show: true,//对应的鼠标悬浮效果
                                textStyle: {color: "#800080"}
                            }
                        },
                        itemStyle: {
                            normal: {
                                borderWidth: .5,//区域边框宽度
                                // borderColor: '#009fe8',//区域边框颜色
                                // areaColor:"#ffefd5",//区域颜色
                            },
                            emphasis: {
                                borderWidth: .5,
                                borderColor: '#4b0082',
                                areaColor: "#ffdead",
                            }
                        },
                        data: provinces
                    }
                ]
            };

            //使用制定的配置项和数据显示图表
            myChart.setOption(option);

            //点击事件
            myChart.on('click', function (params) {
                // console.log(params);
                if (!params.data.is_travel) {
                    swal({
                        title: "请输入旅行计划",
                        type: "input",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        animation: "slide-from-top",
                        inputPlaceholder: "请输入..."
                    }, function (inputValue) {
                        if (inputValue === false) return false;
                        if (inputValue === "") {
                            swal.showInputError("请输入!");
                            return false
                        }
                        axios.post('{{ route('map.remarks.add') }}', {
                            id: params.data.id,
                            remarks: inputValue,
                        }).then(function (response) {
                            // console.log(response.data);
                            location.reload();
                            /*
                            if (response.data) {
                                swal('操作成功', '', 'success');
                            } else {
                                swal('系统错误', '', 'error');
                            }
                            */
                        });
                    });
                }
            });
        });
    </script>
@endsection
