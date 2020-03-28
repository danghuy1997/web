<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment[]|\Cake\Collection\CollectionInterface $comment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comment index large-9 medium-8 columns content">
    <h3><?= __('Comment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('comment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avata_username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('detail_comment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comment as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->comment_id) ?></td>
                <td><?= h($comment->username) ?></td>
                <td><?= h($comment->avata_username) ?></td>
                <td><?= h($comment->detail_comment) ?></td>
                <td><?= h($comment->day) ?></td>
                <td><?= h($comment->time) ?></td>
                <td><?= h($comment->email) ?></td>
                <td><?= h($comment->website) ?></td>
                <td><?= $this->Number->format($comment->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comment->comment_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->comment_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->comment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->comment_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
