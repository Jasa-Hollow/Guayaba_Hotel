<div>
    <?php
        session_start();
        $user = $_SESSION['usuario'];

        // Se llama el archivo y función para imprimir la información de las reservas por usuario.
        include "../../../controllers/booking/booking.php";
        ViewBooking($user);
    ?>
</div>