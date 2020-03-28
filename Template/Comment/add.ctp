<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comment form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Add Comment') ?></legend>
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
<div class="comment-form">
    <h3>Viết đánh giá</h3>
    <?= $this->Form->create() ?>
    <!-- <form action="#" method="post" id="comment_form"> -->
        <div class="row mb-3">
            <div class="form-group col-12 col-sm-12 col-md-12">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('detail_comment'); ?>"></label>
                <textarea id="comment" placeholder="Nội dung đánh giá *" name="comment" class="form-control" required=""></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="form-group col-12 col-sm-12 col-md-4">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('username'); ?>"></label>
                <input type="text" class="form-control" id="com-name" placeholder="Họ Tên *" required="">
            </div>
            <div class="form-group col-12 col-sm-12 col-md-4">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('email'); ?>"></label>
                <input type="email" class="form-control" id="com-email" placeholder="Email *" required="">
            </div>
            <div class="form-group col-12 col-sm-12 col-md-4">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('website'); ?>"></label>
                <input type="email" class="form-control" id="com-website" placeholder="Website" required="">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-12 col-sm-12 col-md-12 mb0">
                <!-- <input name="submit" type="submit" id="submit_my_comment" class="btn btn-secondary" value="Đánh giá"> -->
                <?= $this->Form->button(__('Đánh giá')) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
    <!-- </form> -->
</div>