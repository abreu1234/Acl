<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permission->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Permission'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="permission form large-9 medium-8 columns content">
    <?= $this->Form->create($permission) ?>
    <fieldset>
        <legend><?= __('Edit Permission') ?></legend>
        <?php
            echo $this->Form->input('controller');
            echo $this->Form->input('action');
            echo $this->Form->input('controller_action');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>