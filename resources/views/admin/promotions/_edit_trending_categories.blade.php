<div class="modal-dialog modal-md">
  <div class="modal-content">
    {!! Form::open(['route' => 'admin.promotion.trendingNow.update', 'method' => 'PUT', 'id' => 'form', 'data-toggle' => 'validator']) !!}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      {{ trans('app.form.trending_now_categories') }}
    </div>

    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('trending_categories', trans('app.form.categories')) !!}
        {{-- <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('help.trending_now_category_help') }}"></i> --}}

        {!! Form::select('trending_categories[]', $trending_categories, array_keys($trending_categories), ['class' => 'form-control searchCategoryForSelect', 'multiple' => 'multiple', 'style' => 'width: 100%']) !!}

        <div class="help-block with-errors">{{ trans('help.trending_now_category_help') }}</div>
      </div>
    </div>
    <div class="modal-footer">
      {!! Form::submit(trans('app.update'), ['class' => 'btn btn-flat btn-new']) !!}
    </div>
    {!! Form::close() !!}
  </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
