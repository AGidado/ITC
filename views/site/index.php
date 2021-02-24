<?php
use yii\helpers\Html;
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Expense Date</th>
      <th scope="col">Expense Value</th>
      <th scope="col">Expense Reason</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>
        <span><?= Html::a('View') ?></span>
        <span><?= Html::a('Edit') ?></span>
        <span><?= Html::a('Delete') ?></span>
      </td>
    </tr>
  </tbody>
</table>