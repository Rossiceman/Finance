
<!-- loginModal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">會員登入</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="loginModal_username" class="form-label">帳號</label>
          <input type="text" name="loginModal_username" id="loginModal_username" class="form-control" />
        </div>
        <div class="mb-3">
          <label for="loginModal_password" class="form-label">密碼</label>
          <input type="password" name="loginModal_password" id="loginModal_password" class="form-control" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="loginModal_ok_btn">確定</button>
      </div>
    </div>
  </div>
</div>

<!-- registerModal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">會員註冊</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- 左側會員守則 -->
          <div class="col-6">
            <h3>會員守則</h3>
            <p>1. 嚴格保護個人信息和交易數據，不得將其他會員的私密信息或網站內部信息洩露給第三方。</p>
            <p>2. 所有交易應公開透明，會員不得進行任何形式的市場操控或內幕交易。</p>
            <p>3. 尊重並遵守網站及第三方內容的知識產權，不抄襲、盜用或未經許可使用他人內容。</p>
            <p>4. 遵循道德準則，避免任何損害網站聲譽或對其他會員造成困擾的行為。</p>
            <div class="form-check">
              <input type="checkbox" name="registerModal_chk" id="registerModal_chk" class="form-check-input" />
              <label for="registerModal_chk" class="form-check-label">同意</label>
            </div>
          </div>

          <!-- 右側註冊表單 -->
          <div class="col-6">
            <div class="mb-3">
              <label for="registerModal_username" class="form-label">帳號</label>
              <input type="text" name="registerModal_username" id="registerModal_username" class="form-control" placeholder="字數3-8" />
            </div>
            <div class="mb-3">
              <label for="registerModal_password" class="form-label">密碼</label>
              <input type="password" name="registerModal_password" id="registerModal_password" class="form-control" placeholder="字數3-8" />
            </div>
            <div class="mb-3">
              <label for="registerModal_re_password" class="form-label">確認密碼</label>
              <input type="password" name="registerModal_re_password" id="registerModal_re_password" class="form-control" placeholder="確認密碼" />
            </div>
            <div class="mb-3">
              <label for="registerModal_email" class="form-label">Email</label>
              <input type="email" name="registerModal_email" id="registerModal_email" class="form-control" placeholder="字數3-15" />
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="registerModal_ok_btn">確認</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
    // 登入按鈕事件
    $('#loginModal_ok_btn').on('click', function() {
        const username = $('#loginModal_username').val();
        const password = $('#loginModal_password').val();

        if (username && password) {
            fetch('/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ username, password })
            })
            .then(response => response.json())
            .then(data => {
                if (data.state) {
                    alert(data.message);
                    location.reload();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        } else {
            alert('帳號和密碼必須填寫');
        }
    });

    // 註冊按鈕事件
    $('#registerModal_ok_btn').on('click', function() {
        const username = $('#registerModal_username').val();
        const password = $('#registerModal_password').val();
        const rePassword = $('#registerModal_re_password').val();
        const email = $('#registerModal_email').val();
        const isAgreed = $('#registerModal_chk').is(':checked');

        if (username && password && email && isAgreed) {
            if (username.length < 3 || username.length > 8) {
                Swal.fire({
                    title: "帳號字數需在 3-8 字之間",
                    confirmButtonText: "確認",
                });
                return;
            }
            if (password.length < 3 || password.length > 8) {
                Swal.fire({
                    title: "密碼字數需在 3-8 字之間",
                    confirmButtonText: "確認",
                });
                return;
            }
            if (password !== rePassword) {
                Swal.fire({
                    title: "兩次密碼輸入不一致",
                    confirmButtonText: "確認",
                });
                return;
            }

            fetch('/admin/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ username, password, email })
            })
            .then(response => response.json())
            .then(data => {
                if (data.state) {
                    alert(data.message);
                    location.reload();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        } else {
            Swal.fire({
                title: "所有欄位必須填寫並同意會員守則",
                confirmButtonText: "確認",
            });
        }
    });
});

</script>
