<div class="container">
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header card-header-tabs-line">
            <ul class="nav nav-dark nav-bold nav-tabs nav-tabs-line" data-remember-tab="tab_id" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_builder_page" role="tab">Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_mobile_header" role="tab">Mobile Header</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_subheader" role="tab">Subheader</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_content" role="tab">Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_aside" role="tab">Aside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_footer" role="tab">Footer</a>
                </li>
            </ul>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form class="form" method="POST" id="form-builder" action="https://preview.keenthemes.com/keen/index.php">
            <!--begin::Body-->
            <div class="card-body">
                <div class="tab-content pt-3">
                    <div class="tab-pane active" id="kt_builder_page">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Page Loader:</label>
                            <div class="col-lg-9 col-xl-4">
                                <select class="form-control form-control-solid" name="builder[layout][page-loader][type]">
                                    <option value="" selected="selected">Disabled</option>
                                    <option value="default">Spinner</option>
                                    <option value="spinner-message">Spinner &amp; Message</option>
                                    <option value="spinner-logo">Spinner &amp; Logo</option>
                                </select>
                                <div class="form-text text-muted">Select page loading indicator</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Page Toolbar:</label>
                            <div class="col-lg-9 col-xl-4">
                                <input type="hidden" name="builder[layout][extras][toolbar][display]" value="false" />
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" name="builder[layout][extras][toolbar][display]" value="true" checked="checked" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Display or hide the page's right center toolbar(demos switcher, documentation and page builder links)</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_builder_mobile_header">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Fixed Header:</label>
                            <div class="col-lg-9 col-xl-4">
                                <input type="hidden" name="builder[layout][header][self][fixed][mobile]" value="false" />
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" name="builder[layout][header][self][fixed][mobile]" value="true" checked="checked" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Enable fixed header for mobile mode</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_builder_subheader">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Display Subheader:</label>
                            <div class="col-lg-9 col-xl-4">
                                <input type="hidden" name="builder[layout][subheader][display]" value="false" />
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" name="builder[layout][subheader][display]" value="true" checked="checked" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Display subheader</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Fixed Subheader:</label>
                            <div class="col-lg-9 col-xl-4">
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="hidden" name="builder[layout][subheader][fixed]" value="false" />
                                        <input type="checkbox" name="builder[layout][subheader][fixed]" value="true" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Enable fixed(sticky) subheader. Requires
                                    <code>Solid</code>subheader style.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Width:</label>
                            <div class="col-lg-9 col-xl-4">
                                <select class="form-control form-control-solid form-control form-control-solid-solid" name="builder[layout][subheader][width]">
                                    <option value="fluid">Fluid</option>
                                    <option value="fixed" selected="selected">Fixed</option>
                                </select>
                                <div class="form-text text-muted">Select layout width type.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Subheader Style:</label>
                            <div class="col-lg-9 col-xl-4">
                                <select class="form-control form-control-solid form-control form-control-solid-solid" name="builder[layout][subheader][style]">
                                    <option value="transparent" selected="selected">Transparent</option>
                                    <option value="solid">Solid</option>
                                </select>
                                <div class="form-text text-muted">Select subheader style</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Subheader Layout:</label>
                            <div class="col-lg-9 col-xl-4">
                                <select class="form-control form-control-solid form-control form-control-solid-solid" name="builder[layout][subheader][layout]">
                                    <option value="general" selected="selected">General</option>
                                    <option value="actions">Actions</option>
                                    <option value="toolbar">Toolbar</option>
                                    <option value="crud">CRUD</option>
                                </select>
                                <div class="form-text text-muted">Select subheader layout</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_builder_content">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Width:</label>
                            <div class="col-lg-9 col-xl-4">
                                <select class="form-control form-control-solid form-control form-control-solid-solid" name="builder[layout][content][width]">
                                    <option value="fluid">Fluid</option>
                                    <option value="fixed" selected="selected">Fixed</option>
                                </select>
                                <div class="form-text text-muted">Select layout width type.</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_builder_aside">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Display Secondary Panel:</label>
                            <div class="col-lg-9 col-xl-4">
                                <span class="switch switch-icon">
                                    <input type="hidden" name="builder[layout][aside][secondary][display]" value="false" />
                                    <label>
                                        <input type="checkbox" name="builder[layout][aside][secondary][display]" value="true" checked="checked" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Display aside secondary panel</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Aside Minimize:</label>
                            <div class="col-lg-9 col-xl-4">
                                <input type="hidden" name="builder[layout][aside][self][minimize][toggle]" value="false" />
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" name="builder[layout][aside][self][minimize][toggle]" value="true" checked="checked" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Allow aside minimizing</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Aside Default Minimized:</label>
                            <div class="col-lg-9 col-xl-4">
                                <input type="hidden" name="builder[layout][aside][self][minimize][default]" value="false" />
                                <span class="switch switch-icon">
                                    <label>
                                        <input type="checkbox" name="builder[layout][aside][self][minimize][default]" value="true" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Set aside minimized by default</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_builder_footer">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Fixed Footer:</label>
                            <div class="col-lg-9 col-xl-4">
                                <span class="switch switch-icon">
                                    <input type="hidden" name="builder[layout][footer][fixed]" value="false" />
                                    <label>
                                        <input type="checkbox" name="builder[layout][footer][fixed]" value="true" />
                                        <span></span>
                                    </label>
                                </span>
                                <div class="form-text text-muted">Set fixed footer for desktop mode only</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Width:</label>
                            <div class="col-lg-9 col-xl-4">
                                <select class="form-control form-control-solid form-control form-control-solid-solid" name="builder[layout][footer][width]">
                                    <option value="fluid">Fluid</option>
                                    <option value="fixed" selected="selected">Fixed</option>
                                </select>
                                <div class="form-text text-muted">Select layout width type.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                        <input type="hidden" id="tab_id" name="builder[tab][tab_id]" />
                        <button type="submit" name="builder_submit" data-demo="demo5" class="btn btn-primary font-weight-bold mr-2">Preview</button>
                        <button type="submit" id="builder_export" data-demo="demo5" class="btn btn-light font-weight-bold mr-2">Export</button>
                        <button type="submit" name="builder_reset" data-demo="demo5" class="btn btn-clean font-weight-bold">Reset</button>
                    </div>
                </div>
            </div>
            <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div>
</div>