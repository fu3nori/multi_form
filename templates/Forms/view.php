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
            <?= $this->Html->link(__('Edit Form'), ['action' => 'edit', $form->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Form'), ['action' => 'delete', $form->id], ['confirm' => __('Are you sure you want to delete # {0}?', $form->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Forms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Form'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="forms view content">
            <h3><?= h($form->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($form->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($form->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Question 01') ?></th>
                    <td><?= h($form->question_01) ?></td>
                </tr>
                <tr>
                    <th><?= __('Question 02') ?></th>
                    <td><?= h($form->question_02) ?></td>
                </tr>
                <tr>
                    <th><?= __('Question 03') ?></th>
                    <td><?= h($form->question_03) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($form->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($form->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($form->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
