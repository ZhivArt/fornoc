<!DOCTYPE html>
<html lang="en">
<?php include_once "include/head.php"; ?>

<body>
    <div class="grid-container">
    <?php include_once "include/header.php"; ?>
    <?php include_once "include/menu.php"; ?>

    <div class="article">
    <div class="table">
        <h2>УВЕДОМЛЕНИЕ О ПЛАНОВЫХ РАБОТАХ</h2>
        <table class="tg">
        <thead>
            <tr>
                <th class="tg-sksp" colspan="4">Наименование работ:</th>
                <th class="tg-sksp" colspan="2">Статус работ:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-sksp" colspan="2">Система:</td>
                <td class="tg-sksp" colspan="2">Услуга:</td>
                <td class="tg-sksp" colspan="2">Влияние на сервис:</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="3">Дата/Время планируемого начала работ:</td>
            <td class="tg-sksp" colspan="3">Дата/Время планируемого завершения работ:</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="3">Дата/Время фактического начала работ:</td>
            <td class="tg-sksp" colspan="3">Дата/Время фактического завершения работ:</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="6">Оветственный за проведение работ:</td>
        </tr>
        <tr>
            <td class="tg-sksp" colspan="6">Производитель работ:</td>
        </tr>
        <tr>
            <td class="tg-6u6v" colspan="6">Описание работ:<br></td>
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