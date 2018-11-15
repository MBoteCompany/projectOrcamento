<?php
//template name: login
?>
<?php wp_head(); ?>
<body class="default-primary-color">
    <div class="m-4 valign-wrapper">
        <div class="container">
            <div class="card">
                <div class="card-content light-primary-color center">
                    <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon/dollar.png" >
                    <h3><?php bloginfo(); ?></h3>
                </div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width light-primary-color">
                        <li class="tab"><a href="#login">Login</a></li>
                        <li class="tab"><a href="#registro">Registrar-se</a></li>
                    </ul>
                </div>
                <div class="card-content light-primary-color">
                    <div id="login">
                        <form class="col s12">
                            <div class="input-field col s12">
                                <input id="usuario" type="text">
                                <label for="usuario">Usuário</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="senha" type="password" class="validate">
                                <label for="senha">Senha</label>
                            </div>
                            <a class="btn waves-effect waves-light accent-color btn-large" href="<?php echo site_url('geral')?>">Entrar
                                <i class="material-icons right">send</i>
                            </a>
                            <button class="btn waves-effect waves-light accent-color btn-large hide" type="submit" name="action">Entrar
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                    <div id="registro">
                        <form class="col s12">
                            <div class="input-field col s12">
                                <input type="text" class="validate">
                                <label for="nome">Nome Completo</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="nick" type="text" class="validate">
                                <label for="nick">Nome de Usuário</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="senha_cadastro" type="password" class="validate">
                                <label for="senha_cadastro">Senha</label>
                            </div>
                            <a class="btn waves-effect waves-light accent-color btn-large" href="<?php echo site_url('geral')?>">Registrar-se
                                <i class="material-icons right">send</i>
                            </a>
                            <button class="btn waves-effect waves-light accent-color btn-large hide" type="submit" name="action" href="<?php site_url('geral')?>">Registrar-se
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
wp_footer();
