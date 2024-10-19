<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win or Lose</title>
    <style>
        .bg-video {
            width: 100%;
            height: 100vh; /* 覆蓋整個頁面高度 */
            object-fit: cover; /* 確保影片按照比例裁剪 */
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>

<video autoplay muted loop class="bg-video" id="bgVideo">
    <source src="{{ asset('image/Welcome.mp4') }}" type="video/mp4" />
</video>

<script>
    // 獲取影片元素
    const video = document.getElementById("bgVideo");

    // 在影片開始播放後的10秒自動跳轉
    setTimeout(function() {
        window.location.href = "{{ route('active') }}"; 
    }, 10000); // 10000 毫秒等於 10 秒

    // 當使用者點擊影片時觸發跳轉
    video.addEventListener("click", function() {
        // 跳轉到 active 頁面
        window.location.href = "{{ route('active') }}"; 
    });
</script>

</body>
</html>
