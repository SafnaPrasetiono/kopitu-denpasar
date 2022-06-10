<div>
    <div class="bg-custom-4 py-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-lg-4">
                    <div class="d-flex align-items-center bg-white shadow rounded p-4">
                        <i class="fas fa-users fa-4x fa-fw"></i>
                        <div class="ms-auto px-3">
                            <p class="mb-0 fs-5 fw-light">All Members</p>
                            <p class="mb-0 fs-2 fw-bold text-end">{{ $all }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="d-flex align-items-center bg-white shadow rounded p-4">
                        <i class="far fa-users fa-4x fa-fw"></i>
                        <div class="ms-auto px-3">
                            <p class="mb-0 fs-5 fw-light">Valid Members</p>
                            <p class="mb-0 fs-2 fw-bold text-end">{{ $active }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="d-flex align-items-center bg-white shadow rounded p-4">
                        <i class="fal fa-users fa-4x fa-fw"></i>
                        <div class="ms-auto px-3">
                            <p class="mb-0 fs-5 fw-light">Invalid Members</p>
                            <p class="mb-0 fs-2 fw-bold text-end">{{ $pasive }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
