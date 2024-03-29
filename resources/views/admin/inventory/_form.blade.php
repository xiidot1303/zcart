<div class="row">
  <div class="col-md-8">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">
          {{ isset($inventory) ? trans('app.update_inventory') : trans('app.add_inventory') }}
          @if ($product->downloadable)
            ({{ trans('app.digital_product') }})
          @endif
        </h3>
        <div class="box-tools pull-right">
          {{-- @can('delete', $inventory)
            {!! Form::open(['route' => ['admin.stock.inventory.trash', $inventory->id], 'method' => 'delete', 'class' => 'data-form']) !!}
              {!! Form::button('<i class="fa fa-trash-o"></i> ' . trans('app.trash'), ['type' => 'submit', 'class' => 'confirm ajax-silent btn btn-new btn-flat', 'title' => trans('app.trash'), 'data-toggle' => 'tooltip', 'data-placement' => 'top']) !!}
            {!! Form::close() !!}
          @endcan --}}
        </div>
      </div> <!-- /.box-header -->
      <div class="box-body">
        @include('admin.partials._product_widget')

        @php
          if (isset($inventory)) {
              $product = $inventory->product;
          }
          
          $requires_shipping = $product->requires_shipping || (isset($inventory) && $inventory->product->requires_shipping);
          
          $title_classes = isset($inventory) ? 'form-control' : 'form-control makeSlug';
        @endphp

        {{ Form::hidden('product_id', $product->id) }}
        {{ Form::hidden('brand', $product->brand) }}

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              {!! Form::label('title', trans('app.form.title') . '*') !!}
              {!! Form::text('title', null, ['class' => $title_classes, 'placeholder' => trans('app.placeholder.title'), 'required']) !!}
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="col-md-{{ config('system_settings.show_item_conditions') ? 6 : 9 }} nopadding-right">
            <div class="form-group">
              {!! Form::label('sku', trans('app.form.sku') . '*', ['class' => 'with-help']) !!}
              <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.sku') }}"></i>
              {!! Form::text('sku', null, ['class' => 'form-control', 'placeholder' => trans('app.placeholder.sku'), 'required']) !!}
              <div class="help-block with-errors"></div>
            </div>
          </div>

          @if (config('system_settings.show_item_conditions'))
            <div class="col-md-3 nopadding">
              <div class="form-group">
                {!! Form::label('condition', trans('app.form.condition') . '*', ['class' => 'with-help']) !!}
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.seller_product_condition') }}"></i>
                {!! Form::select('condition', ['New' => trans('app.new'), 'Used' => trans('app.used'), 'Refurbished' => trans('app.refurbished')], isset($inventory) ? null : 'New', ['class' => 'form-control select2-normal', 'placeholder' => trans('app.placeholder.select'), 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
          @endif

          <div class="col-md-3 nopadding-left">
            <div class="form-group">
              {!! Form::label('active', trans('app.form.status') . '*', ['class' => 'with-help']) !!}
              <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.seller_inventory_status') }}"></i>
              {!! Form::select('active', ['1' => trans('app.active'), '0' => trans('app.inactive')], isset($inventory) ? null : 1, ['class' => 'form-control select2-normal', 'placeholder' => trans('app.placeholder.select'), 'required']) !!}
              <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>

        @include('admin.inventory._common')

        <fieldset>
          <legend>{{ trans('app.form.images') }}</legend>
          <div class="form-group">
            <div class="file-loading">
              <input id="dropzone-input" name="images[]" type="file" accept="image/*" multiple>
            </div>
            <span class="small"><i class="fa fa-info-circle"></i> {{ trans('help.multi_img_upload_instruction', ['size' => getAllowedMaxImgSize(), 'number' => getMaxNumberOfImgsForInventory()]) }}</span>
          </div>
        </fieldset>

        <fieldset>
          <legend>{{ trans('app.inventory_rules') }}</legend>
          @if ($requires_shipping && !$product->downloadable)
            <div class="row">
              <div class="col-md-6 nopadding-right">
                <div class="form-group">
                  {!! Form::label('stock_quantity', trans('app.form.stock_quantity') . '*', ['class' => 'with-help']) !!}
                  <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.stock_quantity') }}"></i>
                  {!! Form::number('stock_quantity', isset($inventory) ? null : 1, ['min' => 0, 'class' => 'form-control', 'placeholder' => trans('app.placeholder.stock_quantity'), 'required']) !!}
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-md-6 nopadding-left">
                <div class="form-group">
                  {!! Form::label('min_order_quantity', trans('app.form.min_order_quantity'), ['class' => 'with-help']) !!}
                  <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.min_order_quantity') }}"></i>
                  {!! Form::number('min_order_quantity', isset($inventory) ? null : 1, ['min' => 1, 'class' => 'form-control', 'placeholder' => trans('app.placeholder.min_order_quantity')]) !!}
                </div>
              </div>
            </div>
          @endif

          <div class="row">
            <div class="col-md-6 nopadding-right">
              <div class="form-group">
                {!! Form::label('sale_price', trans('app.form.sale_price') . '*', ['class' => 'with-help']) !!}
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.sale_price') }}"></i>
                <div class="input-group">
                  @if (get_currency_prefix())
                    <span class="input-group-addon" id="basic-addon1">
                      {{ get_currency_prefix() }}
                    </span>
                  @endif

                  {!! Form::number('sale_price', isset($inventory) ? $inventory->sale_price : null, ['class' => 'form-control', 'min' => $product->min_price, 'max' => $product->max_price ?? PHP_INT_MAX, 'step' => 'any', 'placeholder' => trans('app.placeholder.sale_price'), 'required']) !!}

                  {{-- <input name="sale_price" value="{{ isset($inventory) ? $inventory->sale_price : Null }}" type="number" min="{{ $product->min_price }}" {{ $product->max_price ? ' max="'. $product->max_price .'"' : '' }} step="any" placeholder="{{ trans('app.placeholder.sale_price') }}" class="form-control" required="required"> --}}

                  @if (get_currency_suffix())
                    <span class="input-group-addon" id="basic-addon1">
                      {{ get_currency_suffix() }}
                    </span>
                  @endif
                </div>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6 nopadding-left">
              <div class="form-group">
                {!! Form::label('offer_price', trans('app.form.offer_price'), ['class' => 'with-help']) !!}
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.offer_price') }}"></i>
                <div class="input-group">
                  @if (get_currency_prefix())
                    <span class="input-group-addon" id="basic-addon1">
                      {{ get_currency_prefix() }}
                    </span>
                  @endif

                  {!! Form::number('offer_price', null, ['class' => 'form-control', 'step' => 'any', 'placeholder' => trans('app.placeholder.offer_price')]) !!}

                  @if (get_currency_suffix())
                    <span class="input-group-addon" id="basic-addon1">
                      {{ get_currency_suffix() }}
                    </span>
                  @endif
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 nopadding-right">
              <div class="form-group">
                {!! Form::label('offer_start', trans('app.form.offer_start'), ['class' => 'with-help']) !!}
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.offer_start') }}"></i>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  {!! Form::text('offer_start', null, ['class' => 'form-control datetimepicker', 'placeholder' => trans('app.placeholder.offer_start')]) !!}
                </div>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6 nopadding-left">
              <div class="form-group">
                {!! Form::label('offer_end', trans('app.form.offer_end'), ['class' => 'with-help']) !!}
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.offer_end') }}"></i>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  {!! Form::text('offer_end', null, ['class' => 'form-control datetimepicker', 'placeholder' => trans('app.placeholder.offer_end')]) !!}
                </div>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            {!! Form::label('linked_items[]', trans('app.form.linked_items'), ['class' => 'with-help']) !!}
            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.inventory_linked_items') }}"></i>
            {!! Form::select('linked_items[]', $inventories, isset($inventory) ? unserialize($inventory->linked_items) : null, ['class' => 'form-control select2-normal', 'multiple' => 'multiple']) !!}
            <div class="help-block with-errors"></div>
          </div>
        </fieldset>

        <p class="help-block">* {{ trans('app.form.required_fields') }}</p>

        @if (isset($inventory))
          <a href="{{ route('admin.stock.inventory.index') }}" class="btn btn-default btn-flat">{{ trans('app.form.cancel_update') }}</a>
        @endif

        {!! Form::submit(trans('app.form.save'), ['class' => 'btn btn-flat btn-lg btn-new pull-right']) !!}
      </div>
    </div>
  </div><!-- /.col-md-8 -->

  <div class="col-md-4 nopadding-left">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">{{ trans('app.additional_info') }}</h3>
      </div> <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group">
          {!! Form::label('available_from', trans('app.form.available_from'), ['class' => 'with-help']) !!}
          <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.available_from') }}"></i>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            {!! Form::text('available_from', null, ['class' => 'datetimepicker form-control', 'placeholder' => trans('app.placeholder.available_from')]) !!}
          </div>
        </div>

        @if (is_incevio_package_loaded('pharmacy'))
          @include('pharmacy::inventory_form')
        @endif

        @if ($product->downloadable)
          {!! Form::hidden('stock_quantity', 1) !!}

          <ul class="mailbox-attachments clearfix pull-right">
            @if (isset($inventory))
              @foreach ($inventory->attachments as $attachment)
                <li>
                  <div class="mailbox-attachment-info">
                    <a href="{{ route('attachment.download', $attachment) }}" class="mailbox-attachment-name"><i class="fa fa-file"></i> {{ $attachment->name }}</a>
                    <span class="mailbox-attachment-size">{{ get_formated_file_size($attachment->size) }}
                      <a href="{{ route('attachment.download', $attachment) }}" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                    </span>
                  </div>
                </li>
              @endforeach
            @endif
          </ul>

          <div class="form-group">
            {!! Form::label('digital_file', trans('app.form.digital_file'), ['class' => 'with-help']) !!}
            <input type="file" name="digital_file" id="digital_file" class="form-control" required />
            <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
            {!! Form::label('download_limit', trans('app.form.download_limit'), ['class' => 'with-help']) !!}
            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.download_limit') }}"></i>
            {!! Form::number('download_limit', isset($inventory) ? $inventory->download_limit : null, ['class' => 'form-control', 'placeholder' => trans('app.placeholder.download_limit')]) !!}
            <div class="help-block with-errors"></div>
          </div>
        @endif

        @if ($requires_shipping && !$product->downloadable)
          <fieldset>
            <legend>{{ trans('app.shipping') }}</legend>
            <div class="form-group">
              <div class="input-group">
                {{ Form::hidden('free_shipping', 0) }}
                {!! Form::checkbox('free_shipping', null, null, ['id' => 'free_shipping', 'class' => 'icheckbox_line']) !!}
                {!! Form::label('free_shipping', trans('app.form.free_shipping')) !!}
                <span class="input-group-addon" id="">
                  <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.free_shipping') }}"></i>
                </span>
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('warehouse_id', trans('app.form.warehouse'), ['class' => 'with-help']) !!}
              <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.select_warehouse') }}"></i>
              {!! Form::select('warehouse_id', $warehouses, isset($inventory) ? null : config('shop_settings.default_warehouse_id'), ['class' => 'form-control select2', 'placeholder' => trans('app.placeholder.select')]) !!}
            </div>

            <div class="form-group">
              {!! Form::label('shipping_weight', trans('app.form.shipping_weight'), ['class' => 'with-help']) !!}
              <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.shipping_weight') }}"></i>
              <div class="input-group">
                {!! Form::number('shipping_weight', null, ['class' => 'form-control', 'step' => 'any', 'min' => 0, 'placeholder' => trans('app.placeholder.shipping_weight')]) !!}
                <span class="input-group-addon">{{ config('system_settings.weight_unit') ?: 'gm' }}</span>
              </div>
              <div class="help-block with-errors"></div>
            </div>

            @if (is_incevio_package_loaded('packaging'))
              <div class="form-group">
                {!! Form::label('packaging_list[]', trans('packaging::lang.packagings'), ['class' => 'with-help']) !!}
                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.select_packagings') }}"></i>
                {!! Form::select('packaging_list[]', $packagings, isset($inventory) ? null : config('shop_settings.default_packaging_ids'), ['class' => 'form-control select2-normal', 'multiple' => 'multiple']) !!}
              </div>
            @endif
          </fieldset>
        @endif

        @if ($attributes->count())
          <fieldset class="">
            <legend>{{ trans('app.attributes') }}</legend>
            @foreach ($attributes as $attribute)
              <div class="form-group">
                {!! Form::label($attribute->name, $attribute->name) !!}
                <select class="form-control select2" id="{{ $attribute->name }}" name="variants[{{ $attribute->id }}]" placeholder={{ trans('app.placeholder.select') }}>
                  <option value="">{{ trans('app.placeholder.select') }}</option>

                  @foreach ($attribute->attributeValues as $attributeValue)
                    <option value="{{ $attributeValue->id }}" {{ isset($inventory) && count($inventory->attributes) && in_array($attributeValue->id, $inventory->attributeValues->pluck('id')->toArray()) ? 'selected' : '' }}>

                      {{ $attributeValue->value }}

                    </option>
                  @endforeach
                </select>
              </div>
            @endforeach
          </fieldset>
        @endif

        <fieldset>
          <legend>{{ trans('app.reporting') }}</legend>
          <div class="form-group">
            {!! Form::label('purchase_price', trans('app.form.purchase_price'), ['class' => 'with-help']) !!}
            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.purchase_price') }}"></i>
            <div class="input-group">
              @if (get_currency_prefix())
                <span class="input-group-addon" id="basic-addon1">
                  {{ get_currency_prefix() }}
                </span>
              @endif

              {!! Form::number('purchase_price', null, ['class' => 'form-control', 'step' => 'any', 'placeholder' => trans('app.placeholder.purchase_price')]) !!}

              @if (get_currency_suffix())
                <span class="input-group-addon" id="basic-addon1">
                  {{ get_currency_suffix() }}
                </span>
              @endif
            </div>
          </div>
          @if ($requires_shipping)
            <div class="form-group">
              {!! Form::label('supplier_id', trans('app.form.supplier'), ['class' => 'with-help']) !!}
              <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.select_supplier') }}"></i>
              {!! Form::select('supplier_id', $suppliers, isset($inventory) ? null : config('shop_settings.default_supplier_id'), ['class' => 'form-control select2', 'placeholder' => trans('app.placeholder.select')]) !!}
            </div>
          @endif
        </fieldset>

        <fieldset>
          <legend>{{ trans('app.seo') }}</legend>
          <div class="form-group">
            {!! Form::label('slug', trans('app.form.slug') . '*', ['class' => 'with-help']) !!}
            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.slug') }}"></i>
            {!! Form::text('slug', null, ['class' => 'form-control slug', 'placeholder' => trans('app.placeholder.slug'), 'required']) !!}
            <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
            {!! Form::label('tag_list[]', trans('app.form.tags'), ['class' => 'with-help']) !!}
            {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control select2-tag', 'multiple' => 'multiple']) !!}
            <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
            {!! Form::label('meta_title', trans('app.form.meta_title'), ['class' => 'with-help']) !!}
            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.meta_title') }}"></i>
            {!! Form::text('meta_title', null, ['class' => 'form-control', 'placeholder' => trans('app.placeholder.meta_title')]) !!}
            <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
            {!! Form::label('meta_description', trans('app.form.meta_description'), ['class' => 'with-help']) !!}
            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.meta_description') }}"></i>
            {!! Form::text('meta_description', null, ['class' => 'form-control', 'maxlength' => config('seo.meta.description_character_limit', '160'), 'placeholder' => trans('app.placeholder.meta_description')]) !!}
            <div class="help-block with-errors"><small><i class="fa fa-info-circle"></i> {{ trans('help.max_chat_allowed', ['size' => config('seo.meta.description_character_limit', '160')]) }}</small></div>
          </div>
        </fieldset>
      </div>
    </div>
  </div><!-- /.col-md-4 -->
</div><!-- /.row -->
