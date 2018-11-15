<!DOCTYPE html>
<html lang="pt-br">
    <!--Site Desenvolvido para O.S Desenvolvimento de pessoas e Otacílio Souza por Samuel MBote-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>
            <?php
            $nome = the_title();
            $descricao = get_bloginfo('name');
            echo $nome . " :: " . $descricao
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php
        //Páginas:
        $pg_geral = get_page_by_title('geral');
        $pg_pessoas = get_page_by_title('pessoas');
        $c_bensmateriais = get_category_by_slug('bens-materiais');
        $c_financeiro = get_category_by_slug('financeiro');
        date_default_timezone_set("America/Sao_Paulo");
        ?>

        <!--NAVEGACAO-->
        <header>
            <div class="navbar-fixed">
                <nav class="dark-primary-color">
                    <div class="nav-wrapper">
                        <div class="row ">
                            <a href="#" class="brand-logo"><?php the_title(); ?></a>
                        </div>
                        <ul id="slide-out" class="side-nav fixed">
                            <li>
                                <div class="user-view">
                                    <div class="background">
                                        <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon/dollar.png" >
                                    </div>
                                    <a href="#!user">
                                        <img class="circle" src="https://images.wallpaperscraft.com/image/snout_profile_tiger_predator_75914_1280x720.jpg">
                                    </a>
                                    <a href="#!name">
                                        <span class="white-text name">John Doe</span>
                                    </a>
                                    <a href="#!email">
                                        <span class="white-text email">jdandturk@gmail.com</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fas fa-user"></i>Meu Perfil</a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fas fa-cogs"></i>Configurações</a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fas fa-cogs"></i><?php //var_dump($pg_pessoas);     ?></a>
                            </li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li>
                                <a href="<?php echo site_url('geral'); ?>"><?php echo the_field('font_awesome_icon', $pg_geral); ?><?php echo the_field('tag_do_font_awesome_icon', $pg_geral); ?></i>
                                    Visão Geral
                                </a>
                            <li>
                            <li>
                                <a class="subheader">Cadastros</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('pessoas'); ?>"><?php echo the_field('font_awesome_icon', $pg_pessoas); ?><?php echo the_field('tag_do_font_awesome_icon', $pg_pessoas); ?></i>
                                    <?php // echo the_title($pg_pessoas); ?>Pessoas 
                                </a>
                            <li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class="collapsible-header"><?php echo the_field('font_awesome_icon', $c_bensmateriais); ?><?php echo the_field('tag_do_font_awesome_icon', $c_bensmateriais); ?>Bens Materiais<i class="fas fa-caret-down right"></i></a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <?php
                                                query_posts(array('post_type' => 'page', 'category_name' => 'cadastro', 'category_name' => 'bens-materiais', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1));
                                                if (have_posts()) : while (have_posts()) : the_post();
                                                        ?>
                                                        <li>
                                                            <?php echo get_field('font_awesome_icon'); ?><?php echo get_field('tag_do_font_awesome_icon'); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                else: endif;
                                                wp_reset_query();
                                                ?>
                                            </ul>  
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class="collapsible-header"><?php echo the_field('font_awesome_icon', $c_financeiro); ?><?php echo the_field('tag_do_font_awesome_icon', $c_financeiro); ?>Financeiro<i class="fas fa-caret-down right"></i></a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <?php
                                                query_posts(array('post_type' => 'page', 'category_name' => 'cadastro', 'category_name' => 'financeiro', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1));
                                                if (have_posts()) : while (have_posts()) : the_post();
                                                        ?>
                                                        <li>
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                else: endif;
                                                wp_reset_query();
                                                ?>
                                            </ul>  
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                        </ul>
                        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

                        <div class="">

                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <section class="row">
                <nav class="transparent z-depth-0">
                    <div class="">
                        <?php bloglite_breadcrumb(); ?> 
                    </div>
                </nav>
            </section>
            <!--/.NAVEGACAO-->