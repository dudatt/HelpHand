<div class="modal fade" id="modal_logo_maozinha" tabindex="-1" aria-labelledby="modal_logo_maozinha" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen m-0">
        <div class="modal-content">
            <div class="modal-header p-0">
                <h1 class="modal-title fs-5 text-center" id="modal_logo_maozinha">
                    <img src="../assets/img/logo_preta.png" alt="">
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span><ion-icon name="close-circle-outline"></ion-icon></span>
                </button>
            </div>
            <div class="modal-body p-0">
                <ol class="d-flex flex-column p-0">
                    <a href="#">
                        <ion-icon name="settings-outline"></ion-icon>
                            Serviços
                    </a>
                    <a href="#">
                        <ion-icon name="refresh-outline"></ion-icon>
                            Histórico
                    </a>
                    <a href="FAQ.php">
                        <ion-icon name="help-circle-outline"></ion-icon>
                            FAQ
                    </a>
                </ol>
            </div>     
            <div class="modal-footer d-flex justify-content-start m-3">
                <a href="#" class="profile_picture d-flex justify-content-center align-items-center">
                    <img src="../assets/img/user 1.png" alt="">
                </a>
                <a class="profile_picture-text w-50" href="perfil.php">
                    <h3><?php echo $_SESSION['nome'] ?></h3>
                </a>
                <a class="profile_picture-text w-50" href="../assets/bd/sairusuario.php">
                    <h3>Logout</h3>
                </a>
            </div>
        </div>
    </div>
</div>