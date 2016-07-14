<?php get_header(); ?>  
    <div class="content">
        <div class="wrapper">
            <table>
                <tbody>
                <tr>
                    <td class="content_left">
                        <h1><?php the_title(); ?></h1>
                        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile;?>
                    </td>
                    <td class="content_right">
                        <?php require_once('sidebar2.php'); ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php get_footer(); ?>