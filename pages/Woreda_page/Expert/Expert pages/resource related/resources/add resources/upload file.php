
        <?php
        $localhost = "localhost"; #localhost
        $dbusername = "root"; #username of phpmyadmin
        $dbpassword = "@Stephen12#xampp";  #password of phpmyadmin
        $dbname = "tds v1.0.1";  #database name

        #connection string
        $conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

        if (isset($_POST["submit"])) {
            #retrieve file title
            $title = $_POST["resourcename_name"];

            #file name with a random number so that similar dont get replaced
            $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

            #temporary file name to store file
            $tname = $_FILES["file"]["tmp_name"];

            #upload directory path
            $uploads_dir = '../../../../../../../file/';
            #TO move the uploaded file to specific location

            $imageFileType = strtolower(pathinfo($pname, PATHINFO_EXTENSION));

            

            #sql query to insert into database
            $sql = "INSERT into resource(title,file_name) VALUES('$title','$pname')";
            // || $imageFileType != "txt" || $imageFileType != "docx" || $imageFileType != "XLSX"

            // $checker = true;

            // if($checker==true){
            //     $checker=false;
            // }

            if ($_FILES["file"]["size"] <= 1000000) {
                if ($imageFileType == "pdf" || $imageFileType == "docx" || $imageFileType == "docx" || $imageFileType == "txt" || $imageFileType == "xlsx" || $imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
                    if (mysqli_query($conn, $sql)) {
                        move_uploaded_file($tname, $uploads_dir . '/' . $pname);
                        echo true;
                    } else {
                        echo "Unknown Error Occurred";
                    }
                } else {
                    echo "file must be pdf, word, excel, txt, jpg, jpeg, png";
                }
            } else {
                echo "file size must be less than 5mb";
            }





            // if($checker==true){
            //     echo true;
            // }else{
            //     echo $_FILES["file"]["size"];
            // }


        }


        ?>