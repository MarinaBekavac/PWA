<section class="newArticle" role="main">
   <div class="row">
       <p class="category">
         <?php
           if (isset($_POST['category']))
           {
               $category=$_POST['category'];
           }

            echo $category;
          ?>
        </p>
        <h1 class="title">
          <?php
            if (isset($_POST['title']))
            {
                $title=$_POST['title'];
            }

            echo $title;
          ?>
        </h1>
       <!--	<p>AUTOR:</p>-->
        <p>OBJAVLJENO:
        <?php
          echo date("j/n/Y G:i");
        ?>
        </p>
   </div>

     <section class="slika">
         <?php
          /* if (isset($_POST['photo']))
          {
              $photo=$_POST['photo'];
          }*/

          if (isset($_FILES['photo']['name']) && $_FILES['photo']['name']!=null )
          {
              $photo=$_FILES['photo']['name'];
          }
          else{
            $photo = $row['slika'];
          }
          //echo "<img src='img/$photo'";
          echo "<img src='img/".$photo."'/>";
         ?>
     </section>


     <section class="about">
       <p>
         <?php
           if (isset($_POST['about']))
           {
               $about=$_POST['about'];
           }

            echo $about;
         ?>
       </p>
    </section>

     <section class="sadrzaj">
       <p>
         <?php
             if (isset($_POST['content']))
             {
                 $content=$_POST['content'];
             }

            echo $content;
         ?>
       </p>
     </section>

</section>
