<style>
    .set-height {
        height: 200px;
    }
</style>
<div class="text-center">
    <h1>TextBox Editor HTML/JavaScript</h1>


    <!-- // Show content<div class="col-12 col-md-6 col-lg-4 my-3"> -->
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 my-3">
            <label for="province" class="form-label">เลือก หัวข้อ</label>
            <select id="province" class="js-basic-select2 form-select form-select-lg mb-3" name="province" aria-label="Large select example">
                <option selected>content</option>
                <option value="1">เชียงใหม่</option>
                <option value="2">เชียงราย</option>
                <option value="3">ตาก</option>
                <option value="4">น่าน</option>
            </select>
        </div>
    </div>
    

    <script src="../../asset/jquery.min.js"></script>
    <script>

        //insert
        $("#submit").click(function(){
            // alert("Data: 123");
            var text_html = $('.ql-editor').html();
            var is_title = $("#title").val();

            // is_title = JSON.parse(is_title);
            console.log(text_html);
            // $.post("controller/loginController.php", 
            $.post("../controller/texteditorController.php?status=add",
            {
                title: is_title,
                text: text_html,
                // city: "Duckburg"
            },
            function(data, status){
                console.log("Data: " + data + "\nStatus: " + status);
            });
        });

    </script>
    
</div>