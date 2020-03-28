<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->comment_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->comment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->comment_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comment view large-9 medium-8 columns content">
    <h3><?= h($comment->comment_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($comment->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avata Username') ?></th>
            <td><?= h($comment->avata_username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detail Comment') ?></th>
            <td><?= h($comment->detail_comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($comment->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($comment->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment Id') ?></th>
            <td><?= $this->Number->format($comment->comment_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($comment->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day') ?></th>
            <td><?= h($comment->day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($comment->time) ?></td>
        </tr>
    </table>
</div>
