<div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ຂໍ້ມູນອອກແຮງງານ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ຊື່ນັກສຶກສາ </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="ຊື່ນັກສຶກສາ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ວັນທີ </label>
                        <input type="date" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ສະຖານະ</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">ມາ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">ບໍມາ</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">ໝາຍເຫດ</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                        <li class="breadcrumb-item active" aria-current="page">ຂໍ້ມູນອອກແຮງງານ</li>
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
                            <th width="150">ລະຫັດກິດຈະກຳ</th>
                            <th>ຊື່ນັກສຶກສາ</th>
                            <th>ວັນທີ</th>
                            <th>ສະຖານະ</th>
                            <th>ໝາຍເຫດ</th>
                            <th width="150"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <th scope="row">{{ $i + 1 }}</th>
                                <td>Mark</td>
                                <td>2024-02-13</td>
                                <td>ມາ</td>
                                <td>ອອຫແຮງງານ</td>
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
