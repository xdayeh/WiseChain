<?php use WiseChain\core\Application; ?>
<h5><i class="bi bi-box px-1"></i>Block</h5>
<div class="col">
    <table class="table table-striped table-hover table-bordered text-center table-sm align-middle">
        <thead class="table-light">
        <tr>
            <th scope="col"><i class="bi bi-hash px-1"></i>Txn Hash</th>
            <th scope="col"><i class="bi bi-asterisk px-1"></i>Method</th>
            <th scope="col" class="d-none d-lg-table-cell"><i class="bi bi-universal-access px-1"></i>From</th>
            <th scope="col" class="d-none d-lg-table-cell"><i class="bi bi-chevron-bar-contract px-1"></i>To</th>
            <th scope="col"><i class="bi bi-calendar px-1"></i>Date</th>
        </tr>
        </thead>
        <tbody>
            <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                <th scope="row"><span class="d-inline-block text-truncate" style="max-width: 200px;font-size: .875rem;">0x049d304c7c64c72d3a8004392ab93634a54c19faf24edd24318224ec461e0258</span></th>
                <td>Transfer</td>
                <td class="d-none d-lg-table-cell"><span class="d-inline-block text-truncate text-reset" style="max-width: 200px;font-size: .875rem;">0xa4a8e54179080cc8c96b0ad0a22747619271e291</span></td>
                <td class="d-none d-lg-table-cell"><span class="d-inline-block text-truncate" style="max-width: 200px;font-size: .875rem;">0x36e19753b895648d84736bb564836b604fb64970</span></td>
                <td>1 hr 52 mins ago</td>
            </tr>
            <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                <th scope="row"><span class="d-inline-block text-truncate" style="max-width: 200px;font-size: .875rem;">0x049d304c7c64c72d3a8004392ab93634a54c19faf24edd24318224ec461e0258</span></th>
                <td>Transfer</td>
                <td class="d-none d-lg-table-cell"><span class="d-inline-block text-truncate text-reset" style="max-width: 200px;font-size: .875rem;">0x36e19753b895648d84736bb564836b604fb64970</span></td>
                <td class="d-none d-lg-table-cell"><span class="d-inline-block text-truncate" style="max-width: 200px;font-size: .875rem;">0x5d08489398dd7e1731713ea52ffb988ec961ead1</span></td>
                <td>8 hrs 35 mins ago</td>
            </tr>
            <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                <th scope="row"><span class="d-inline-block text-truncate" style="max-width: 200px;font-size: .875rem;">0x049d304c7c64c72d3a8004392ab93634a54c19faf24edd24318224ec461e0258</span></th>
                <td>Transfer</td>
                <td class="d-none d-lg-table-cell"><span class="d-inline-block text-truncate text-reset" style="max-width: 200px;font-size: .875rem;">0x574e608c85fa1255400ed1646299358829001575</span></td>
                <td class="d-none d-lg-table-cell"><span class="d-inline-block text-truncate" style="max-width: 200px;font-size: .875rem;">0x36e19753b895648d84736bb564836b604fb64970</span></td>
                <td>8 hrs 35 mins ago</td>
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-clipboard-data px-1"></i>Transaction Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3"><i class="bi bi-hash px-1"></i>Transaction Hash:</div>
                        <div class="col-md-9">
                            <span>0x4639999c76ce2d759cd4e254bf76a9e925aeef95acc8adf0e9e01f680f5f6e2b</span>
                        </div>
                    </div>
                    <hr class="hr-space">
                    <div class="row">
                        <div class="col-3"><i class="bi bi-asterisk px-1"></i>Status:</div>
                        <div class="col-9">
                            <span class="badge rounded-pill text-bg-success"><i class="bi bi-check-circle-fill px-1"></i>Success</span>
                        </div>
                    </div>
                    <hr class="hr-space">
                    <div class="row">
                        <div class="col-3"><i class="bi bi-box px-1"></i>Block:</div>
                        <div class="col-9">
                            <span>10000000</span>
                        </div>
                    </div>
                    <hr class="hr-space">
                    <div class="row">
                        <div class="col-3"><i class="bi bi-clock px-1"></i>Timestamp:</div>
                        <div class="col-9">
                            <span>Jan-04-2023 04:40:56 PM </span>
                        </div>
                    </div>
                    <hr class="hr-space">
                    <div class="row">
                        <div class="col-md-3"><i class="bi bi-binoculars px-1"></i>From:</div>
                        <div class="col-md-9">
                            <span>0x295e26495cef6f69dfa69911d9d8e4f3bbadb89b</span>
                        </div>
                    </div>
                    <hr class="hr-space">
                    <div class="row">
                        <div class="col-md-3"><i class="bi bi-arrow-down px-1"></i>To:</div>
                        <div class="col-md-9">
                            <span>Contract 0x0000000000000000000000000000000000001000</span>
                        </div>
                    </div>
                    <hr class="hr-space">
                    <div class="row">
                        <div class="col-3"><i class="bi bi-fuel-pump px-1"></i>Gas Limit:</div>
                        <div class="col-9">
                            <span>224,131</span>
                        </div>
                    </div>
                    <hr class="hr-space">
                    <div class="row">
                        <div class="col-3"><i class="bi bi-fuel-pump-fill px-1"></i>Gas Used by Transaction:</div>
                        <div class="col-9">
                            <span>126,021 (56.23%)</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x px-1"></i>Close</button>
                </div>
            </div>
        </div>
    </div>
</div>