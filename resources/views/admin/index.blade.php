<html>

<head>
    <meta charset="utf-8">
    <title>後台管理系統</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script>
        function doCheck()
        {
            var code = document.getElementById("code").value;
            if (code == "")
            {
                alert("請輸入驗證碼");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <form action="/admin/login" method="post" onsubmit="return doCheck()">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-center">帳號</div>
                        <div class="col-8 col-sm-5 col-md-4 col-lg-3 text-center">
                            <input type="text" name="userId" id="userId123" class="form-control" value="{{ old('userId') }}" autofocus>
                            @if ($errors->has("error"))
                                <div class="text-danger">{{ $errors->first("error") }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-center">密碼</div>
                        <div class="col-8 col-sm-5 col-md-4 col-lg-3 text-center">
                            <input type="password" name="pwd" class="form-control" value="{{ old('pwd') }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-center">驗證碼</div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-3 text-center">
                            <input type="text" name="code" id="code" class="form-control">
                            @if ($errors->has("code"))
                                <div class="text-danger">{{ $errors->first("code") }}</div>
                            @endif
                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-center">
                            <img class="captcha" src="/captcha/flat" onclick="this.src='/captcha/flat?' + Math.random()" style="cursor: pointer">
                        </div>
                    </div>
                    <div class="row mt-3 text-center">
                        <div class="col-5 text-right">
                            <button type="submit" class="btn btn-info"> 我 要 登 入 </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>