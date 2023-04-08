<?php require_once APPROOT.'/views/inc/item_add_head.php';?>

      <div class="contener">
         
            <form action="" method="post">
                  <div class="input-fild-style">
                      <label for="">Title:</label>
                      <input type="text" name="title" id="title" placeholder=Title>
                      <label for=""> *error</label>

                    </div>
                
                 <div class="input-fild-style">
                      <label for="">Catagory:</label>
                      <input type="text" name="title" id="title" placeholder=Catagory>
                      <label for=""> *error</label>

                    </div>

               <div class="input-fild-style">
                      <label for="">Date:</label>
                      <input type="date" name="date" id="date" >
                      <label for=""> *error</label>

                   
                   </div>

                <div class="input-fild-style">
                      <label for="">Images:</label>
                      <input type="file" name="image" id="image">
                      <label for=""> *error</label>

                   
                   </div>

                <div class="input-fild-style">
                      <label for="">Content:</label>
                      <textarea name="content" id="content" cols="30" rows="5"></textarea>
                      <label for=""> *error</label>

                    </div>
                    
               

                   <button type="submit">save</button>


              </form>







       </div>


<?php require_once APPROOT.'/views/inc/item_add_footer.php';?>