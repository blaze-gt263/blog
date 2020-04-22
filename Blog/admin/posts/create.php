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
                     <h5>Control Panel</h5>
                      <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Manage posts</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Manage Users</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Manage Topics</a>
                          </li>
                        </ul>
                       
                   </div>
<!--                   abmin-main section-->
                  <div class="col-md-9 admin-main-section">
                      <a class="btn btn-secondary" href="create.php" role="button">Add Posts</a>
                      <a class="btn btn-secondary" href="index.php" role="button">Manage Posts</a>
                         
                          <h4 class="heading">Manage posts</h4>
                          
<!--                       form feild   -->
                    
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title of post">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Body</label>
                        <textarea class="form-control" id="editor"></textarea>
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleFormControlFile1">Add image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Topic</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Writtings</option>
                          <option>travel</option>
                        </select>
                      </div>
                    
                      
                      <button type="button" class="btn btn-secondary">Post</button>
                    </form>
                     
                         
 
                  </div>                                      

        </div>
        </div>
      </div>
   </div>
              
              
<!--              jQuery-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--   popper.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="../../asserts/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
              <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
              <script src="../../asserts/js/script.js"></script>
               
            
</body>
</html>