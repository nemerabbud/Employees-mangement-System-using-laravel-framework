@extends('layout.adminLayout')
@section('title') {{__('cp.services_management')}}
@endsection
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase"
                              style="color: #e02222 !important;">{{__('cp.edit')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url(app()->getLocale().'/admin/services/'.$item->id)}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                        <div class="form-body">
                            <fieldset>
                                <legend>{{__('cp.main_info')}}</legend>

                                <div class="tabbable-custom ">
                                    <ul class="nav nav-tabs ">
                                        @foreach($locales as $locale)
                                            <li {{($locale->lang == 'en') ? "class=active" : '' }}>
                                                <a href="#tab_{{$locale->lang}}" data-toggle="tab">{{$locale->name}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="tab-content">
                                        @foreach($locales as $locale)
                                            <div class="tab-pane {{($locale->lang == 'en') ? 'active' : '' }}" id="tab_{{$locale->lang}}">

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="title_{{$locale->lang}}">
                                                        {{__('cp.title')}}
                                                        <span class="symbol">*</span>
                                                    </label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="{{$locale->lang}}[title]"

                                                               id="title_{{$locale->lang}}"
                                                               value="{{ old($locale->lang.'.title',@$item->translate($locale->lang)->title) }}" required>
                                                    </div>
                                                </div>


                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </fieldset>


                            <fieldset>
                                <legend>{{__('cp.more_info')}}</legend>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label " for="services_ids">
                                        {{__('cp.category')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-3">
                                        <select name="category_id" class="select2" required >
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$category->id==old('category_id',$item->category_id)?'selected':""}}>{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>
                                <legend>{{__('cp.image')}}</legend>
                                <div class="form-group">
                                    <div class="col-md-3 col-md-offset-3">
                                        <div class="fileinput-new thumbnail"
                                             onclick="document.getElementById('edit_image').click()"
                                             style="cursor:pointer">
                                            <img src="{{url($item->image_url)}}" id="editImage">
                                        </div>
                                        <div class="btn red"
                                             onclick="document.getElementById('edit_image').click()">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <input type="file" class="form-control" name="image"
                                               id="edit_image"
                                               style="display:none">
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.edit')}}</button>
                                        <a href="{{url(getLocal().'/admin/services')}}"
                                           class="btn default">{{__('cp.cancel')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

@section('script')

    <script>

        $('#edit_image').on('change', function (e) {

            readURL(this, $('#editImage'));

        });

    </script>

@endsection

