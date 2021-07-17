<div class="col-xl-12 order-xl-1">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Requestd Form ( แบบฟอร์มขออนุญาต )</h3>
                </div>

            </div>
        </div>
        <div class="card-body ">
            <form>

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Start Date
                                    (วันที่เริ่มต้น)</label>

                                <input type="date" id="input-username" class="form-control"
                                    min="<?php echo date('Y-m-d'); ?>" require>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">End Date
                                    (วันที่สิ้นสุด)</label>
                                <input type="date" id="input-email" class="form-control"
                                    min="<?php echo date('Y-m-d'); ?>" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Item
                                    (สิ่งที่ต้องการวาง)</label>
                                <input type="text" id="input-first-name" class="form-control" " require>
                                            </div>
                                        </div>
                                        <div class=" col-lg-12 ">
                                            <div class=" form-group">
                                <label class="form-control-label" for="input-last-name">Reason
                                    (เหตุผลในการวาง)</label>
                                <input type="text" id="input-last-name" class="form-control" require>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Officer in Charge
                                    (ผู้รับผิดชอบ)</label>
                                <input class="form-control" type="text" require>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Tell No.
                                    (เบอร์โทรศัพท์)</label>
                                <input type="text" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Company
                                    (บริษัท)</label><br>
                                <select name="Company" id="company" class="form-select"
                                    aria-label="Default select example">
                                    <option value="1">Siam Denso Manufactoring</option>
                                    <option value="2">Siam Kyosan Manufactoring</option>
                                    <option value="3">Siam Denso & Kyosan</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Layout
                                    (รูปแบบการวาง)</label>
                                <input type="file" id="input-country" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Plan
                                    (แผนการวาง)</label>
                                <input type="file" id="input-postal-code" class="form-control"
                                    placeholder="Postal code">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Supervisor
                                    (หัวหน้างาน)</label><br>
                                <select name="Company" id="company" class="form-select"
                                    aria-label="Default select example">
                                    <option value="1">Siam Denso Manufactoring</option>
                                    <option value="2">Siam Kyosan Manufactoring</option>
                                    <option value="3">Siam Denso & Kyosan</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Approve Plant
                                </label><br>
                                <select name="Company" id="company" class="form-select"
                                    aria-label="Default select example">
                                    <option value="1">Siam Denso Manufactoring</option>
                                    <option value="2">Siam Kyosan Manufactoring</option>
                                    <option value="3">Siam Denso & Kyosan</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg float-right">Confirm</button>
            </form>
        </div>
    </div>
</div>
</div>