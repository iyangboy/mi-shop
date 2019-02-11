@extends('layouts.app')
@section('title', 'ZingFront智线|C 题一')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        题 1
                    </h2>
                    <p>编程实现功能</p>
                    <p>功能是求出字符 s 与字符串 t de 第二公共单词（这里，假设两个字符串均由英文字母和空格字符组成）；若找到这样的公共单词，函数返回该单词，否则，函数返回 NULL ,
                        如果有多个满足要求，则返回第一个单词。</p>
                    <p>例如：若 s = "This is C programming text"，t = "This is a text for C programming"，则函数返回 "this"。</p>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" action="#" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-form-label text-md-right col-sm-2">S:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="str_s">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-md-right col-sm-2">T:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="str_t">
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button type="button" class="btn btn-primary" id="btn-word-pairs">提交</button>
                            </div>
                        </div>
                    </form>
                    <h2 id="word"></h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptsAfterJs')
    <script>
        $(document).ready(function () {
            // 确认收货按钮点击事件
            $('#btn-word-pairs').click(function () {
                var data = {};

                var t = $('form').serializeArray();
                $.each(t, function () {
                    data[this.name] = this.value;
                });
                //console.log(data);
                axios.post('{{ route('word-pairs.store') }}', data)
                    .then(function (response) {
                        //console.log(response.data);
                        $('#word').text(response.data);
                    })
            });
        });
    </script>
@endsection
