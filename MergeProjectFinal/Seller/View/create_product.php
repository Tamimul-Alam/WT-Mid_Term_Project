<?php
include "../Controller/process_p.php"
?>


<html>
    <head>
        <h2>Create Product</h2> <hr> 
    </head>
    <body>
        <a href="seller_dash.php">Go Back</a>
        <form action=""  method="post" enctype="multipart/form-data">
            <table>
              <tr>
                  <td> <label for="ptittle">Product tittle:</label></td>
                  <td> <input type="text" id="ptittle" name="ptittle">
                  <?php
                  echo $ptittleerr;
                  ?>
                 
                  </td>
                  
              </tr> 
              <tr>
          
          <td><label for="description">Full description:</label></td>
         <td><textarea id="description" id="description" name="description" rows="4" cols="50"> </textarea>
             <?php
                  echo $deserr;
                  ?></td>
          </tr>

              <tr>
                <td> <label for="price">Pricing:</label> </td>
                <td> <input type="number" id="price" name="price"> 
                <?php
                  echo $priceerr;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="brand">Brand name:</label> </td>
                <td> <input type="text" id="brand" name="brand"> 
                <?php
                  echo $branderr;
                  ?></td>
           
            <tr>
            <tr>
                <td> <label for="catagory"> Catagory:</label> </td>
                <td><input type="radio" id="Clothes" name="catagory" value="Clothes">
                <label for="catagory">Clothes</label>
                <input type="radio" id="Smartphones" name="catagory" value="Smartphones">
                <label for="catagory">Smartphones</label>
                <input type="radio" id="Sports" name="catagory" value="Sports">
                <label for="catagory">Sports</label> 
                <input type="radio" id="Books" name="catagory" value="Books">
                <label for="catagory">Books</label> 
                <input type="radio" id="Automobile" name="catagory" value="Automobile">
                <label for="catagory">Automobile</label> 
                <input type="radio" id="Electronics" name="catagory" value="Electronics">
                <label for="catagory">Electronics</label> 
                <input type="radio" id="Sports" name="catagory" value="Sports">
                <label for="catagory">Sports</label> 
                <input type="radio" id="Others" name="catagory" value="Others">
                <label for="catagory">Others</label> 
                    <?php
                  echo $catagoryerr;
                  ?></td>
            </tr>
        
        
          
          <td>Media :</td>
         <td><input name="upload[]" type="file" multiple="multiple" />
             <?php
                  echo $fileerr;
                  ?></td>
          </tr>
 
         
         <tr>
          <br>
            
        <td><input type="submit" name="Submit" value="Save product">
       <tr>
</tr>
       </tr>

       <tr>
         <td></td>
         <td>
         <?php
                  echo $dataperr;
                  ?>

         </td>


       </tr>
            </table>
        </form>

    </body>
</html>