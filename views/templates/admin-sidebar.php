<aside class="dashboard__sidebar"> 
    <nav class="dashboard__menu">     
        <div class="dashboard__logo" href=""> 
            <h2>     
                <i class="fa-solid fa-business-time "></i>       
                SID
            </h2>
            <div class="cerrar-menu">
                <i class="fa-sharp fa-solid fa-circle-xmark"></i>
            </div>   
        </div>

        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-house dashboard__enlace--icono"></i>            
            <span class="dashboard__menu-texto">
                Inicio
            </span>
        </a>
        <a href="/admin/ponentes" class="dashboard__enlace <?php echo pagina_actual('/ponentes') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-microphone dashboard__enlace--icono"></i>            
            <span class="dashboard__menu-texto">
                Ponentes
            </span>
        </a>
        <a href="/admin/eventos" class="dashboard__enlace <?php echo pagina_actual('/eventos') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-calendar dashboard__enlace--icono"></i>            
            <span class="dashboard__menu-texto">
                Eventos
            </span>
        </a>
        <a href="/admin/registrados" class="dashboard__enlace <?php echo pagina_actual('/registrados') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-users dashboard__enlace--icono"></i>            
            <span class="dashboard__menu-texto">
                Registrados
            </span>
        </a>
        <a href="/admin/regalos" class="dashboard__enlace <?php echo pagina_actual('/regalos') ? 'dashboard__enlace--actual' : '' ; ?>">
            <i class="fa-solid fa-gift dashboard__enlace--icono"></i>            
            <span class="dashboard__menu-texto">
                Regalos
            </span>
        </a>


        <form method="POST" action="/logout" class="dashboard__enlace">
            <i class="fa-solid fa-right-from-bracket dashboard__enlace--icono"></i>
            <input type="submit" value="Cerrar Sesión" class="header__logout">          
        </form>
    </nav>

</aside>   
