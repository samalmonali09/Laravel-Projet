








<?php $__env->startSection('INSTASTAT','active open'); ?>
<?php $__env->startSection('IMAGE','active open'); ?>

<?php $__env->startSection('pageheadcontent'); ?>
    <!-- add extra css required for this page only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <link href="/GAIA/assets/admin/layout/css/toastr.css" rel="stylesheet" type="text/css"/>

    <style>
        .file {
            visibility: hidden;
            position: absolute;
        }

        .adddiv1 {
            display: block;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            height: 220px;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 22px;
            color: #777;
            background-color: #FFF;
            background-image: none;
            text-align: center;
            border: 2px solid #E5E5E5;
            -webkit-transition: border-color .15s linear;
            transition: border-color .15s linear;
        }

        .adddiv {
            display: block;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            height: 220px;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 22px;
            color: #777;
            background-color: #FFF;
            background-image: none;
            text-align: center;
            border: 2px solid #E5E5E5;
            -webkit-transition: border-color .15s linear;
            transition: border-color .15s linear;
        }
    </style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagecontent'); ?>
    <!-- BEGIN PAGE HEADER-->

    <h3 class="page-title" style="color: #0d3625">
        Stats AdBanner
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="/admin/AddBanner">INSTASTATS</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="/admin/AddBanner">Stats AdBanner  </a>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-lg-12">
            <h2 style="text-align: center;
margin: 0 0 2% 0;">Banners For IOS </h2>
        </div>
        <?php if(isset($iosBanner)): ?>
            <?php $__currentLoopData = $iosBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 mrgn_bottom iosBannerClass<?php echo e($key+1); ?>">
                    <input type="file" id="input-file-now-custom-1 file" class="dropify oldBanner bannerIosDb<?php echo e($key); ?>"
                           data-default-file="<?php echo e($val['banner_image']); ?>" name="files[]" data-id="<?php echo e($val["banner_id"]); ?>" multiple/>
                    <input id="giftID" name="giftID" type="text" placeholder="URL"
                           class="form-control input-md banner_url<?php echo e($key); ?>" data-id="<?php echo e($val["banner_id"]); ?>"
                           value="<?php echo e($val['banner_url']); ?>">
                    <button class="addBtn disabledbtn" data-id="<?php echo e($key); ?>"
                       data-bid="<?php echo e($val['banner_id']); ?>"> Save</button>
                    <a class="RemoveBtn pull-right" data-id="<?php echo e($key); ?>"
                       data-bid="<?php echo e($val['banner_id']); ?>"></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 newdiv mrgn_bottom">
            <div class="adddiv">
                <span><i class="fa fa-plus" style="margin-top:45%;font-size: 30px;"></i></span>
            </div>
        </div>
    </div>




    <div class="row ">
        <div class="col-lg-12">
            <h2 style="text-align: center;
    margin: 2% 0 2% 0;">Banners For Andriod</h2>
        </div>
        <?php if(isset($androidBanner)): ?>
            <?php $__currentLoopData = $androidBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 mrgn_bottom BannerClass">
                    <input type="file" id="input-file-now-custom-1" class="dropify oldBanner bannerAndroidDb<?php echo e($key); ?>"
                           data-default-file="<?php echo e($val['banner_image']); ?>" name="files[]" multiple/>
                    <input id="giftID" name="giftID" data-id=<?php echo e($val['banner_id']); ?> type="text" placeholder="URL"
                           class="form-control input-md banner_url<?php echo e($key); ?>"
                           value="<?php echo e($val['banner_url']); ?>">
                    <button class="addBtnAndroid disabledbtn" data-id="<?php echo e($key); ?>"
                       data-bid="<?php echo e($val['banner_id']); ?>">Save</button>
                    <a class="RemoveBtn pull-right" data-id="<?php echo e($key); ?>"
                       data-bid="<?php echo e($val['banner_id']); ?>"></a>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 newdiv1 mrgn_bottom">
            <div class="adddiv1">
                <span><i class="fa fa-plus" style="margin-top:45%;font-size: 30px;"></i></span>
            </div>
        </div>

    </div>


    <!-- END PAGE CONTENT-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
    <!-- add extra js for this page only -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
    <script src="/GAIA/assets/admin/pages/scripts/toastr.js" type="text/javascript"></script>



    <script type="text/javascript">


        $(document).ready(function () {
            toastr.options.positionClass = 'toast-top-center';
            toastr.options.progressBar = true;
            toastr.options.preventDuplicates = true;
            toastr.options.closeButton = true;

            $('input[type="search"]').css({'height': '5px'});

        });
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            var i = 0;

            var imagePath = [],
                imageUrl = [];
            $(document).on('click', '.adddiv', function () {
                i++;
                var contents = '<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 mrgn_bottom">' +
                    '<input id="input-file-now-custom-2-' + i + '" class="dropify newBanner newBannerIos" data-default-file="" type="file">' +
                    '<input id="giftID_' + i + '" name="giftID_' + i + '" type="text" placeholder="URL" class="form-control input-md">' +
                    '<button class="NewBtnIos disabledbtn" data-id="" data-bid=""> Save</button>' +
//                    '<a class="RemoveBtn pull-right" data-id="" data-bid=""> Remove</a>'
                '</div>';


                $(".newdiv").before(contents);
                $('#input-file-now-custom-2-' + i).dropify();
            });

            var j = 0;
            $(document).on('click', '.adddiv1', function () {
                j++;
                var contents = '<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 mrgn_bottom">' +
                    '<input id="input-file-now-custom-1-' + j + '" class="dropify newBanner newBannerAnd" data-default-file="" type="file">' +
                    '<input id="giftID_' + j + '" name="giftID_' + j + '" type="text" placeholder="URL" class="form-control input-md">' +
                    '<button class="NewaddBtnAndroid disabledbtn" data-id="" data-bid=""> Save</button>' +
//                    '<a class="RemoveBtn pull-right" data-id="" data-bid=""> Remove</a>';
                '</div>';

                $(".newdiv1").before(contents);
                $('#input-file-now-custom-1-' + j).dropify();
            });

