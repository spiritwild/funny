@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header">
                    <h1>{{ trans('admin.nations.edit') }} <a href="{{ url('admin/categories')}}"
                                                             class="btn btn-lg btn-default pull-right">{{ trans('admin.general.cancel') }}</a>
                    </h1>
                </div>

                @if($errors->all())
                    <div class="bs-callout bs-callout-danger">
                        <h4>{{ trans('admin.please_fix_errors') }}</h4>
                        {{ HTML::ul($errors->all())}}
                    </div>
                @endif

                {{ Form::model($category,array('class'=>'form-horizontal'))}}
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">{{ trans('admin.general.title') }}</label>

                    <div class="col-lg-10">
                        {{ Form::text('title',null,array('class'=>'form-control'))}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">{{ trans('admin.general.thumbnail') }}</label>

                    <div class="col-lg-10">
                        {{ Form::text('thumbnail',null,array('class'=>'form-control'))}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">{{ trans('admin.general.keywords') }}</label>

                    <div class="col-lg-10">
                        {{ Form::text('keywords',null,array('class'=>'form-control'))}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">{{ trans('admin.general.lead') }}</label>

                    <div class="col-lg-10">
                        {{ Form::textarea('lead',null,array('class'=>'form-control','rows'=>4))}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="description"
                           class="col-lg-2 control-label">{{ trans('admin.general.position') }}</label>

                    <div class="col-lg-10">
                        {{ Form::text('position',null,array('class'=>'form-control','rows'=>'5'))}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="description"
                           class="col-lg-2 control-label">{{ trans('admin.general.status') }}</label>

                    <div class="col-lg-10">
                        {{ Form::select('hidden',status_show_hidden(),null,array('class'=>'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        {{ Form::submit( trans('admin.nations.save') ,array('class'=>'btn btn-primary btn-block')); }}
                    </div>
                </div>
                {{ Form::close()}}
            </div>
        </div>
    </div>
@stop