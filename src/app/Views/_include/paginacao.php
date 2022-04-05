<?php
use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
 $pager->setSurroundCount(2);
?>
<ul class="pagination pagination-sm m-0 float-right">
  <?php if ($pager->hasPrevious()) : ?>
    <li class="page-item">
      <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">«</a>
    </li>
  <?php endif ?>

  <?php foreach ($pager->links() as $link) : ?>
    <li <?= $link['active'] ? 'class="page-item active"' : 'class="page-item"' ?>>
      <a class="page-link" href="<?= $link['uri'] ?>">
        <?= $link['title'] ?>
      </a>
    </li>
  <?php endforeach ?>

  <?php if ($pager->hasNext()) : ?>
    <li class="page-item">
      <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">»</a>
    </li>
  <?php endif ?>
</ul>