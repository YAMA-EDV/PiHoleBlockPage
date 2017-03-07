<!-- Modal -->
<div class="modal fade" id="whitelistform" tabindex="-1" role="dialog" aria-labelledby="whitelistformLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{{ $lang['form_close'] }}</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:#9a9a9a;font-family:Mailpile-Normal;">{{ $lang['form_title'] }}</h4>
            </div>
            <div class="modal-body" data-toggle="validator" role="form">
                <form role="form" id="signup" action="/send" method="post">
                    <div class ="form-group">
                        <label>{{ $lang['form_name'] }}</label>
                        <input type="email" class="form-control" id="inputName" placeholder="{{ $lang['form_name_msg'] }}" data-error="{{ $lang['form_name_error'] }}" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>

                    <div class ="form-group">
                        <label>{{ $lang['form_email'] }}</label>
                        <input type="email" class="form-control" id="inputName" placeholder="{{ $lang['form_email_msg'] }}" data-error="{{ $lang['form_email_error'] }}" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>

                    <div class ="form-group">
                    </div>
                    <button class="btn btn-default create">{{ $lang['form_btn_send'] }}</button>
                </form>
            </div><!--end of modal body-->
        </div><!--end of modal content-->
    </div><!--end of model dialog-->
</div><!--end of moal-->