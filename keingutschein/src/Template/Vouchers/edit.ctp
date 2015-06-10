<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $voucher->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $voucher->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vouchers'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="vouchers form large-10 medium-9 columns">
    <?= $this->Form->create($voucher) ?>
    <fieldset>
        <legend><?= __('Edit Voucher') ?></legend>
        <?php
            echo $this->Form->input('password');
            echo $this->Form->input('active');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('css_icon_class');
            echo $this->Form->input('date_valid_until');
            echo $this->Form->input('date_to_redeem');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
