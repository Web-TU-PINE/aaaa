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

               <li class="manage-Course dropdown">
                   <a href="#" class="btn btn-block btn-info">ManageCourse</a>
                        <div class="dropdown-content">
                                <a href="CourseSoftware.php?status=admin">SOFTWARE</a>
                                <a href="CourseAuto.php?status=admin">AUTOMOTIVE</a>
                            </div>
               </li>

                <li class="manage-Course dropdown">
                   <a href="#" class="btn btn-block btn-info">ManageGallery</a>
                   <div class="dropdown-content">
                           <a href="Admin/add_gallery.php?status=admin">AddActivity</a>
                           <a href="gallery.php?status=admin">HandleActivity</a>
                       </div>
               </li>
               </div>>
            </div>
