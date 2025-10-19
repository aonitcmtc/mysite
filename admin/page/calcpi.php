<div class="text-center">
    <h1>Calcpi Admin</h1>

    <!-- <img src="../../asset/cat_test.png" alt="" srcset=""> -->

    <div class="my-5">
        <!-- <img src="./admin_img/cat-admin.jpg" alt="" srcset="" height="460"> -->

        <button type="button" id="calcpi" class="btn btn-sm btn-danger">calculate</button>
    </div>

    <div id="result_data"></div>

    <script src="../../asset/jquery.min.js"></script>
    <script>
        $("#calcpi").click(function(){
            // $.ajax({url: "../controller/uploadfilesController.php", 
            //     success: function(result){
            //         $("#result_data").html(result);
            // }});

            $.get("../controller/calcpiController.php?calcpi=1", 
                function(data, status){
                // alert("Data: " + data + "\nStatus: " + status);

                console.log(data);
                // $("#result_data").html(data);
            });
        });
    </script>
</div>