<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
    <!--    links-->
  
<!--  font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
<!--  custome css-->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../asserts/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../../asserts/css/style.css">
   <link rel="stylesheet" href="../../asserts/css/admin.css">
   
    
     <title>admin</title>
</head>
<body>
    
    <div class="container-fluid">
<!--        navigation-->
       <div class="row">
           <div class="col-md-12">
               <div class="my-nav">    
                    <ul class="nav justify-content-end custon-links">
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i>Fanny</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">logout</a>
                            
                            </div>
                          </li>
                    
                    </ul>
           </div>
        </div>
       </div>
        
<!--        admin body-->

         <div class="content"> 
              <div id="main-section" class="admin-wrapper">
                  
<!--                   sidebar-->
                  <div class="row">
                   <div class="col-md-3 admin-sidebar">
                     <h5 class="side-bar-title" >Control Panel</h5>
                      <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active" href="../posts/index.php">Manage Posts</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../users/index.php">Manage Users</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index.php">Manage Topics</a>
                          </li>
                        </ul>
                       
                   </div>
<!--                   abmin-main section-->
                  <div class="col-md-9 admin-main-section">
                      <a class="btn btn-secondary" href="create.php" role="button">Add Topic</a>
                      <a class="btn btn-secondary" href="index.php" role="button">Manage Topics</a>
                         
                          <h4 class="heading">Topics</h4>
                      <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">Topic Name</th>
                              <th colspan="2" scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                           
                              <td ><a href="#" class="edit">edit</a></td>
                              <td ><a href="#"  class="delete">delete</a></td>
                             
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                             
                               <td class="edit" ><a href="#" class="edit">edit</a></td>
                              <td ><a href="#"  class="delete">delete</a></td>
                             
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                             
                               <td class="edit" ><a href="#" class="edit">edit</a></td>
                              <td ><a href="#"  class="delete">delete</a></td>
                            
                            </tr>
                          </tbody>
                        </table>
 
                  </div>                                      

        </div>
        </div>
      </div>
   </div>
              
              
<!--              jQuery-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--   popper.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="../../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
               
            
</body>
</html>