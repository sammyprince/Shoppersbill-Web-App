<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
  <?php
    $form_id = 'contact_add_form';
    if(isset($quick_add)){
      $form_id = 'quick_add_contact';
    }

    if(isset($store_action)) {
      $url = $store_action;
      $type = 'lead';
      $customer_groups = [];
    } else {
      $url = action('ContactController@store');
      $type = isset($selected_type) ? $selected_type : '';
      $sources = [];
      $life_stages = [];
      $users = [];
    }
  ?>
    <?php echo Form::open(['url' => $url, 'method' => 'post', 'id' => $form_id ]); ?>


    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title"><?php echo app('translator')->getFromJson('contact.add_contact'); ?></h4>
    </div>

    <div class="modal-body">
        <div class="row">            

            <div class="col-md-4 contact_type_div">
                <div class="form-group">
                    <?php echo Form::label('type', __('contact.contact_type') . ':*' ); ?>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <?php echo Form::select('type', $types, $type , ['class' => 'form-control', 'id' => 'contact_type','placeholder' => __('messages.please_select'), 'required']);; ?>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <?php echo Form::label('contact_id', __('lang_v1.contact_id') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-id-badge"></i>
                    </span>
                    <?php echo Form::text('contact_id', null, ['class' => 'form-control','placeholder' => __('lang_v1.contact_id')]);; ?>

                </div>
            </div>
        </div>
        <div class="col-md-4 customer_fields">
            <div class="form-group">
              <?php echo Form::label('customer_group_id', __('lang_v1.customer_group') . ':'); ?>

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fa fa-users"></i>
                  </span>
                  <?php echo Form::select('customer_group_id', $customer_groups, '', ['class' => 'form-control']);; ?>

              </div>
            </div>
        </div>

        <div class="col-md-4 supplier_fields">
            <div class="form-group">
                <?php echo Form::label('supplier_business_name', __('business.business_name') . ':*'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-briefcase"></i>
                    </span>
                    <?php echo Form::text('supplier_business_name', null, ['class' => 'form-control', 'required', 'placeholder' => __('business.business_name')]);; ?>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('prefix', __( 'business.prefix' ) . ':'); ?>

                <?php echo Form::text('prefix', null, ['class' => 'form-control', 'placeholder' => __( 'business.prefix_placeholder' ) ]);; ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('first_name', __( 'business.first_name' ) . ':*'); ?>

                <?php echo Form::text('first_name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'business.first_name' ) ]);; ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('middle_name', __( 'lang_v1.middle_name' ) . ':'); ?>

                <?php echo Form::text('middle_name', null, ['class' => 'form-control', 'placeholder' => __( 'lang_v1.middle_name' ) ]);; ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('last_name', __( 'business.last_name' ) . ':'); ?>

                <?php echo Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => __( 'business.last_name' ) ]);; ?>

            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('mobile', __('contact.mobile') . ':*'); ?>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-mobile"></i>
                </span>
                <?php echo Form::text('mobile', null, ['class' => 'form-control', 'required', 'placeholder' => __('contact.mobile')]);; ?>

            </div>
        </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('alternate_number', __('contact.alternate_contact_number') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </span>
                    <?php echo Form::text('alternate_number', null, ['class' => 'form-control', 'placeholder' => __('contact.alternate_contact_number')]);; ?>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('landline', __('contact.landline') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </span>
                    <?php echo Form::text('landline', null, ['class' => 'form-control', 'placeholder' => __('contact.landline')]);; ?>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('email', __('business.email') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <?php echo Form::email('email', null, ['class' => 'form-control','placeholder' => __('business.email')]);; ?>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <?php echo Form::label('dob', __('lang_v1.dob') . ':'); ?>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                    
                    <?php echo Form::text('dob', null, ['class' => 'form-control dob-date-picker','placeholder' => __('lang_v1.dob'), 'readonly']);; ?>

                </div>
            </div>
        </div>

        <!-- lead additional field -->
        <div class="col-md-4 lead_additional_div">
          <div class="form-group">
              <?php echo Form::label('crm_source', __('lang_v1.source') . ':' ); ?>

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fas fa fa-search"></i>
                  </span>
                  <?php echo Form::select('crm_source', $sources, null , ['class' => 'form-control', 'id' => 'crm_source','placeholder' => __('messages.please_select')]);; ?>

              </div>
          </div>
        </div>
        
        <div class="col-md-4 lead_additional_div">
          <div class="form-group">
              <?php echo Form::label('crm_life_stage', __('lang_v1.life_stage') . ':' ); ?>

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fas fa fa-life-ring"></i>
                  </span>
                  <?php echo Form::select('crm_life_stage', $life_stages, null , ['class' => 'form-control', 'id' => 'crm_life_stage','placeholder' => __('messages.please_select')]);; ?>

              </div>
          </div>
        </div>
        <div class="col-md-6 lead_additional_div">
          <div class="form-group">
              <?php echo Form::label('user_id', __('lang_v1.assigned_to') . ':*' ); ?>

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fa fa-user"></i>
                  </span>
                  <?php echo Form::select('user_id[]', $users, null , ['class' => 'form-control select2', 'id' => 'user_id', 'multiple', 'required', 'style' => 'width: 100%;']);; ?>

              </div>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-12">
            <button type="button" class="btn btn-primary center-block" id="more_btn"><?php echo app('translator')->getFromJson('lang_v1.more_info'); ?> <i class="fa fa-chevron-down"></i></button>
        </div>

        <div id="more_div" class="hide">

            <div class="col-md-12"><hr/></div>

        <div class="col-md-4">
            <div class="form-group">
              <?php echo Form::label('tax_number', __('contact.tax_no') . ':'); ?>

                <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fa fa-info"></i>
                  </span>
                  <?php echo Form::text('tax_number', null, ['class' => 'form-control', 'placeholder' => __('contact.tax_no')]);; ?>

                </div>
            </div>
        </div>

        <div class="col-md-4 opening_balance">
          <div class="form-group">
              <?php echo Form::label('opening_balance', __('lang_v1.opening_balance') . ':'); ?>

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fas fa-money-bill-alt"></i>
                  </span>
                  <?php echo Form::text('opening_balance', 0, ['class' => 'form-control input_number']);; ?>

              </div>
          </div>
        </div>

        <div class="col-md-4 pay_term">
          <div class="form-group">
            <div class="multi-input">
              <?php echo Form::label('pay_term_number', __('contact.pay_term') . ':'); ?> <?php
                if(session('business.enable_tooltip')){
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('tooltip.pay_term') . '" data-html="true" data-trigger="hover"></i>';
                }
                ?>
              <br/>
              <?php echo Form::number('pay_term_number', null, ['class' => 'form-control width-40 pull-left', 'placeholder' => __('contact.pay_term')]);; ?>


              <?php echo Form::select('pay_term_type', ['months' => __('lang_v1.months'), 'days' => __('lang_v1.days')], '', ['class' => 'form-control width-60 pull-left','placeholder' => __('messages.please_select')]);; ?>

            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="col-md-4 customer_fields">
          <div class="form-group">
              <?php echo Form::label('credit_limit', __('lang_v1.credit_limit') . ':'); ?>

              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="fas fa-money-bill-alt"></i>
                  </span>
                  <?php echo Form::text('credit_limit', null, ['class' => 'form-control input_number']);; ?>

              </div>
              <p class="help-block"><?php echo app('translator')->getFromJson('lang_v1.credit_limit_help'); ?></p>
          </div>
        </div>
        

        <div class="col-md-12"><hr/></div>
        <div class="clearfix"></div>
        
        <div class="col-md-6">
            <div class="form-group">
                <?php echo Form::label('address_line_1', __('lang_v1.address_line_1') . ':'); ?>

                <?php echo Form::text('address_line_1', null, ['class' => 'form-control', 'placeholder' => __('lang_v1.address_line_1'), 'rows' => 3]);; ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php echo Form::label('address_line_2', __('lang_v1.address_line_2') . ':'); ?>

                <?php echo Form::text('address_line_2', null, ['class' => 'form-control', 'placeholder' => __('lang_v1.address_line_2'), 'rows' => 3]);; ?>

            </div>
        </div>
      <div class="clearfix"></div>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('city', __('business.city') . ':'); ?>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                </span>
                <?php echo Form::text('city', null, ['class' => 'form-control', 'placeholder' => __('business.city')]);; ?>

            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('state', __('business.state') . ':'); ?>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                </span>
                <?php echo Form::text('state', null, ['class' => 'form-control', 'placeholder' => __('business.state')]);; ?>

            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('country', __('business.country') . ':'); ?>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-globe"></i>
                </span>
                <?php echo Form::text('country', null, ['class' => 'form-control', 'placeholder' => __('business.country')]);; ?>

            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('zip_code', __('business.zip_code') . ':'); ?>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                </span>
                <?php echo Form::text('zip_code', null, ['class' => 'form-control', 
                'placeholder' => __('business.zip_code_placeholder')]);; ?>

            </div>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="col-md-12">
        <hr/>
      </div>
      <?php
        $custom_labels = json_decode(session('business.custom_labels'), true);
        $contact_custom_field1 = !empty($custom_labels['contact']['custom_field_1']) ? $custom_labels['contact']['custom_field_1'] : __('lang_v1.contact_custom_field1');
        $contact_custom_field2 = !empty($custom_labels['contact']['custom_field_2']) ? $custom_labels['contact']['custom_field_2'] : __('lang_v1.contact_custom_field2');
        $contact_custom_field3 = !empty($custom_labels['contact']['custom_field_3']) ? $custom_labels['contact']['custom_field_3'] : __('lang_v1.contact_custom_field3');
        $contact_custom_field4 = !empty($custom_labels['contact']['custom_field_4']) ? $custom_labels['contact']['custom_field_4'] : __('lang_v1.contact_custom_field4');
      ?>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('custom_field1', $contact_custom_field1 . ':'); ?>

            <?php echo Form::text('custom_field1', null, ['class' => 'form-control', 
                'placeholder' => __('lang_v1.contact_custom_field1')]);; ?>

        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('custom_field2', $contact_custom_field2 . ':'); ?>

            <?php echo Form::text('custom_field2', null, ['class' => 'form-control', 
                'placeholder' => $contact_custom_field2]);; ?>

        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('custom_field3', $contact_custom_field3 . ':'); ?>

            <?php echo Form::text('custom_field3', null, ['class' => 'form-control', 
                'placeholder' => $contact_custom_field3]);; ?>

        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <?php echo Form::label('custom_field4', $contact_custom_field4 . ':'); ?>

            <?php echo Form::text('custom_field4', null, ['class' => 'form-control', 
                'placeholder' => $contact_custom_field4]);; ?>

        </div>
      </div>
      <div class="col-md-12 shipping_addr_div"><hr></div>
      <div class="col-md-8 col-md-offset-2 shipping_addr_div" >
          <strong><?php echo e(__('lang_v1.shipping_address'), false); ?></strong><br>
          <?php echo Form::text('shipping_address', null, ['class' => 'form-control', 
                'placeholder' => __('lang_v1.search_address'), 'id' => 'shipping_address']);; ?>

        <div id="map"></div>
      </div>
      <?php echo Form::hidden('position', null, ['id' => 'position']);; ?>


      </div>
      </div>
    </div>
    
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary"><?php echo app('translator')->getFromJson( 'messages.save' ); ?></button>
      <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo app('translator')->getFromJson( 'messages.close' ); ?></button>
    </div>

    <?php echo Form::close(); ?>

  
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog --><?php /**PATH /home/admin/web/pos.shoppersbill.com/public_html/resources/views/contact/create.blade.php ENDPATH**/ ?>