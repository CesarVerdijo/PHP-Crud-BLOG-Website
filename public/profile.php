<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .uploaded-image {
            margin-top: 20px;
            max-width: 100%;
        }
    </style>
     -->
</head>

<body>


<!-- <?=($error == "no image" ? "Please upload an image file." : 
($error == "too large" ? "The file size exceeds the limit." :
($error == "invalid file" ? "The file format is not supported." : "No error.")));?> -->

    
<!-- 
    <div class="container-sm my-5 mx-auto p-4 border rounded">
        <div class="form-group"> -->


        <div>
        <form action="imageUploads.php" method="post" enctype="multipart/form-data">
            <input type="file" name ="image" class="form-control-file mb-2"id="FormControlFile1">
            <label for="FormControlFile1" class="form-label">Upload</label>
            <input type="button" name="submit">
        </div>

            <?=if(isset($_Post['submit'])){
                $file=$_FILES['file'];

                print_r($file);
                var_dump($file);
            }?>

            


    <!-- //             <input type="file" class="form-control-file mb-2" id="exampleFormControlFile1">
    //             </div>
    //         <button type="submit" class="btn btn-success px-3 py-2">Submit</button>
    //         </form>
    //     <img src="uploaded-image.jpg" class="mt-4 img-fluid" alt="Uploaded image">
    // </div> -->









<!-- 
    // <div class="container">
    //     <h1>Profile Page</h1>
    //     <form action="process_profile.php" method="post" enctype="multipart/form-data">
    //         <label for="profilePicture">Choose a profile picture:</label>
    //         <input type="file" name="profilePicture" id="profilePicture" accept="image/*">
    //         <input type="submit" value="Upload">
    //     </form> -->

   <!-- Display the uploaded image -->
    
        // Assuming the uploaded images are stored in the following directory
        // $imageDirectory = "Downloads/";


        // Check if the image file exists
        // $uploadedImage = isset($_FILES["profilePicture"]) ? $_FILES["profilePicture"]["name"] : null;
        // if ($uploadedImage && file_exists($imageDirectory . $uploadedImage)) {
        //     echo '
        //}

        //>

//     </div>
// </body>

// </html>