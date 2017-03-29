<?php
    include('head-tag.php');
?>
 <div class="row">
            <div style="text-align: center;">
                 <li class="manage-Course dropdown">
                   <a href="#" class="btn btn-block btn-info">ManageNew</a>
                        <div class="dropdown-content">
                              <a href="Admin/add_new.php">AddNews</a>
                              <a href="showAllnew.php?status=admin">HandleNews</a>
                            </div>
               </li>

                <li class="manage-Course dropdown">
                   <a href="#" class="btn btn-block btn-info">ManagePerson</a>
                        <div class="dropdown-content">
                               <a href="Admin/add_person.php?status=admin">AddPerson</a>
                               <a href="person.php?status=admin">HandlePerson</a>
                            </div>
               </li>


               </div>
            </div>
