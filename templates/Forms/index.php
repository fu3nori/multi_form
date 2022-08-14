<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Form $form
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Forms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="forms form content">
            <?= $this->Form->create($form) ?>
            <fieldset>
                <legend><?= __('Add Form') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('question_01');
                echo $this->Form->control('question_02');
                echo $this->Form->control('question_03');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
