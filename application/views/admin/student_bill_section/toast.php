<?php if(toast_exists('success') || toast_exists('error')): ?>
<style>
    .sc{
        position: fixed;
        z-index: 9999;
        background-color: #3980CC;
        border-radius: 0px;
        padding: 16px 12px;
        box-shadow: 0px 0px 5px #5f5857;
        color: #FFF;
        font-weight: bold;
        width: 100%;
        letter-spacing: 1px;
        text-align: center;
        top:0px;
        left: 0px;
        border-radius: 1px;
        font-size: 16px;
    }
    .er{
        background-color: #dc3b1e;
    }
</style>

<script>
    $(function(){
        $('.sc').delay(3000).fadeOut('slow');
    });
</script>
<?php endif; ?>

<?php if(toast_exists('success')): ?>
<div class="alert sc">
    <i class="ion-android-happy"></i> <?= toast('success') ?>
</div>
<?php endif; ?>

<?php if(toast_exists('error')): ?>
<div class="alert sc er">
    <i class="ion-android-sad"></i> <?= toast('error') ?>
</div>
<?php endif; ?>
