<h1>Админка</h1>
<a href="/web/admin/default/create" class="btn btn-primary">Создать</a>
<table class="table">
  <thead>
    <tr>
      <td>#</td>
      <td>Название</td>
      <td>Действие</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($model as $item): ?>
      <tr>
        <td><?=$item->id?></td>
        <td><?=$item->title?></td>
        <td>
          <a href="/web/admin/default/edit/<?=$item->id?>">Редактировать</a>

          <a href="/web/admin/default/delete/<?=$item->id?>">Удалить</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>

</table>
