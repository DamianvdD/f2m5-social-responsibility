<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'overons' ) ?>"<?php if ( current_route_is( 'overons' ) ): ?> class="active"<?php endif ?>>Over Ons</a>
        <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'login' ) ): ?> class="active"<?php endif ?>>Login</a>
        <a href="<?php echo url( 'registreren' ) ?>"<?php if ( current_route_is( 'registreren' ) ): ?> class="active"<?php endif ?>>Registreren</a>
    </li>
</ul>