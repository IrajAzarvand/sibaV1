@component('adminPanel.Layout.content',['title' => 'ایجاد کاربر جدید'])
@slot('breadcrumb')
<li class="breadcrumb-item"><a href="#">پیشخوان</a></li>
<li class="breadcrumb-item"><a href="#">لیست کاربران</a></li>
<li class="breadcrumb-item active">ایجاد کاربر</li>
@endslot
<div class="card">
    <div class="card-header card-title-bg color-white">
        <h3 class="card-title">فرم ایجاد کاربر</h3>
    </div>
    <form class="p-3" id="contact-form" method="post" action="contact.php" role="form">

        <div class="controls">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Fname">نام</label>
                        <input id="Fname" type="text" name="Fname" class="form-control"
                            placeholder="نام خود را وارد نمایید">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Lname">نام خانوادگی</label>
                        <input id="Lname" type="text" name="Lname" class="form-control"
                            placeholder="نام خانوادگی خود را وارد نمایید">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="PersonelCode">کدپرسنلی</label>
                        <input id="PersonelCode" type="text" name="PersonelCode" class="form-control"
                            placeholder="کدپرسنلی خود را وارد نمایید">
                    </div>
                </div>
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
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                            placeholder="رمزعبور را مجدد وارد نمایید">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="MobileNumber">شماره موبایل</label>
                        <input id="MobileNumber" type="text" name="MobileNumber" class="form-control"
                            placeholder="شماره موبایل خود را وراد نمایید" data-inputmask='"mask": "9999-999-9999"' data-mask>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *"
                            rows="4" required="required" data-error="Please,leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
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
@endcomponent