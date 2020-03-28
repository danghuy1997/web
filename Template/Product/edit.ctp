<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->product_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->product_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Product'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Catalog'), ['controller' => 'Catalog', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Catalog'), ['controller' => 'Catalog', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="product form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('catalog_id', ['options' => $catalog]);
            echo $this->Form->control('store_id');
            echo $this->Form->control('product_name');
            echo $this->Form->control('image');
            echo $this->Form->control('image1');
            echo $this->Form->control('image2');
            echo $this->Form->control('price');
            echo $this->Form->control('price1');
            echo $this->Form->control('describe');
            echo $this->Form->control('detail');
            echo $this->Form->control('trademark');
            echo $this->Form->control('species');
            echo $this->Form->control('view');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
