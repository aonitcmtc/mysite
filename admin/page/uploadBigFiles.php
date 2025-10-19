<style>
    .uploadFiles-css {
        padding: 25px;
    }
</style>

<div class="contrainer uploadFiles-css">
    <div class="row">
        <div class="col-12">

            <!-- <img src="../../asset/upload/user.png" alt="" srcset=""> -->

            <div class="alert alert-warning <?= $_GET['status'] == 3 ? '':'collapse'?>" role="alert">
                Upload Files Error! status :: <?= $_GET['status'] ?>
            </div>

            <form action="../controller/uploadfilesController.php" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Images</label>
                    <input class="form-control" type="file" id="formFile" name="fileToUpload">
                </div>
                <!-- <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Upload files</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="fileToUpload" multiple>
                </div> -->
                <!-- <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled>
                </div> -->
                <!-- <div class="mb-3">
                    <label for="formFileSm" class="form-label">Small file input example</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div> -->
                <!-- <div>
                    <label for="formFileLg" class="form-label">Large file input example</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div> -->

                <button type="submit" name="submit" class="btn btn-sm btn-secondary">uploadFiles</button>

                <!-- <input type="submit" value="Upload Image" name="submit"> -->
            </form>

        </div>

        <div class="mt-3">
            <h4>Files in floder</h4>

            <?php
                $dir    = '../../backhole/upload/';
                $files1 = scandir($dir);
                // $files2 = scandir($dir, SCANDIR_SORT_DESCENDING);
                
                echo "<pre>";
                print_r($files1);
                echo "</pre>";
                
                // print_r($files2);           
            ?>
        </div>
    </div>
</div>