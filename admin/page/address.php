<div class="text-center">
    <h1>At Address</h1>

    <!-- https://quilljs.com/playground/form -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <div class="px-5 py-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 my-3">
                <label for="geography" class="form-label">จังหวัด</label>
                <select id="geography" class="js-basic-select2 form-select form-select-lg mb-3" name="geography" aria-label="Large select example">
                    <option selected>ภูมิภาค</option>
                    <option value="1">เหนือ</option>
                    <option value="2">ใต้</option>
                    <option value="3">ตะวันออก</option>
                    <option value="4">ตะวันตก</option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3">
                <label for="province" class="form-label">จังหวัด</label>
                <select id="province" class="js-basic-select2 form-select form-select-lg mb-3" name="province" aria-label="Large select example">
                    <option selected>จังหวัด</option>
                    <option value="1">เชียงใหม่</option>
                    <option value="2">เชียงราย</option>
                    <option value="3">ตาก</option>
                    <option value="4">น่าน</option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3">
                <label for="ampure" class="form-label">อำเภอ</label>
                <select id="ampure" class="js-basic-select2 form-select form-select-lg mb-3" name="ampure" aria-label="Large select example">
                    <option selected>อำเภอ</option>
                    <option value="1">เมือง</option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3">
                <label for="tambons" class="form-label">ตำบล</label>
                <select id="tambons" class="js-basic-select2 form-select form-select-lg mb-3" name="tambons" aria-label="Large select example">
                    <option selected>ตำบล</option>
                    <option value="1">ต้นเกว๋น</option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3">
                <label for="zipcode" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="รหัสไปรษณีย์">
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3">
                <label for="exampleColorInput" class="form-label">Color picker</label>
                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.js-basic-select2').select2();
        });
    </script>
    
</div>