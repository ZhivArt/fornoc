<!DOCTYPE html>
<html lang="en">
<?php include_once "include/head.php"; ?>

<body>
    <div class="grid-container">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/menu.php"; ?>

    <div class="article">
    <div class="table">
        <h2>УВЕДОМЛЕНИЕ О СИСТЕМНОМ ИНЦИДЕНТЕ</h2>
        <table class="tg">
        <thead>
            <tr>
                <th class="tg-sksp" colspan="4">Наименование инцидента №T:</th>
                <th class="tg-sksp" colspan="2">Статус инцидента:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-sksp" colspan="2">Классификация инцидента:</td>
                <td class="tg-sksp" colspan="2">Услуга:</td>
                <td class="tg-sksp" colspan="2">Влияние на сервис:</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="3">Дата/Время начала инцидента:</td>
            <td class="tg-sksp" colspan="3">Дата/Время выхода аварии (обращения клиента):</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="3">Дата/Время решения инцидента:</td>
            <td class="tg-sksp" colspan="3">Дата/Время приостановки инцидента:</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="6">Способ обнаружения инцидента:</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="2">Дата/Время эскалации инцидента:</td>
            <td class="tg-sksp" colspan="4">ФИО на кого выполнена эскалация инцидента:</td>
        </tr>
        <tr>
            <td class="tg-6u6v" colspan="6">Описание инцидента:<br></td>
        </tr>
        <tr>
            <td class="tg-6u6v" colspan="6">Примечание к инциденту:<br></td>
        </tr>
        </tbody>
        </table>
    </div>
    </div>

    <?php include_once "include/todo.php"; ?>
    <?php include_once "include/footer.php"; ?>
    </div>
</body>
</html>