<div class="col-xs-6">
    <?php $__env->startComponent('components.widget'); ?>
        <table class="table table-striped">
            <tr>
                <th><?php echo e(__('report.opening_stock'), false); ?> <br><small class="text-muted">(<?php echo app('translator')->getFromJson('lang_v1.by_purchase_price'); ?>)</small>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['opening_stock'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('report.opening_stock'), false); ?> <br><small class="text-muted">(<?php echo app('translator')->getFromJson('lang_v1.by_sale_price'); ?>)</small>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['opening_stock_by_sp'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('home.total_purchase'), false); ?>:<br><small class="text-muted">(<?php echo app('translator')->getFromJson('product.exc_of_tax'); ?>, <?php echo app('translator')->getFromJson('sale.discount'); ?>)</small></th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_purchase'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('report.total_stock_adjustment'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_adjustment'], false); ?></span>
                </td>
            </tr> 
            <tr>
                <th><?php echo e(__('report.total_expense'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_expense'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_purchase_shipping_charge'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_purchase_shipping_charge'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_transfer_shipping_charge'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_transfer_shipping_charges'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_sell_discount'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_sell_discount'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_reward_amount'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_reward_amount'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_sell_return'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_sell_return'], false); ?></span>
                </td>
            </tr>
            <?php $__currentLoopData = $data['left_side_module_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($module_data['label'], false); ?>:</th>
                    <td>
                        <span class="display_currency" data-currency_symbol="true"><?php echo e($module_data['value'], false); ?></span>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php echo $__env->renderComponent(); ?>
</div>

<div class="col-xs-6">
    <?php $__env->startComponent('components.widget'); ?>
        <table class="table table-striped">
            <tr>
                <th><?php echo e(__('report.closing_stock'), false); ?> <br><small class="text-muted">(<?php echo app('translator')->getFromJson('lang_v1.by_purchase_price'); ?>)</small>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['closing_stock'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('report.closing_stock'), false); ?> <br><small class="text-muted">(<?php echo app('translator')->getFromJson('lang_v1.by_sale_price'); ?>)</small>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['closing_stock_by_sp'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('home.total_sell'), false); ?>: <br>
                    <!-- sub type for total sales -->
                    <?php if(count($data['total_sell_by_subtype']) > 1): ?>
                    <ul>
                        <?php $__currentLoopData = $data['total_sell_by_subtype']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <span class="display_currency" data-currency_symbol="true">
                                    <?php echo e($sell->total_before_tax, false); ?>    
                                </span>
                                <?php if(!empty($sell->sub_type)): ?>
                                    &nbsp;<small class="text-muted">(<?php echo e(ucfirst($sell->sub_type), false); ?>)</small>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                    <small class="text-muted"> 
                        (<?php echo app('translator')->getFromJson('product.exc_of_tax'); ?>, <?php echo app('translator')->getFromJson('sale.discount'); ?>)
                    </small>
                </th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_sell'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_sell_shipping_charge'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_sell_shipping_charge'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('report.total_stock_recovered'), false); ?>:</th>
                <td>
                     <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_recovered'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_purchase_return'), false); ?>:</th>
                <td>
                     <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_purchase_return'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_purchase_discount'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_purchase_discount'], false); ?></span>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('lang_v1.total_sell_round_off'), false); ?>:</th>
                <td>
                    <span class="display_currency" data-currency_symbol="true"><?php echo e($data['total_sell_round_off'], false); ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                &nbsp;
                </td>
            </tr>
            <?php $__currentLoopData = $data['right_side_module_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($module_data['label'], false); ?>:</th>
                    <td>
                        <span class="display_currency" data-currency_symbol="true"><?php echo e($module_data['value'], false); ?></span>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php echo $__env->renderComponent(); ?>
</div>
<br>
<div class="col-xs-12">
    <?php $__env->startComponent('components.widget'); ?>
        <h3 class="text-muted mb-0">
            <?php echo e(__('lang_v1.gross_profit'), false); ?>: 
            <span class="display_currency" data-currency_symbol="true"><?php echo e($data['gross_profit'], false); ?></span>
        </h3>
        <small class="help-block">
            (<?php echo app('translator')->getFromJson('lang_v1.total_sell_price'); ?> - <?php echo app('translator')->getFromJson('lang_v1.total_purchase_price'); ?>)
            <?php if(!empty($data['gross_profit_label'])): ?>
                + <?php echo e($data['gross_profit_label'], false); ?>

            <?php endif; ?>
        </small>

        <h3 class="text-muted mb-0">
            <?php echo e(__('report.net_profit'), false); ?>: 
            <span class="display_currency" data-currency_symbol="true"><?php echo e($data['net_profit'], false); ?></span>
        </h3>
        <small class="help-block"><?php echo app('translator')->getFromJson('lang_v1.gross_profit'); ?> + (<?php echo app('translator')->getFromJson('lang_v1.total_sell_shipping_charge'); ?> + <?php echo app('translator')->getFromJson('report.total_stock_recovered'); ?> + <?php echo app('translator')->getFromJson('lang_v1.total_purchase_discount'); ?> + <?php echo app('translator')->getFromJson('lang_v1.total_sell_round_off'); ?> 
        <?php $__currentLoopData = $data['right_side_module_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!empty($module_data['add_to_net_profit'])): ?>
                + <?php echo e($module_data['label'], false); ?> 
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ) <br> - ( <?php echo app('translator')->getFromJson('report.total_stock_adjustment'); ?> + <?php echo app('translator')->getFromJson('report.total_expense'); ?> + <?php echo app('translator')->getFromJson('lang_v1.total_purchase_shipping_charge'); ?> + <?php echo app('translator')->getFromJson('lang_v1.total_transfer_shipping_charge'); ?> + <?php echo app('translator')->getFromJson('lang_v1.total_sell_discount'); ?> + <?php echo app('translator')->getFromJson('lang_v1.total_reward_amount'); ?> 
        <?php $__currentLoopData = $data['left_side_module_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!empty($module_data['add_to_net_profit'])): ?>
                + <?php echo e($module_data['label'], false); ?>

            <?php endif; ?> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> )</small>
    <?php echo $__env->renderComponent(); ?>
</div><?php /**PATH /home/admin/web/pos.shoppersbill.com/public_html/resources/views/report/partials/profit_loss_details.blade.php ENDPATH**/ ?>