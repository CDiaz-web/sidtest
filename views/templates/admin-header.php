<div class="barra-mobile">
    <div class="dashboard__logo">        
        <h2>
            <i class="fa-solid fa-business-time barra-mobile__icono"></i>
            SID
        </h2>
    </div>    
    <div class="barra-mobile__menu">       
        <i id="mobile-menu"  class="fa-solid fa-bars"></i>
    </div>
</div>

<div class="barra">
    <p>Hola: <span><?php echo $_SESSION['nombre']; ?></span></p>
    <form method="POST" action="/logout" class="dashboard__form">    
        <input type="submit" value="Cerrar Sesión" class="header__logout">          
    </form>
</div>
