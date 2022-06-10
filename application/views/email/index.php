<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Email Ecentrix</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Email</h3>
                    </div>
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Data</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Description</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">File</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kirim Email</h3>
                    </div>
                    <div class="alert display:none" id="responseMsg"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="data">Data</label>
                                    <select name="data" id="data-template" class="form-control">
                                        <option value="Ecentrix">Ecentrix</option>
                                        <option value="Tokopedia">Tokopedia</option>
                                        <option value="Shopee">Shopee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="text_template">Email Text : </label>
                                    <textarea class="form-control" id="text_template" rows="3" name="text-template" readonly>Halo kami dari Ecentrix kami ingin memberikan anda informasi bahwa anda mendapatkan hadiah 1 milliar rupiah.</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputFile" name="inputFile">
                                            <label class="custom-file-label" for="inputFile">Choose a file</label>
                                        </div>
                                        <div class='alert alert-danger mt-2 d-none' id="err_file"></div>
                                    </div>
                                    <div style="color:red">Maximum 10 Mb.</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" placeholder="Masukkan Description" name="description">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer float-right">
                        <button type="button" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- MODAL EDIT -->
    <form>
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="data" class="col-md-2 col-form-label">Data</label>
                            <select name="data" id="data-template_edit" class="form-control">
                                <option value="Ecentrix">Ecentrix</option>
                                <option value="Tokopedia">Tokopedia</option>
                                <option value="Shopee">Shopee</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="text-template">Email Text : </label>
                            <textarea class="form-control" id="text_template_edit" rows="3" name="text-template_edit" readonly>
                                </textarea>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label">Description</label>
                            <input type="text" class="form-control" id="description_edit" placeholder="Masukkan Description" name="description_edit">
                        </div>
                        <input type="hidden" class="form-control" id="data_id_email" name="data_id_email">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL EDIT-->

    <!--MODAL DELETE-->
    <form>
        <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="email_deleted" id="email_deleted" class="form-control">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL DELETE-->

    </div>
</section>

