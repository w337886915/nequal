<style>
    .helps {
        z-index: 1000;
        min-width: 42px;
        min-height: 128px;
        overflow: hidden;
        position: fixed;
        top: 50%;
        right: 8px;
        background-color: #FFFFFF;
        border: 1px solid #D1D5DB;
    }

    .help-item {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        padding: 10px;
        box-sizing: border-box;
    }

    .help-item:nth-child(n+2) {
        border-top: 1px solid #D1D5DB;
    }

    .help-item img {
        width: 40px;
        height: 40px;
    }

    .help-item p {
        line-height: 16px;
        padding: 5px 12px;
        min-width: 80px;
    }
</style>

<div class="helps">
    <div class="help-item">
        <img alt="" src="static/picture/hyper-data-lab_1.svg">
        <p>关注微信</p>
    </div>
    <div class="help-item">
        <img alt="" src="static/picture/hyper-data-lab_1.svg">
        <p>联系我们</p>
    </div>
    <div class="help-item">
        <img alt="" src="static/picture/hyper-data-lab_1.svg">
        <p>合作咨询</p>
    </div>
</div>

