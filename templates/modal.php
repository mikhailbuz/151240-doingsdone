  <div class="modal" <?php if (empty($taskModal)) print('hidden') ?>>
    <button class="modal__close" type="button" name="button">Закрыть</button>

    <h2 class="modal__heading">Добавление задачи</h2>

    <form class="form"  action="index.php" method="post" enctype="multipart/form-data">
      <div class="form__row">

        <?php $classname = isset($errors['Название']) ? "form__input--error" : "";
                $value = isset($gif['title']) ? $gif['title'] : ""; ?>


        <label class="form__label" for="name">Название <sup>*</sup></label>

        <input class="form__input
        <?php if ($errors['name']) print('form__input--error')?>
        " type="text" name="name" id="name" value="<?php if (isset($values['name'])) print($values['name']) ?>" placeholder="Введите название">

        <p class="form__message"><?php if (isset($errors['name'])) print($errors['name'])?></p>
      </div>

      <div class="form__row">
        <label class="form__label" for="project">Проект <sup>*</sup></label>

        <select class="form__input form__input--select
        <?php if (isset($errors['project'])) print('form__input--error')?>" name="project" id="project">

          <?php foreach ($projects as $k => $val): ?>
            <?php if ($k): ?>

            <option <?php if (isset($values['project']) && ($values['project'] == $val['id'])) print('selected') ?> value="<?= $val['id'] ?>">
            <?= htmlspecialchars($val['project']) ?>
            </option>

            <?php endif ?>
          <?php endforeach ?>

        </select>
        <p class="form__message"><?php if (isset($errors['project'])) print($errors['project'])?></p>

      </div>

      <div class="form__row">
        <label class="form__label" for="date">Дата выполнения</label>

        <input class="form__input form__input--date
        <?php if (isset($errors['date'])) print('form__input--error')?>
        " type="" name="date" id="date" value="<?php if (isset($values['date'])) print($values['date']) ?>" placeholder="Введите дату в формате ДД.ММ.ГГГГ">

        <p class="form__message"><?php if (isset($errors['date'])) print($errors['date'])?></p>
        
      </div>

      <div class="form__row">
        <label class="form__label" for="preview">Файл</label>

        <div class="form__input-file">
          <input class="visually-hidden" type="file" name="preview" id="preview" value="">

          <label class="button button--transparent" for="preview">
              <span>Выберите файл</span>
          </label>
        </div>
      </div>

      <div class="form__row form__row--controls">
        <input class="button" type="submit" name="taskSubmit" value="Добавить">
      </div>
    </form>
  </div>

  <div class="modal" <?php if (empty($projectModal)) print('hidden') ?>>
  <button class="modal__close" type="button" name="button">Закрыть</button>

  <h2 class="modal__heading">Добавление проекта</h2>

  <form class="form"  action="index.php" method="post">
    <div class="form__row">
      <label class="form__label" for="project_name">Название <sup>*</sup></label>


      <input class="form__input" type="text" name="name" id="project_name" value="" placeholder="Введите название проекта">
      <p class="form__message"><?php if (isset($error)) print($error) ?></p>

    </div>

    <div class="form__row form__row--controls">
      <input class="button" type="submit" name="projectSubmit" value="Добавить">
    </div>
  </form>
</div>