<script>
    $(function() {
        const tablesEmail = $('#example2').DataTable({
            "ajax": {
                "url": "<?= base_url('email/get') ?>",
            },
            "columns": [{
                    "data": "data"
                },
                {
                    "data": "description"
                },
                {
                    "data": "file"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `
                                    <a class="btn_edit" href="javascript:void(0);" data-id='${data.id}' data-email_data=${data.data} data-email_description=${data.description}>
                                        <button class="btn btn-warning btn-sm text-white">
                                            <i class="fa fa-pen"></i>
                                        </button>
                                    </a>
                                    <a class="btn_delete" href="javascript:void(0);" data-id='${data.id}'>
                                        <button class="btn btn-danger btn-sm text-white">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>`
                    }
                }
            ],
            "serverSide": true,
            "paging": true,
            "processing": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        bsCustomFileInput.init();

        let dataEmail = $('#data-template');
        let dataEmailEdit = $('#data-template_edit');
        let button = $('#submit');
        let fileUpload = '';

        //CSRF Token
        let csrfName = $('.txt_csrfname').attr('name');
        let csrfHash = $('.txt_csrfname').val();

        //Function for tidying text file
        $('#inputFile').on('change', (e) => {
            let nameFile = $(e.currentTarget).val().replace(/^.*\\/, "");
            let newText = '';

            for (let i = 0; i < nameFile.length; i++) {
                if (nameFile[i] == ' ') {
                    newText += '_';
                } else {
                    newText += nameFile[i];
                }
            }
            fileUpload = newText.replace(/[`~!@#$%^:&*()_|+\-=?;:'",<>\{\}\[\]\\\/]/gi, '');
        });

        // function getDataAll() {
        //     $.ajax({
        //         type: "GET",
        //         url: '<?= base_url('email/getAll') ?>',
        //         dataType: 'json',
        //         async: true,
        //         success: (data) => {
        //             let html = '';
        //             let val = data.email;
        //             val.forEach((val) => {
        //                 html += `<tr>
        //                             <td>${val['data']}</td>
        //                             <td>${val['description']}</td>
        //                             <td>
        //                                 <a class="btn_edit" href="javascript:void(0);" data-email_id='${val['id']}' data-email_data=${val['data']} data-email_description=${val['description']}>
        //                                     <button class="btn btn-warning btn-sm text-white">
        //                                         <i class="fa fa-pen"></i>
        //                                     </button>
        //                                 </a>
        //                                 <a class="btn_delete" href="javascript:void(0);" data-email_id_deleted='${val['id']}'>
        //                                     <button class="btn btn-danger btn-sm text-white">
        //                                         <i class="fa fa-trash"></i>
        //                                     </button>
        //                                 </a>
        //                             </td>
        //                         </tr>`
        //             });
        //             $('#show_data').html(html);
        //         }
        //     })
        // }

        dataEmail.on('change', (event) => {
            const result = $('#text_template');
            if (event.target.value === 'Shopee') {
                result.text(`Halo kami dari ${event.target.value} kami ingin memberikan anda informasi bahwa anda mendapatkan hadiah 1 milliar rupiah.`);
            } else if (event.target.value === 'Tokopedia') {
                result.text(`Halo kami dari ${event.target.value} kami kami ingin memberikan anda hadiah yaitu mobil BMW 1 unit.`);
            } else {
                result.text(`Halo kami dari ${event.target.value} kami ingin menginformasikan kepada anda bahwa kantor kami telah berubah alamat.`);
            }
        })

        //Edit
        $('#show_data').on('click', '.btn_edit', function() {
            let id_email = $(this).data('id');
            let data = $(this).data('email_data');
            let description = $(this).data('email_description');

            $('#Modal_Edit').modal('show');
            $('[name="data_id_email"]').val(id_email);
            $('#data-template_edit').val(data);
            $('[name="description_edit"]').val(description);

            dataEmailEdit.on('change', function(event) {
                const result = $('#text_template_edit');
                if (data === 'Shopee') {
                    result.text(`Halo kami dari ${event.target.value} kami ingin memberikan anda informasi bahwa anda mendapatkan hadiah 1 milliar rupiah.`);
                } else if (event.target.value === 'Tokopedia') {
                    result.text(`Halo kami dari ${event.target.value} kami kami ingin memberikan anda hadiah yaitu mobil BMW 1 unit.`);
                } else {
                    result.text(`Halo kami dari ${event.target.value} kami ingin menginformasikan kepada anda bahwa kantor kami telah berubah alamat.`);
                }
            });
        });

        $('#btn_update').on('click', function() {
            let email_id = $('#data_id_email').val();
            let dataEmailValueUpdated = $('#data-template_edit').val();
            let desc = $('#description_edit').val();
            $.ajax({
                type: "PATCH",
                url: "<?= base_url('email') ?>" + '/' + email_id,
                dataType: "JSON",
                data: {
                    email_id: email_id,
                    dataEmailValueUpdated: dataEmailValueUpdated,
                    desc: desc
                },
                success: () => {
                    alert('Success Updated Data');
                }
            });
            tablesEmail.ajax.reload();
            $('#Modal_Edit').modal('hide');
        });
        //End of edit Script

        //Delete
        $('#show_data').on('click', '.btn_delete', function() {
            let email_id_deleted = $(this).data('id');
            console.log(email_id_deleted);

            $('#Modal_Delete').modal('show');
            $('[name="email_deleted"]').val(email_id_deleted);
        });

        $('#btn_delete').on('click', function() {
            let email_id_deleted = $('#email_deleted').val();
            $.ajax({
                type: "DELETE",
                url: '<?= base_url('email') ?>/' + email_id_deleted,
                dataType: "JSON",
                data: {
                    email_id_deleted: email_id_deleted
                },
                success: () => {
                    $('#Modal_Delete').modal('hide');
                    alert('Delete Succes');
                }
            });
            $('#Modal_Delete').modal('hide');
            tablesEmail.ajax.reload();
        });

        //End of Delete Script

        //Store
        button.on('click', (e) => {
            e.preventDefault();

            let dataEmailValue = dataEmail.val();
            let description = $('#description').val();

            // if (description === '' || description === null || description === undefined) {
            //     alert('Mohon maaf deskripsi harus diisi!');
            //     return;
            // }

            let fd = new FormData();

            fd.append('file', fileUpload);
            fd.append([csrfName], csrfHash);
            fd.append('dataEmail', dataEmailValue);
            fd.append('description', description);
            console.log(fd);

            // Hide alert 
            $('#responseMsg').hide();

            $.ajax({
                type: "POST",
                url: '<?= base_url('email/get') ?>',
                dataType: 'json',
                data: fd,
                contentType: false,
                cache: false,
                processData: false,
                success: () => {
                    alert('Success Insert Data');
                },
                error: (error) => {
                    alert('Error');
                    console.log(error);
                }
            });
            tablesEmail.ajax.reload();
        });
        //End of store script
    });
</script>