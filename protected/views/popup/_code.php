<?php
/* @var $model Popup */
?>
<h4 style="margin: 10px">Код popup</h4>
<textarea disabled="disabled" rows="15" style="width: 100%; margin-right: 252px">
    <script>
        window.addEventListener('load', () => {
            setTimeout(() => {
                fetch('http://popup/index.php/popup/get/<?php echo CHtml::encode($model->id)?>')
                    .then(response => response.text())
                    .then(jsCode => eval(jsCode))
                    .catch(error => console.error('Ошибка при загрузке или выполнении JS:', error));
            }, 10000);
        });
    </script>
</textarea>
