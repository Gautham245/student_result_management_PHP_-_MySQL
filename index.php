<html>
<head>
<style>
    body{
        background-color: #222629;
    }
.card {
    
    width : 300px;
    height : 300px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
     border-radius: 5px;
}
    .card1 {
       
    width : 300px;
    height : 300px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
     border-radius: 5px;
}

.column:hover .overlay{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    opacity: 0.5;
}
img {
    height: 100%;
  border-radius: 5px 5px 5px 5px;
}
.container {
    background-color:darkgray;
  padding: 2px 16px;
}
    .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 65.6%;
  opacity: 0;
  transition: .5s ease;
  background-color: darkgray;
}
    
  
    .text {
        opacity: 1;
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
}

    .column {
        position: relative;
        top:50%;
        left:50%;
            float: left;
        transform: translate(-80%,-70%);
    
width:30%;
  
}
    a.cust,a.cust:hover{
        color:inherit;
    }
</style>
    </head>
      <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">

<body>
    
  <div class="title">
        <span>Students Result Management System</span>
    </div>        
        <div class="column">
            <a href="./login.php" class="cust">
<div class="card">
  <img src="./images/img_avatar.png" alt="Admin" style="width:100%">
    <div class="overlay">
    <div class="text"><strong>Admin</strong></div></div>
  
 
 </div>
                </a>
    </div>
        <div class="column">
            <a href="./result.php" class="cust">
        <div class="card1">
  <img src="./images/student-avatar.jpg" alt="Student" style="width:100%">
            <div class="overlay">
    <div class="text"><strong>Student</strong></div></div>
  </div>
            </a>
    
 
</div>
        </body>
</html>