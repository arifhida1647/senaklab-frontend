<!doctype html>
<html lang="zxx">

<head>
    <title>pillloMart</title>
</head>

<body>
    <?php include (APPPATH . 'Views/includes/header.php'); ?>


    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>cart list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Item</h5>
                    <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ERROR AND SUCCESS ALERTS -->
                    <div class="alert alert-danger error" role="alert" style="display: none;"></div>
                    <div class="alert alert-primary sukses" role="alert" style="display: none;"></div>
                    <!-- FORM INPUT DATA -->
                    <input type="hidden" id="inputId" name="order_id">
                    <input type="hidden" id="inputItemId" name="item_id">
                    <div class="mb-3 row">
                        <label for="inputUserId" class="col-sm-2 col-form-label">User ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUserId" name="user_id" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select id="inputStatus" class="form-select" name="status" disabled>
                                <option value="Pending">Pending</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTotalAmount" class="col-sm-2 col-form-label">Total Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputTotalAmount" name="total_amount"
                                disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPaymentProofFile" class="col-sm-2 col-form-label">Payment
                            Proof</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="inputPaymentProofFile"
                                name="payment_proof_path_file">
                            <button type="button" class="btn btn-secondary" id="btnUploadImgBB">Upload
                                Gambar</button>
                            <input type="hidden" class="form-control" id="inputPaymentProof" name="payment_proof_path">
                            <div id="uploadedImagePreview"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary tombol-tutup" data-bs-dismiss="modal">Tutup
                    </button>
                    <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataOrders as $k => $v) { ?>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p><?php echo $v['item_name']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5><?php echo $v['price']; ?></h5>
                                    </td>
                                    <td>
                                        <?php if ($v['status'] == 'In Progress') { ?>
                                            <button type="button" class="btn btn-warning  text-light btn-sm">In
                                                Progress</button>
                                        <?php } ?>
                                        <?php if ($v['status'] == 'Pending') { ?>
                                            <button type="button" class="btn btn-danger  text-light btn-sm">Pending</button>
                                        <?php } ?>
                                        <?php if ($v['status'] == 'Completed') { ?>
                                            <button type="button" class="btn btn-success  text-light btn-sm">Completed</button>
                                        <?php } ?>
                                        <?php if ($v['status'] == 'Cancelled') { ?>
                                            <button type="button"
                                                class="btn btn-secondary  text-light btn-sm">Cancelled</button>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <h5><?php echo $v['order_date']; ?></h5>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('confirmation') . "/" . $v['order_id']; ?>"><button
                                                type="button" class="btn btn-warning btn-sm">Detail</button></a>
                                        <?php if ($v['status'] != 'Pending'): ?>
                                            <button type="button" class="btn btn-primary btn-sm" disabled>Upload Bukti
                                                Pembayaran</button>
                                        <?php else: ?>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                                onclick="edit(<?php echo $v['order_id'] ?>)">Upload Bukti
                                                Pembayaran</button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->

    <?php include (APPPATH . 'Views/includes/footer.php'); ?>

    <!-- SCRIPT JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script>
        function hapus(order_id) {
            var result = confirm('Yakin mau melakukan proses delete');
            if (result) {
                window.location = "<?= site_url('orders/hapus') ?>/" + order_id;
            }
        }

        function edit(order_id) {
            $.ajax({
                url: "<?= site_url('history-orders/edit') ?>/" + order_id,
                type: "get",
                success: function (hasil) {
                    var obj = $.parseJSON(hasil);
                    if (obj.order_id !== '') {
                        $('#inputId').val(obj.order_id);
                        $('#inputItemId').val(obj.item_id);
                        $('#inputUserId').val(obj.user_id);
                        $('#inputStatus').val(obj.status);
                        $('#inputTotalAmount').val(obj.total_amount);
                        $('#inputPaymentProof').val(obj.payment_proof_path);
                    }
                }
            });
        }
        $(document).ready(function () {

            function bersihkan() {
                $('#inputId').val('');
                $('#inputItemId').val('');
                $('#inputUserId').val('');
                $('#inputStatus').val('');
                $('#inputTotalAmount').val('');
                $('#inputPaymentProof').val('');
                $('#inputPaymentProofFile').val(''); // Menambahkan ini untuk membersihkan input file
                $('#uploadedImagePreview').html(''); // Menghapus preview gambar
            }

            // Menggunakan event change untuk input file
            $('#inputPaymentProofFile').on('change', function () {
                var filePath = $(this).val();
                $('#inputPaymentProof').val(filePath);
            });

            // Event klik untuk tombol unggah gambar ke ImgBB
            $('#btnUploadImgBB').on('click', function () {
                var fileData = $('#inputPaymentProofFile').prop('files')[0];
                var formData = new FormData();
                formData.append('image', fileData);

                // Menggunakan AJAX untuk mengunggah gambar ke ImgBB
                $.ajax({
                    url: 'https://api.imgbb.com/1/upload?key=7d7737b1abbd34b9a531a2d94399731d',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                        if (response.data && response.data.url) {
                            var modifiedUrl = response.data.url.replace('ibb.co/', 'ibb.co.com/');
                            $('#inputPaymentProof').val(modifiedUrl);
                            $('#uploadedImagePreview').html(`<img src="${modifiedUrl}" class="img-thumbnail" width="200">`);
                            alert('Gambar berhasil diunggah ke ImgBB');
                            console.log(modifiedUrl);
                        } else {
                            alert('Gagal mengunggah gambar ke ImgBB');
                        }
                    },
                    error: function () {
                        alert('Terjadi kesalahan saat mengunggah gambar');
                    }
                });
            });

            $('.tombol-tutup').on('click', function () {
                if ($('.sukses').is(":visible")) {
                    window.location.href = "<?= current_url() . '?' . $_SERVER['QUERY_STRING'] ?>";
                }
                $('.alert').hide();
                bersihkan();
            });

            $('#tombolSimpan').on('click', function () {
                var order_id = $('#inputId').val();
                var item_id = $('#inputItemId').val();
                var user_id = $('#inputUserId').val();
                var status = $('#inputStatus').val();
                var total_amount = $('#inputTotalAmount').val();
                var payment_proof_path = $('#inputPaymentProof').val();

                var formData = new FormData();
                formData.append('order_id', order_id);
                formData.append('item_id', item_id);
                formData.append('user_id', user_id);
                formData.append('status', status);
                formData.append('total_amount', total_amount);
                formData.append('payment_proof_path', payment_proof_path);
                formData.append('payment_proof_path_file', $('#inputPaymentProofFile')[0].files[0]); // Mengambil file yang dipilih

                $.ajax({
                    url: "<?= site_url('history-orders/simpan') ?>",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (hasil) {
                        var obj = $.parseJSON(hasil);
                        if (obj.sukses === false) {
                            $('.sukses').hide();
                            $('.error').show();
                            $('.error').html(obj.error);
                        } else {
                            $('.error').hide();
                            $('.sukses').show();
                            $('.sukses').html(obj.sukses);
                        }
                    }
                });
                bersihkan();
            });
        });
    </script>

</body>

</html>