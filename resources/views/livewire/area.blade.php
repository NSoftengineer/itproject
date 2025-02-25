<div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ເຂດຮັບຜິດຊອບ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ລະຫັດຫ້ອງຮຽນ</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--ລະຫັດຫ້ອງຮຽນ--</option>
                            <option value="1">ລະຫັດຫ້ອງຮຽນ</option>
                            <option value="2">ລະຫັດຫ້ອງຮຽນ</option>
                            <option value="3">ລະຫັດຫ້ອງຮຽນ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ຊື່ພື້ນທີ່</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="ຊື່ພື້ນທີ່">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ໝາຍເຫດ</label>
                        <textarea class="form-control" rows="3" placeholder="ໝາຍເຫດ"></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ປິດ</button>
                    <button type="button" class="btn btn-primary">ບັນທຶກ</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ເຂດຮັບຜິດຊອບ</li>
                    </ol>
                </nav>

            </div>
            <div class="col-md-6 col-6">
                <button class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">ເພີ່ມຂໍ້ມູນ</button>
            </div>
            <div class="col-md-12 ">
                <center>
                    <div class="input-group mb-3 w-responsive">
                        <input type="text" class="form-control" placeholder="ຄົ້ນຫາຂໍ້ມູນໃນຕາລາງ">
                        <button class="btn btn-primary" type="button" id="button-addon2">ຄົ້ນຫາ</button>
                    </div>
                </center>
            </div>
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="150">ລະຫັດພື້ນທີ່</th>
                            <th>ລະຫັດຫ້ອງຮຽນ</th>
                            <th>ຊື່ພື້ນທີ່</th>
                            <th>ໝາຍເຫດ</th>
                            <th width="150"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <th scope="row">{{ $i + 1 }}</th>
                                <td>ລະຫັດຫ້ອງຮຽນ-{{ $i + 1 }}</td>
                                <td>ຊື່ພື້ນທີ່-{{ $i + 1 }}0</td>
                                <td>ໝາຍເຫດ-{{ $i + 1 }}</td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm" role="group"
                                        aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-danger" onclick="confirm()">ລົບ</button>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">ແກ້ໄຂ</button>
                                    </div>
                                </td>
                            </tr>
                        @endfor


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirm() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        }
    </script>
</div>
