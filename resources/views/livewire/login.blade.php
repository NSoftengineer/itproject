<!-- Login 13 - Bootstrap Brain Component -->
<div>
    <section class=" py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <a href="#!">
                                    <img class="rounded mx-auto d-block" src="{{ asset('/assets/logo.jpg') }}" alt="BootstrapBrain Logo" width="250"
                                        height="175">
                                </a>
                            </div>
                            {{-- <h2 class="fs-4 fw-normal text-center text-secondary mb-4">
                                ລະບົບການຈັດການ<br>ເກັບຂໍ້ມູນກວດລະບຽບ
                                ແລະ <br>ອອກແຮງງານຂອງພາກວິຊາ ceit
                            </h2> --}}
                            <form action="#!">
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="user" id="user"
                                                placeholder="name@example.com" required>
                                            <label for="user" class="form-label">user name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password"
                                                value="" placeholder="Password" required>
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
