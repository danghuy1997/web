<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comment->comment_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comment->comment_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comment form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Edit Comment') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('avata_username');
            echo $this->Form->control('detail_comment');
            echo $this->Form->control('day');
            echo $this->Form->control('time');
            echo $this->Form->control('email');
            echo $this->Form->control('website');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
