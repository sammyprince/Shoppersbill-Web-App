<div class="pos-tab-content">
     <div class="row">
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_custom_payments'); ?>:</h4>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('custom_payment_1_label', __('lang_v1.custom_payment_1'));; ?>

                <?php echo Form::text('custom_labels[payments][custom_pay_1]', !empty($custom_labels['payments']['custom_pay_1']) ? $custom_labels['payments']['custom_pay_1'] : null, 
                    ['class' => 'form-control', 'id' => 'custom_payment_1']);; ?>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('custom_payment_2_label', __('lang_v1.custom_payment_2'));; ?>

                <?php echo Form::text('custom_labels[payments][custom_pay_2]', !empty($custom_labels['payments']['custom_pay_2']) ? $custom_labels['payments']['custom_pay_2'] : null, 
                    ['class' => 'form-control', 'id' => 'custom_payment_2']);; ?>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('custom_payment_3_label', __('lang_v1.custom_payment_3'));; ?>

                <?php echo Form::text('custom_labels[payments][custom_pay_3]', !empty($custom_labels['payments']['custom_pay_3']) ? $custom_labels['payments']['custom_pay_3'] : null, 
                    ['class' => 'form-control', 'id' => 'custom_payment_3']);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_contact_custom_fields'); ?>:</h4>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('contact_custom_field_1_label', __('lang_v1.contact_custom_field1'));; ?>

                <?php echo Form::text('custom_labels[contact][custom_field_1]', !empty($custom_labels['contact']['custom_field_1']) ? $custom_labels['contact']['custom_field_1'] : null, 
                    ['class' => 'form-control', 'id' => 'contact_custom_field_1_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('contact_custom_field_2_label', __('lang_v1.contact_custom_field2'));; ?>

                <?php echo Form::text('custom_labels[contact][custom_field_2]', !empty($custom_labels['contact']['custom_field_2']) ? $custom_labels['contact']['custom_field_2'] : null, 
                    ['class' => 'form-control', 'id' => 'contact_custom_field_2_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('contact_custom_field_3_label', __('lang_v1.contact_custom_field3'));; ?>

                <?php echo Form::text('custom_labels[contact][custom_field_3]', !empty($custom_labels['contact']['custom_field_3']) ? $custom_labels['contact']['custom_field_3'] : null, 
                    ['class' => 'form-control', 'id' => 'contact_custom_field_3_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('contact_custom_field_4_label', __('lang_v1.contact_custom_field4'));; ?>

                <?php echo Form::text('custom_labels[contact][custom_field_4]', !empty($custom_labels['contact']['custom_field_4']) ? $custom_labels['contact']['custom_field_4'] : null, 
                    ['class' => 'form-control', 'id' => 'contact_custom_field_4_label']);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_product_custom_fields'); ?>:</h4>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('product_custom_field_1_label', __('lang_v1.product_custom_field1'));; ?>

                <?php echo Form::text('custom_labels[product][custom_field_1]', !empty($custom_labels['product']['custom_field_1']) ? $custom_labels['product']['custom_field_1'] : null, 
                    ['class' => 'form-control', 'id' => 'product_custom_field_1_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('product_custom_field_2_label', __('lang_v1.product_custom_field2'));; ?>

                <?php echo Form::text('custom_labels[product][custom_field_2]', !empty($custom_labels['product']['custom_field_2']) ? $custom_labels['product']['custom_field_2'] : null, 
                    ['class' => 'form-control', 'id' => 'product_custom_field_2_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('product_custom_field_3_label', __('lang_v1.product_custom_field3'));; ?>

                <?php echo Form::text('custom_labels[product][custom_field_3]', !empty($custom_labels['product']['custom_field_3']) ? $custom_labels['product']['custom_field_3'] : null, 
                    ['class' => 'form-control', 'id' => 'product_custom_field_3_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('product_custom_field_4_label', __('lang_v1.product_custom_field4'));; ?>

                <?php echo Form::text('custom_labels[product][custom_field_4]', !empty($custom_labels['product']['custom_field_4']) ? $custom_labels['product']['custom_field_4'] : null, 
                    ['class' => 'form-control', 'id' => 'product_custom_field_4_label']);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_location_custom_fields'); ?>:</h4>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('location_custom_field_1_label', __('lang_v1.location_custom_field1'));; ?>

                <?php echo Form::text('custom_labels[location][custom_field_1]', !empty($custom_labels['location']['custom_field_1']) ? $custom_labels['location']['custom_field_1'] : null, 
                    ['class' => 'form-control', 'id' => 'location_custom_field_1_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('location_custom_field_2_label', __('lang_v1.location_custom_field2'));; ?>

                <?php echo Form::text('custom_labels[location][custom_field_2]', !empty($custom_labels['location']['custom_field_2']) ? $custom_labels['location']['custom_field_2'] : null, 
                    ['class' => 'form-control', 'id' => 'location_custom_field_2_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('location_custom_field_3_label', __('lang_v1.location_custom_field3'));; ?>

                <?php echo Form::text('custom_labels[location][custom_field_3]', !empty($custom_labels['location']['custom_field_3']) ? $custom_labels['location']['custom_field_3'] : null, 
                    ['class' => 'form-control', 'id' => 'location_custom_field_3_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('location_custom_field_4_label', __('lang_v1.location_custom_field4'));; ?>

                <?php echo Form::text('custom_labels[location][custom_field_4]', !empty($custom_labels['location']['custom_field_4']) ? $custom_labels['location']['custom_field_4'] : null, 
                    ['class' => 'form-control', 'id' => 'location_custom_field_4_label']);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_user_custom_fields'); ?>:</h4>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('user_custom_field_1_label', __('lang_v1.user_custom_field1'));; ?>

                <?php echo Form::text('custom_labels[user][custom_field_1]', !empty($custom_labels['user']['custom_field_1']) ? $custom_labels['user']['custom_field_1'] : null, 
                    ['class' => 'form-control', 'id' => 'user_custom_field_1_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('user_custom_field_2_label', __('lang_v1.user_custom_field2'));; ?>

                <?php echo Form::text('custom_labels[user][custom_field_2]', !empty($custom_labels['user']['custom_field_2']) ? $custom_labels['user']['custom_field_2'] : null, 
                    ['class' => 'form-control', 'id' => 'user_custom_field_2_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('user_custom_field_3_label', __('lang_v1.user_custom_field3'));; ?>

                <?php echo Form::text('custom_labels[user][custom_field_3]', !empty($custom_labels['user']['custom_field_3']) ? $custom_labels['user']['custom_field_3'] : null, 
                    ['class' => 'form-control', 'id' => 'user_custom_field_3_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('user_custom_field_4_label', __('lang_v1.user_custom_field4'));; ?>

                <?php echo Form::text('custom_labels[user][custom_field_4]', !empty($custom_labels['user']['custom_field_4']) ? $custom_labels['user']['custom_field_4'] : null, 
                    ['class' => 'form-control', 'id' => 'user_custom_field_4_label']);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_purchase_custom_fields'); ?>:</h4>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('purchase_custom_field_1_label', __('lang_v1.product_custom_field1'));; ?>

                <?php echo Form::text('custom_labels[purchase][custom_field_1]', !empty($custom_labels['purchase']['custom_field_1']) ? $custom_labels['purchase']['custom_field_1'] : null, 
                    ['class' => 'form-control', 'id' => 'purchase_custom_field_1_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('purchase_custom_field_2_label', __('lang_v1.product_custom_field2'));; ?>

                <?php echo Form::text('custom_labels[purchase][custom_field_2]', !empty($custom_labels['purchase']['custom_field_2']) ? $custom_labels['purchase']['custom_field_2'] : null, 
                    ['class' => 'form-control', 'id' => 'purchase_custom_field_2_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('purchase_custom_field_3_label', __('lang_v1.product_custom_field3'));; ?>

                <?php echo Form::text('custom_labels[purchase][custom_field_3]', !empty($custom_labels['purchase']['custom_field_3']) ? $custom_labels['purchase']['custom_field_3'] : null, 
                    ['class' => 'form-control', 'id' => 'purchase_custom_field_3_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('purchase_custom_field_4_label', __('lang_v1.product_custom_field4'));; ?>

                <?php echo Form::text('custom_labels[purchase][custom_field_4]', !empty($custom_labels['purchase']['custom_field_4']) ? $custom_labels['purchase']['custom_field_4'] : null, 
                    ['class' => 'form-control', 'id' => 'purchase_custom_field_4_label']);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_sell_custom_fields'); ?>:</h4>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('sell_custom_field_1_label', __('lang_v1.product_custom_field1'));; ?>

                <?php echo Form::text('custom_labels[sell][custom_field_1]', !empty($custom_labels['sell']['custom_field_1']) ? $custom_labels['sell']['custom_field_1'] : null, 
                    ['class' => 'form-control', 'id' => 'sell_custom_field_1_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('sell_custom_field_2_label', __('lang_v1.product_custom_field2'));; ?>

                <?php echo Form::text('custom_labels[sell][custom_field_2]', !empty($custom_labels['sell']['custom_field_2']) ? $custom_labels['sell']['custom_field_2'] : null, 
                    ['class' => 'form-control', 'id' => 'sell_custom_field_2_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('sell_custom_field_3_label', __('lang_v1.product_custom_field3'));; ?>

                <?php echo Form::text('custom_labels[sell][custom_field_3]', !empty($custom_labels['sell']['custom_field_3']) ? $custom_labels['sell']['custom_field_3'] : null, 
                    ['class' => 'form-control', 'id' => 'sell_custom_field_3_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('sell_custom_field_4_label', __('lang_v1.product_custom_field4'));; ?>

                <?php echo Form::text('custom_labels[sell][custom_field_4]', !empty($custom_labels['sell']['custom_field_4']) ? $custom_labels['sell']['custom_field_4'] : null, 
                    ['class' => 'form-control', 'id' => 'sell_custom_field_4_label']);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <h4><?php echo app('translator')->getFromJson('lang_v1.labels_for_types_of_service_custom_fields'); ?>:</h4>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('types_of_service_custom_field_1_label', __('lang_v1.service_custom_field_1'));; ?>

                <?php echo Form::text('custom_labels[types_of_service][custom_field_1]', !empty($custom_labels['types_of_service']['custom_field_1']) ? $custom_labels['types_of_service']['custom_field_1'] : null, 
                    ['class' => 'form-control', 'id' => 'types_of_service_custom_field_1_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('types_of_service_custom_field_2_label', __('lang_v1.service_custom_field_2'));; ?>

                <?php echo Form::text('custom_labels[types_of_service][custom_field_2]', !empty($custom_labels['types_of_service']['custom_field_2']) ? $custom_labels['types_of_service']['custom_field_2'] : null, 
                    ['class' => 'form-control', 'id' => 'types_of_service_custom_field_2_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('types_of_service_custom_field_3_label', __('lang_v1.service_custom_field_3'));; ?>

                <?php echo Form::text('custom_labels[types_of_service][custom_field_3]', !empty($custom_labels['types_of_service']['custom_field_3']) ? $custom_labels['types_of_service']['custom_field_3'] : null, 
                    ['class' => 'form-control', 'id' => 'types_of_service_custom_field_3_label']);; ?>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <?php echo Form::label('types_of_service_custom_field_4_label', __('lang_v1.service_custom_field_4'));; ?>

                <?php echo Form::text('custom_labels[types_of_service][custom_field_4]', !empty($custom_labels['types_of_service']['custom_field_4']) ? $custom_labels['types_of_service']['custom_field_4'] : null, 
                    ['class' => 'form-control', 'id' => 'types_of_service_custom_field_4_label']);; ?>

            </div>
        </div>
    </div>
</div><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/business/partials/settings_custom_labels.blade.php ENDPATH**/ ?>