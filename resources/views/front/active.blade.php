@extends("front.layout")

@section("content")
<link rel="stylesheet" href="css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- 使用正確的版本 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<style>
    html, body {
        height: 100%; /* 確保 body 高度為 100% */
        margin: 0; /* 去除默認邊距 */
    }

    .carousel, .carousel-inner, .carousel-item {
        height: 100vh; /* 高度設置為視窗高度 */
    }

    .carousel-video {
        width: 100%;
        height: 100%; /* 確保視頻占滿父元素 */
        object-fit: cover; /* 使視頻以正確比例縮放 */
    }

    @media screen and (max-width: 768px) {
        .carousel-video {
            height: auto; /* 在小屏幕上自動調整高度 */
        }
        .carousel-item {
            height: auto; /* 自動調整每個項目的高度 */
        }
    }
</style>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video autoplay muted loop class="carousel-video">
                <source src="{{ asset('image/v-1.mp4') }}" type="video/mp4" />
            </video>
            <div class="carousel-caption p-3 rounded-2 shadow-lg d-none d-md-block">
                <h5>Win or Lose</h5>
                <p>投資今天，豐收明天，投資知識，成就財富，你的資本，你的未來。</p>
            </div>
        </div>
        <div class="carousel-item">
            <video autoplay muted loop class="carousel-video">
                <source src="{{ asset('image/v-2.mp4') }}" type="video/mp4" />
            </video>
            <div class="carousel-caption p-3 rounded-2 shadow-lg d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3)">
                <h5>Win or Lose</h5>
                <p>風險控制，成功關鍵，投資不僅是資本，更是策略，掌握機會，成就夢想。</p>
            </div>
        </div>
        <div class="carousel-item">
            <video autoplay muted loop class="carousel-video">
                <source src="{{ asset('image/v-3.mp4') }}" type="video/mp4" />
            </video>
            <div class="carousel-caption p-3 rounded-2 shadow-lg d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3)">
                <h5>Win or Lose</h5>
                <p>明智選擇，實現財富自由，穩中求進，資產增值，洞察市場，未來可期，用心投資，見證成長。</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@include("front.knows")
@include("front.about")
@include("front.responsibility")
@include("front.company")
@include("front.contact")
@include("front.join")
@include("front.footer")
@endsection
