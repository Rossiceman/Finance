<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CounterUp Test</title>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* 影片填滿容器，保持比例 */
        .bg-cover video {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        /* 手機端自動調整 */
        @media screen and(max-width: 768px) {
            /* 影片區域在小螢幕上調整為自動高度 */
            .bg-cover {
                height: auto;
            }
            .bg-cover video {
                height: auto;
            }

            /* 文字區塊對齊在小螢幕上進行調整 */
            .content {
                padding: 20px;
                text-align: center;
            }

            /* 行的間距和標題大小調整 */
            h1, h4, h2 {
                font-size: 1.5rem;
            }
            .row > div {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <section id="knows">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- 左側影片區域 col-5，影片將自動適應小螢幕 -->
                <div class="col-md-5 col-12 bg-cover wow animate__fadeInTopLeft">
                    <video autoplay muted loop>
                        <source src="{{ asset('image/world-1.mp4') }}" type="video/mp4">
                    </video>
                </div>

                <!-- 右側文字區域 col-7，並在小螢幕上全寬顯示 -->
                <div class="col-md-7 col-12 content">
                    <div>
                        <h1>成立於2000年<span class="text-danger">世界第一</span></h1>
                        <h1>專業團隊</h1>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <h4>年均營收</h4>
                                <h2 class="text-danger counter01">9500<span class="h4">/億</span></h2>
                            </div>
                            <div class="col-6 col-md-3">
                                <h4>獲獎項目</h4>
                                <h2 class="text-danger counter02">500<span class="h4">/次</span></h2>
                            </div>
                            <div class="col-6 col-md-3">
                                <h4>專業認證</h4>
                                <h2 class="text-danger counter03">999<span class="h4">/位</span></h2>
                            </div>
                            <div class="col-6 col-md-3">
                                <h4>公司據點</h4>
                                <h2 class="text-danger counter04">360<span class="h4">/個</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        new WOW().init();
        const counterUp = window.counterUp.default;

        const callback = (entries) => {
            entries.forEach((entry) => {
                const el = entry.target;
                if (entry.isIntersecting && !el.classList.contains("is-visible")) {
                    counterUp(el, {
                        duration: 2000,
                        delay: 16,
                    });
                    el.classList.add("is-visible");
                }
            });
        };

        const IO = new IntersectionObserver(callback, { threshold: 1 });

        const el01 = document.querySelector(".counter01");
        IO.observe(el01);
        const el02 = document.querySelector(".counter02");
        IO.observe(el02);
        const el03 = document.querySelector(".counter03");
        IO.observe(el03);
        const el04 = document.querySelector(".counter04");
        IO.observe(el04);
    </script>
</body>
</html>
