<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page</title>
  <link rel="stylesheet" href="../style/form.css">
</head>

<body>
  <div class="form-wrap">
    <div class="ico">
      <h2>
      <img src="../img/bootstrapicons/clock-history.svg" alt="work">
      УВЕДОМЛЕНИЕ О ПЛАНОВЫХ РАБОТАХ</h2>
    </div>
    <form action="work_form.php" method="post">
    <fieldset class="description">
      <legend>ОПИСАНИЕ РАБОТ</legend>
      <div class="left">
        <label for="status">Статус работ:</label>
        <select name="status" required>
          <option>Выберите</option>
          <option value="approval">Согласование</option>
          <option value="planned">Планируется</option>
          <option value="canceled">Отмена</option>
          <option value="compl_succ">Завершены успешно</option>
          <option value="compl_unsucc">Завершены неуспешно</option>
        </select>

        <label for="status">Услуга:</label>
        <select name="status" required>
          <option>Выберите</option>
          <option value="dwdm">DWDM</option>
          <option value="ipmpls">IP/MPLS</option>
          <option value="ipmpls_rcod">IP/MPLS+РЦОД</option>
          <option value="lte">LTE</option>
          <option value="egts">E-GTS</option>
          <option value="int_off">Завершены неуспешно</option>
          <option value="voice">VoiceX</option>
          <option value="electro">Электропитание</option>
        </select>
      </div>
      <div class="right">
      <label for="name">Наименование работ:</label>
        <textarea class="name" required></textarea>
      <label for="det_name">Детальное описание работ:</label>
        <textarea class="det_name" required></textarea>
      </div>
    </fieldset>

    <fieldset class="date-time">
      <legend>ДАТА/ВРЕМЯ</legend>
      <div class="v1-1">
      <label for="">Дата/Время планируемого начала работ:
        <input type="datetime" name="" id=""></label></div>
      <div class="v2-1">
      <label for="">Дата/Время фактического начала работ:
        <input type="datetime" name="" id=""></label></div>
      <div class="v1-2">
      <label for="">Дата/Время планируемого завершения работ:
        <input type="datetime" name="" id=""></label></div>
      <div class="v2-2">
      <label for="">Дата/Время фактического завершения работ:
        <input type="datetime" name="" id=""></label></div>
    </fieldset>

    <fieldset class="another">
      <legend>ПРОЧЕЕ</legend>
      <div class="">
        <label>Влияние на сервис:
          <input type="text"></label>
        </div>
      <div class="">
        <label>Оветственный за проведение работ:
          <input type="text"></label>
        </div>
      <div class="">
        <label>Производитель работ:
        <input type="text"></label>
      </div>
      <div class="">
        <label>Примечание:
        <textarea></textarea>
      </div>
    </fieldset>
    <div class="button-container"><button type="submit">Подтвердить</button></div>
    </form>
  </div>
</body>
</html>