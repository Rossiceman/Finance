<style>
    .card-container {
        display: flex;
        justify-content: space-between; /* 讓卡片均勻分佈 */
        flex-wrap: nowrap; /* 不允許換行 */
        overflow-x: auto; /* 如果卡片超出容器，則可以水平滾動 */
    }
    .card {
        --circle-radius: 60px;
        width: calc(25% - 10px); /* 25% 寬度，減去間距 */
        min-height: 460px;
        background-color: #fff;
        border-radius: var(--circle-radius);
        overflow: hidden;
        margin-right: 10px; /* 每個卡片右側的邊距 */
    }
    .card:last-child {
        margin-right: 0; /* 最後一個卡片不需要右側邊距 */
    }
    .card__img {
        position: relative;
        width: 100%;
        height: 400px;
        background-size: cover; /* 讓圖片覆蓋整個區域 */
        background-position: center; /* 讓圖片居中 */
    }
    /* 文字內容 */
    .card__content {
        position: relative;
        bottom: calc(var(--circle-radius) / 2);
        margin-inline: 40px;
    }
    .card__content__subheading {
        font-size: 14px;
    }
    .card__content {
        display: grid;
        grid-template-rows: min-content 0fr;
        transition: grid-template-rows 0.4s;
    }
    .card__content__text {
        overflow: hidden;
    }
    .card__img::before, .card__img::after {
        content: "";
        position: absolute;
    }
    /* 長方形白色區壞 */
    .card__img::before {
        bottom: calc(var(--circle-radius) * -1);
        width: 100%;
        height: calc(var(--circle-radius) * 2);
        border-radius: var(--circle-radius) var(--circle-radius) 0 0;
        background-color: #fff;
    }
    /* 右上半圓形白色區塊 */
    .card__img::after {
        right: 0;
        bottom: var(--circle-radius);
        width: calc(var(--circle-radius) * 2);
        height: calc(var(--circle-radius) * 2);
        border-radius: 50%;
        background: #ffffff;
    }
    .card__img::after {
        background: transparent;
        box-shadow: var(--circle-radius) var(--circle-radius) 0px 0px #fff;
    }
    /* 動畫 */
    .card__img {
        filter: blur(24px);
        transition: filter 0.4s;
        position: relative;
        width: 100%;
        height: 400px;
        background-size: cover; /* 讓圖片覆蓋整個區域 */
        background-position: center; /* 讓圖片居中 */
    }
    .card:hover .card__img {
        filter: blur(0);
        transition-delay: 0s;
    }
    .card-stock .card__img {
        background-image: url('/image/n-4.jpg');
    }

    .card-gold .card__img {
        background-image: url('/image/gold-7.jpg');
    }

    .card-btc .card__img {
        background-image: url('/image/btc.jpg');
    }

    .card-analysis .card__img {
        background-image: url('/image/n-1.jpg');
    }
    .card:hover .card__content {
        grid-template-rows: min-content 1fr;
        transition-delay: 0s;
    }
    .card__content__text {
        opacity: 0;
        transition: margin 0s 0.4s, opacity 0.4s;
    }
    .card:hover .card__content__text {
        margin-top: 16px;
        opacity: 1;
        transition-delay: 0.4s, 0.4s;
    }
</style>

<div class="card-container">
    <div class="card card-stock">
        <div class="card__img"></div>
        <div class="card__content">
            <div class="card__content__header">
                <h2 class="card__content__heading">股票投資</h2>
                <p class="card__content__subheading">Stock</p>
            </div>
            <p class="card__content__text">
            Win or
                Loser的宗旨就是讓投資變得更便捷和更容易。零費用、低門檻，以及我們人性化的平台，讓所有人都能進行股票投資。您還可以投資於零股。零股是不足一支股的股票，是一支股票的一部分。零股使您能夠按照您想投資的美金金額購買股票。非整股進行託管的條款與整股相同，有資格按比例獲得投票權（僅限支持的股票），在公司事件中按比例獲得股息或其他調整。
            </p>
        </div>
    </div>

    <div class="card card-gold">
        <div class="card__img"></div>
        <div class="card__content">
            <div class="card__content__header">
                <h2 class="card__content__heading">黃金投資</h2>
                <p class="card__content__subheading">Gold</p>
            </div>
            <p class="card__content__text">
            在Win or
                Loser，讓黃金投資變得更簡單。通過零費用、低門檻以及我們直觀的人性化平台，所有投資者都能輕鬆參與黃金市場。這樣的投資方式讓您可以靈活地分配資金，無論您的投資規模如何，都能享受黃金市場的潛力。借助這種靈活的投資方式，黃金不再只是大額投資者的專利，而是所有人都能參與的安全避險工具。
        </div>
    </div>

    <div class="card card-btc">
        <div class="card__img"></div>
        <div class="card__content">
            <div class="card__content__header">
                <h2 class="card__content__heading">虛擬貨幣</h2>
                <p class="card__content__subheading">Virtual Currency</p>
            </div>
            <p class="card__content__text">
            Win or Loser是加密貨幣領域值得信賴的品牌，有直覺力且使用簡便，除了 Win or Loser 之外，還有什麼地方能讓您在持有加密資產的同時，增加您的資產持有量呢？Win or Loser
                的專享質押服務可以讓您持有的加密貨幣數量不斷增長，坐享其成。就是這麼簡單。
            </p>
        </div>
    </div>

    <div class="card card-analysis">
        <div class="card__img"></div>
        <div class="card__content">
            <div class="card__content__header">
                <h2 class="card__content__heading">專業分析</h2>
                <p class="card__content__subheading">Professional analysis</p>
            </div>
            <p class="card__content__text">
            我們的專業金融分析服務讓您能夠深入了解市場動態，並通過精確的數據分析提升您的投資潛力。無需繁瑣操作，您就能掌握市場趨勢，輕鬆作出決策，讓您的資產實現穩步增長。這麼簡單，讓我們成為您實現財富增值的強力後盾。
            </p>
        </div>
    </div>
</div>
