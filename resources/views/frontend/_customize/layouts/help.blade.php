<style>
  .helps {
    z-index: 1000;
    min-width: 42px;
    min-height: 128px;
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
  <div class="help-item" role="button" data-toggle="popover" data-placement="left" data-trigger="click"
       data-html="true"
       data-content='<div><div class="qrcode"><img src="https://static.easyicon.net/preview/115/1158132.gif" style="width: 150px;height: 150px;background-color: #FFFFFF;"></div></div>'>
    <img alt="" src="https://static.easyicon.net/preview/122/1226452.gif">
    <p class="visible-md visible-lg">关注微信</p>
  </div>
  <div class="help-item">
    <img alt="" src="https://static.easyicon.net/preview/122/1226452.gif">
    <p class="visible-md visible-lg">联系我们</p>
  </div>
  <div class="help-item">
    <img alt="" src="https://static.easyicon.net/preview/122/1226452.gif">
    <p class="visible-md visible-lg">合作咨询</p>
  </div>
</div>

