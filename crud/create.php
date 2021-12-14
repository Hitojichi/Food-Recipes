<?php

    include "config.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/crud.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">">
    <title>Buat Resep</title>
</head>
<body>

    <div class="page-wrapper">
        
        <div class="title-bar w3-center
                    w3-text-white w3-orange">

            <h1 class="w3-center">Membuat Resep</h1>
        </div>
            
        <div class="field-wrapper">
            
            <div id=field class="w3-white">
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <div class="form-group">
                        <label>Nama Resep</label><br>
                        <input type="text" name="recipe-name" class="form-control">
                        <br>
                    </div><br>

                    <div class="form-group">
                    <label>Deskripsi : </label><br>
                    <textarea name="deskripsi" class="form-control"></textarea><br>
                    </div><br>

                    <div class="form-group html-group">
                        <!-- Embed the HTMEditor -->
                        <label for="htmleditor">Bahan - bahan : </label><br>
                        <textarea class="htmeditor"></textarea>
                        <script src="../tinymce/tinymce.min.js"></script>
                        <script>

                            tinymce.init({
                                selector: '.htmeditor',
                                width: 1000,
                                height: 300,
                                imagetools_cors_hosts: ['picsum.photos'],
                                menubar: 'file edit view insert format tools table help',
                                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl', 
                                plugins: 'paste searchreplace autolink  save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                                imagetools_cors_hosts: ['picsum.photos']
                            });
                        </script>
                    </div> <br>

                    <div class="form-group html-group">
                        <!-- Embed the HTMEditor -->
                        <label>Cara : </label><br>
                        <textarea class="htmeditor"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="recipe-type">Jenis Resep : </label>
                        <select name="recipe-type" id="recipe-type">
                            <option value="panggang">Panggang</option>
                            <option value="minuman">Minuman</option>
                            <option value="roti">Roti</option>
                            <option value="sarapan">Sarapan</option>
                            <option value="makanan-pembuka">Makanan Pembuka</option>
                            <option value="makan-malam">Makan Malam</option>
                            <option value="makan-siang">Makan Siang</option>
                            <option value="cepat-saji">Cepat Saji</option>
                            <option value="salad">Salad</option>
                            <option value="saus">Saus</option>
                            <option value="snack">Snack</option>
                            <option value="sup">Sup</option>
                        </select>
                    </div><br><br>

                    <div class="form-group">
                        <label for="tags">Tag</label><br>
                        <input type="text" name="tags" id="tags">
                    </div><br>

                    <div class="form-group">
                        <label for="keyword">Keyword</label><br>
                        <input type="text" name="keyword" id="keyword">
                    </div><br>

                    <div class="form-group">
                        <label for="notes">Catatan</label><br>
                        <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="picture">Upload Picture</label><br>
                        <input type="file" name="picture" id="picture">
                    </div>
                    <br>

                    <div class="form-group w3-center">
                        <input type="submit" value="submit">
                    </div>

                </form>
            </div>
        </div>
        
    </div>

    
    
</body>
</html>