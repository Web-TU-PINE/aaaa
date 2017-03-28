<html>

    <head>
        <title>Add_person</title>
        <?php
             include('../include/TabAdminMenu.php');
             include('StyleHandle.css');
        ?>
      </head>
      <body>

          <?php
           include('../Logig/ManagePerson.php');
          $obj = new ManagePerson;
          if(isset($_POST['submitAddPerson'])){
              if(isset($_POST)){
                  $name = $_FILES['image']['name'];
              echo $obj->add_person($_POST['position'],$_POST['name'], $_POST['lastname'],$name);
              }
          }else{
              echo "NOOOOOOoooo";
          }
          ?>

          <h2>Add_Person</h2>


          <form class="form" method="post" action="#" enctype="multipart/form-data">
              <p class="name">

                  <input type="text" name="position" id="position" placeholder="position" required />
                  <label for="position">ตำแหน่ง</label>
              </p>

              <p class="name">
                  <input type="text" name="name" id="name" placeholder="name" required></input>
                  <label for="name">ชื่อ</label>
              </p>

              <p class="lastname">
                  <input type="text" name="lastname" id="lastname" placeholder="lastname" required></input>
                  <label for="lastname">นามสกุล</label>
              </p>

              <p class="Submit">
              </p><br>
               Select Main Image:
                  <input type="file" name="image"/><br><br>
                  <input type="submit" name="submitAddPerson" value="Add person"/>
          </form>
           <?php
              include('../include/script.php');
          ?>
      </body>
      </html>
