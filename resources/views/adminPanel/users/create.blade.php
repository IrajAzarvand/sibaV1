@component('adminPanel.Layout.content',
[
'title' => 'ایجاد کاربر جدید',
])
@slot('breadcrumb')
<li class="breadcrumb-item"><a href="#">پیشخوان</a></li>
<li class="breadcrumb-item"><a href="#">لیست کاربران</a></li>
<li class="breadcrumb-item active">ایجاد کاربر</li>
@endslot

@section('CustomCss')
@foreach (CSSLinks('FormElements') as $link)
<link rel='stylesheet' href='{{ asset($link) }}'>
@endforeach
@endsection

<div class="card">
    <div class="card-header card-title-bg color-white">
        <h3 class="card-title">فرم ایجاد کاربر</h3>
    </div>
    <form class="p-3" id="contact-form" method="post" action="contact.php" role="form">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="PersonelCode">شماره پرسنلی</label>
                    <input id="PersonelCode" type="text" name="PersonelCode" class="form-control"
                        placeholder="کدپرسنلی خود را وارد نمایید">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="nav flex-column nav-pills bg-secondary" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                        aria-controls="v-pills-home" aria-selected="true">مشخصات فردی</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="tab-content bg-light" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="row m-2 p-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Fname"><i class="required">*</i> نام</label>
                                    <input id="Fname" type="text" name="Fname" class="form-control"
                                        placeholder="نام خود را وارد نمایید">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Lname"><i class="required">*</i> نام خانوادگی</label>
                                    <input id="Lname" type="text" name="Lname" class="form-control"
                                        placeholder="نام خانوادگی خود را وارد نمایید">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="NamePedar"><i class="required">*</i> نام پدر</label>
                                    <input id="NamePedar" type="text" name="" class="form-control"
                                        placeholder="نام پدر">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="CodeMelli"><i class="required">*</i> کد ملی</label>
                                    <input id="CodeMelli" type="text" name="" class="form-control"
                                        placeholder="کدملی را وارد نمایید" data-inputmask='"mask": "9999999999"'
                                        data-mask>
                                </div>
                            </div>
                        </div>
                        <div class="row m-2 p-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="CodeMelli"><i class="required">*</i> شماره شناسنامه</label>
                                    <input id="ShomareShenasnameh" type="text" name="" class="form-control"
                                        placeholder="شماره شناسنامه را وارد نمایید">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label><i class="required">*</i> جنسیت</label>
                                    <select class="form-control" style="width: 100%;">
                                        <option selected="selected" style="font-family: vazir">انتخاب کنید ...</option>
                                        <option>مرد</option>
                                        <option>زن</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>تاریخ تولد</label>
                                    <div class="input-group">

                                        <input class="observer-example form-control" />
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">profile</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">message</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">setting</div>
                </div>
            </div>


        </div>
        <div class="controls">
            <div class="row">




            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">رمز عبور</label>
                        <input id="password" type="password" name="password" class="form-control"
                            placeholder="رمزعبور را وارد نمایید">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password_confirmation">تکرار رمز عبور</label>
                        <input id="password_confirmation" type="password" name="password_confirmation"
                            class="form-control" placeholder="رمزعبور را مجدد وارد نمایید">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="MobileNumber">شماره موبایل</label>
                        <input id="MobileNumber" type="text" name="MobileNumber" class="form-control ltr"
                            placeholder="وارد کردن شماره موبایل" data-inputmask='"mask": "99999999999"' data-mask>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="LocalNumber">شماره داخلی</label>
                        <input id="LocalNumber" type="text" name="LocalNumber" class="form-control ltr"
                            placeholder="وارد کردن شماره داخلی" data-inputmask='"mask": "999"' data-mask>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>شعبه</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">مازندران</option>
                            <option>شیراز</option>
                            <option>گلستان</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>واحد</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">کارگزینی</option>
                            <option>دفترمدیریت</option>
                            <option>IT</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>سمت</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">مسئول</option>
                            <option>مدیر</option>
                            <option>کارشناس</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>سمت</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">مسئول</option>
                            <option>مدیر</option>
                            <option>کارشناس</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> These fields are required. Contact form template by <a
                        href="https://bootstrapious.com" target="_blank">Bootstrapious</a>.</p>
            </div>
        </div>
</div>

</form>
</div>

</div>

</div>

</div>
@section('CustomJs')
@foreach (JSLinks('Admin') as $link)
<!-- Select2 -->
<script src="{{ asset($link) }}"></script>
@endforeach
@foreach (JSLinks('FormElements') as $link)
<!-- Select2 -->
<script src="{{ asset($link) }}"></script>
@endforeach
@endsection
@endcomponent
