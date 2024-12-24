<?php
/* @var $this ExampleController */

$this->pageTitle="Пример попапа";
?>

<script>
    window.addEventListener('load', () => {
        setTimeout(() => {
            fetch('http://popup/index.php/popup/get/1')
                .then(response => response.text())
                .then(jsCode => eval(jsCode))
                .catch(error => console.error('Ошибка при загрузке или выполнении JS:', error));
        }, 1000);
    });
</script>
