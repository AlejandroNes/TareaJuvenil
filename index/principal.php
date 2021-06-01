 <?php session_start(); ?>


 <?php
    if (!isset($_SESSION['usuario'])) {
        header('location:index.php');
    }

    ?>
 <?php include '../HeaderYFooter/header.php'; ?>
 <div class="container">
     <div class="row">
         <div class="col-8 offset-2 ">
             <div class="border border-info p-3">
                 <h1 class="text-center text-info m-5">Proyecto Juvenil</h1>
                 <div>
                     <h4 class="text-primary text-center">Bienvenido/a: <span class="text-white"><?php echo $_SESSION['usuario'] ?></span></h4>
                     <?php

                            if ($_SESSION['nivel'] == 1) {
                                echo '<td>' . '<h4 class="text-info text-center">Eres un administrador/a</h4>' . "</td>";
                            } elseif ($_SESSION['nivel'] == 2) {
                                echo '<td>' . '<h4 class="text-success text-center">Eres un secretario/a</h4>' . "</td>";
                            }
                    
                        ?>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <?php include '../HeaderYFooter/footer.php' ?>