// Ios Image UpdateAjax
            $('.addBtn').click(function () {

                var count = $(this).attr('data-id');
                var bannerId = $(this).attr('data-bid');


                console.log('image file -------------', $('.bannerIosDb' + count)[0].files[0]);
//                return false;

                var formData = new FormData();
                formData.append('file', $('.bannerIosDb' + count)[0].files[0]);

                formData.append('bannerUrl', $('.banner_url' + count).val());
                formData.append('bannerId', bannerId);

                $.ajax({
                    url: '/admin/imageupdateForIOS',
                    dataType: 'json',
                    async: false,
                    type: 'post',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                        toastr.success(response.msg);
//                        location.reload();

                    }
                });

            });


// Android UpdateAjax
            $('.addBtnAndroid').click(function () {

                var count = $(this).attr('data-id');
                var bannerId = $(this).attr('data-bid');

                var formDataTable = new FormData();
                formDataTable.append('file', $('.bannerAndroidDb' + count)[0].files[0]);

//                formData.append('file', $('input[type=file]')[0].files[0]);

                formDataTable.append('bannerUrl', $('.banner_url' + count).val());
                formDataTable.append('bannerId', bannerId);

                $.ajax({
                    url: '/admin/singleImageAndroid',
                    dataType: 'json',
                    async: false,
                    type: 'post',
                    data: formDataTable,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        toastr.success(response.msg);
                        location.reload();

                        console.log(response);

                    }
                });

            });


            //   upload to public folder
            $(document.body).on('change', '.newBanner', function () {
                console.log("image is changed , now upload it ");

                console.log(('--------------h----------------',$(this)[0]));
//                return false;
                var formData = new FormData();
                formData.append('file', $(this)[0].files[0]);
                uploadImg(formData).done(function (response) {
                    imagePath.push(response.data);
                    console.log(formData);
                });

            });

            function uploadImg(file) {

                console.log('inside upload img', file);

                return $.ajax({
                    url: '/admin/singleimage',
                    dataType: 'json',
                    async: false,
                    type: 'post',
                    data: file,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log('===================================',response);
                        toastr.success(response.msg);

                    },
                });
            }

