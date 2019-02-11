@extends('layouts.app')
@section('title', 'ZingFront智线|C 题二')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        题 2
                    </h2>
                    <p>某些整数能分解成若干个连续整数的和的形式，例如</p>
                    <p>15 = 1 + 2 + 3 + 4 + 5</p>
                    <p>15 = 4 + 5 + 6</p>
                    <p>15 = 7 + 8</p>
                    <p>某些整数不能分解为连续整数的和，例如：16</p>
                    <p>输入：一个整数 N (N <= 10000)</p>
                    <p>输出：整数 N 对应的所有分解组合，按照每个分解中的最小整数从小到大输出，每个分解占一行，每个数字之间有一个空格（每行最后保留一个空格）；如果没有任何分解组合，则输出 NONE</p>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" action="#" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-form-label text-md-right col-sm-2">N:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="num">
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary" id="btn-num">提交</button>
                            </div>
                        </div>
                    </form>
                    <h2 id="word"><span></span></h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptsAfterJs')
    <script>
        $(document).ready(function () {
            // 确认收货按钮点击事件
            $('#btn-num').click(function () {
                var data = {};

                var t = $('form').serializeArray();
                $.each(t, function () {
                    data[this.name] = this.value;
                });
                //console.log(data);
                axios.post('{{ route('num-sum.store') }}', data)
                    .then(function (response) {
                        //console.log(response.data);
                        $('#word span').html(response.data);
                    })
            });
        });
    </script>
@endsection
