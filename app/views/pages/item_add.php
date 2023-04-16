<?php require_once APPROOT.'/views/inc/item_add_head.php';?>

      <div class="contener">
         
            <form action=" <?php echo URLROOT.'/Pages/item_add';?> "  method="post">
                  <div class="input-fild-style">
                      <label for=" ">Title:</label>
                      <input type="text" name="title" id="title" placeholder=Title>
                      <label for=" "> <?php 
                                    echo $data['title_error'];
                                ?></label>

                    </div>
                
                 <div class="input-fild-style">
                      <label for="">Catagory:</label>
                      <input type="text" name="catagory" id="title" placeholder=Catagory>
                      <label for=""> </label>

                    </div>

               <div class="input-fild-style">
                      <label for="">Date:</label>
                      <input type="date" name="date" id="date" >
                      <label for=""> </label>

                   
                   </div>

                <div class="input-fild-style">
                      <label for="">Images:</label>
                      <input type="file" name='files[]' multiple id="image" accept="image/*" >
                      <label for=""> </label>

                   
                   </div>

                <div class="input-fild-style">
                      <label for="">Content:</label>
                      <textarea name="content" id="content" cols="30" rows="5"></textarea>
                      <label for=""> </label>

                    </div>
                    
               
                   <div class="input-fild-style"> <button type="submit">save</button></div>   
                  
                               <!-- item add form  -->

              </form>







       </div>


<?php require_once APPROOT.'/views/inc/item_add_footer.php';?>