// Delete Image For Ajax Functionalty for Ios and Android .
            $(document.body).on('click', '.RemoveBtn', function () {
                var data = $(this).attr('data-id');
                var banner_id = $(this).attr('data-bid');

                console.log('-====================================---------', banner_id, data);
                var remz = confirm('Are you sure to delete bannerImage');
                if (remz) {
                    $.ajax({
                        url: '/admin/deleteAjaxHandlerImageIOS',
                        type: 'post',
                        datatype: 'json',
                        data: {
                            banner_id: banner_id
                        },
                        success: function (response) {
                            response = $.parseJSON(response);
                            if (response['status'] == '200') {
                                toastr.success(response.message);
                                location.reload();

//                                data.parent().parent().parent().remove();
                            }
                            else {
                                console.log(response.message);


                            }
                        }
                    });
                }
            });

// new Save Button For Ios InsertImage functionality .........................
            $(document.body).on('click', '.NewBtnIos', function () {
                $('.NewBtnIos').attr('disabled',true);


                var bannerUrl = $(this).siblings('input').val();
                var fromdata = new FormData();
                fromdata.append('file', $('.newBannerIos')[0].files[0]);
                fromdata.append('bannerUrl', bannerUrl);
                console.log('===============', bannerUrl, fromdata);

                $.ajax({
                    url: "/admin/insertImage",
                    dataType: 'json',
                    async: false,
                    type: 'post',
                    data: fromdata,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        response = $.parseJSON(response);

                        toastr.success(response.msg);

                        console.log(response);
//                        toastr.success(response.msg);

                        location.reload();

                    }
                });
            });

// new Save Button For Android InsertImage functionality .........................
            $(document.body).on('click', '.NewaddBtnAndroid', function () {

                $('.NewaddBtnAndroid').attr('disabled',true);

                var bannerUrl = $(this).siblings('input').val();
                var fromdata = new FormData();
                fromdata.append('file', $('.newBannerAnd')[0].files[0]);
                fromdata.append('bannerUrl', bannerUrl);

                console.log('===============', bannerUrl, fromdata);

                $.ajax({
                    url: "/admin/InserImageAndroid",
                    dataType: 'json',
                    async: false,
                    type: 'post',
                    data: fromdata,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        response = $.parseJSON(response);

                        console.log(response);
                        toastr.success(response.msg);

                        location.reload();

                    }

                });


            });

        });


        // Delete image  For Ajax Functionaity  for Android.
        $('.RemoveBtnAnd').click(function () {
            var data = $(this).attr('data-id');
            var banner_id = $(this).attr('data-bid');

            console.log('-====================================---------', banner_id, data);
            var remz = confirm('Are you sure to delete bannerImage');
            if (remz) {
                $.ajax({
                    url: '/admin/deleteAjaxHandlerImageAndroid',
                    type: 'post',
                    datatype: 'json',
                    data: {
                        banner_id: banner_id
                    },
                    success: function (response) {
                        response = $.parseJSON(response);
                        if (response['status'] == '200') {
                            toastr.success(response.message);
                            location.reload();

//                                data.parent().parent().parent().remove();
//                                                             data .remove();

                        }
                        else {
                            console.log(response.message);


                        }
                    }
                });
            }
        });
        $(document.body).on('click','.dropify-clear',function () {
            // alert('===============================');
            var banner_id= $(this).parent().next().attr('data-id');

            var message=confirm('Are You sure to delete image');

            if(message) {
                console.log('====================', banner_id);
                $.ajax({
                    url: '/admin/deleteAjaxHandlerImageAndroid',
                    type: 'post',
                    datatype: 'json',
                    data: {
                        banner_id: banner_id
                    },
                    success: function (response) {
                        response = $.parseJSON(response);
                        if (response['status'] == '200') {
                            toastr.success(response.message);
                            location.reload();

//                                data.parent().parent().parent().remove();
//                                                             data .remove();

                        }
                        else {
                            console.log(response.message);


                        }
                    }
                });
            }
        });

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>